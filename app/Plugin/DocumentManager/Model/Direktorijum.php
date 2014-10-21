<?php

App::uses('DocumentManagerAppModel', 'DocumentManager.Model');
App::uses('Folder', 'Utility');

/**
 * Direktorijum Model
 *
 * @property User $User
 * @property Direktorijum $ParentDirektorijum
 * @property Direktorijum $ChildDirektorijum
 * @property Document $Document
 */
class Direktorijum extends DocumentManagerAppModel {

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
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
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
        
        //debug($data);exit();
        
        return $data;
    }
    
    public function getParentDirId($currentId = null) {
        if ($currentId) {
            $parent = $this->getParentNode($currentId);
            if (!empty($parent)) {
                return $parent['Direktorijum']['id'];
            }
        }
        
        return null;
    }
    
    public function createFolder($rootFolder = '', $name) {
        $folder = new Folder();
        $path = $this->root.DS;
        if (empty($rootFolder)) {
            $path  = $path . DS . $name;
        } else {
            $path  = $path . DS . $rootFolder . DS . $name;
        }
        
        if ($folder->create($pathname)) {
            return true;
        }
        
        return false;
    }
    
    public function beforeSave($options = array()) {
        $data = $this->children(1, true);
        //debug($data);exit();
        parent::beforeSave($options);
    }

}
