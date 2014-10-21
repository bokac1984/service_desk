<?php

App::uses('AppModel', 'Model');
App::uses('Folder', 'Utility');

/**
 * Direktorijum Model
 *
 * @property User $User
 * @property Direktorijum $ParentDirektorijum
 * @property Direktorijum $ChildDirektorijum
 * @property Document $Document
 */
class Direktorijum extends AppModel {

    /**
     * Behaviors
     *
     * @var array
     */
    public $actsAs = array(
        'Tree',
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
        'name' => array(
            'exists' => array(
                'rule' => array('folderExists'),
                'message' => 'Postoji vec takav folder'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 8),
                'message' => 'Najvise 8 znakova'
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ParentDirektorijum' => array(
            'className' => 'Direktorijum',
            'foreignKey' => 'parent_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ChildDirektorijum' => array(
            'className' => 'Direktorijum',
            'foreignKey' => 'parent_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Document' => array(
            'className' => 'Document',
            'joinTable' => 'direktorijums_documents',
            'foreignKey' => 'direktorijum_id',
            'associationForeignKey' => 'document_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );
    
    /**
     * Validacija da li postoji vec folder sa ovim imenom u direktorijumu gdje pokusavamo da ga kreiramo
     * 
     * @param array $check sadrzi naziv foldera koji kreiramo
     * @return boolean
     */
    public function folderExists($check) {
        $path = $this->getFolderPath($this->data[$this->name]['parent_id']);
        $endPath = $this->root . $path;
        $folder = new Folder($endPath);
        return $folder->cd($check['name']) === false ? true : false;
    }
    
    /**
     * Kreira link za parent folder, "..." su link ka "gornjem" folder, a ako nema gornjeg
     * onda ide na index view, gdje su korisnicki folder prikazani
     * 
     * @param array $data
     * @return array
     */
    public function createParentLinkFolder($data = array()) {
        if (!empty($data)) {
            $parentId = $this->getParentDirId($data['Direktorijum']['id']) != null ? $this->getParentDirId($data['Direktorijum']['id']) : 0;
            $parentLink = array(
                'id' => $parentId,
                'name' => '...',
                'created' => '',
                'modified' => '',
            );
            array_unshift($data['ChildDirektorijum'], $parentLink);
        }
        return $data;
    }
    
    /**
     * Za zadati id dirketorijuma vraca njegov parent id
     * 
     * @param int $currentId
     * @return mixed
     */
    public function getParentDirId($currentId = null) {
        if ($currentId) {
            $parent = $this->getParentNode($currentId);
            if (!empty($parent)) {
                return $parent['Direktorijum']['id'];
            }
        }
        
        return null;
    }
    
    /**
     * Uzima id korisnickog foldera a ako ne psotoji vraca 0. 
     * U kontroleru se baca exception ako ne postoji root dir id
     * 
     * @param int $userId
     * @return int
     */
    public function getUserRootDirId($userId = null) {
        $data = $this->find('first', array(
            'conditions' => array(
                'Direktorijum.user_id' => $userId,
                'Direktorijum.parent_id' => null,
            ),
            'recursive' => '-1',
            'fields' => array(
                'Direktorijum.id',
            )
        ));
        if (!empty($data)) {
            return $data[$this->name]['id'];
        }
        
        return 0;
    }
    
    /**
     * Kreira folder na disku
     * 
     * @param string $name
     * @param string $rootFolder
     * @return boolean
     */
    public function createFolder($name, $rootFolder = '') {
        $folder = new Folder();
        $path = $this->root.DS;
        if (empty($rootFolder)) {
            $path  = $path . DS . $name;
        } else {
            $path  = $path . DS . $rootFolder . DS . $name;
        }
        
        if ($folder->create($path)) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Ovdje cemo sacuvati pravi folder i kreirati unos u bazi,
     * ako nije moguce onda javi gresku
     * 
     * @param type $options
     */
    public function beforeSave($options = array()) {
        $path = $this->getFolderPath($this->data[$this->name]['parent_id']);
        $endPath = $this->root . $path . $this->data[$this->name]['name'];
        
        $folder = new Folder($endPath);
        if (!$folder->create($endPath)) {
            return false;
        }
        
        return parent::beforeSave($options);
    }
    
    public function afterDelete() {
        $path = $this->root . $this->getFolderPath($this->id);
        $folder = new Folder($path);
        if (!is_null($folder->path)) {
            $folder->delete();
        } else {
            return false;
        }
        parent::afterDelete();
    }
    
    /**
     * Nalazi putanju za cuvanje foldera na disku za zadati folder u kojem se cuva novi folder
     * 
     * @param int $parentId
     * @return string
     */
    public function getFolderPath($parentId = null) {
        $data = $this->getPath($parentId, array('Direktorijum.name'));
        $path = DS;
        
        if (!$parentId) {
            return $path;
        }
        
        if (!empty($data)) {
            foreach ($data as $folderName) {
                $path .= $folderName['Direktorijum']['name'] . DS;
            }
        }
        
        return $path;
    }

}
