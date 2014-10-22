<?php

App::uses('AppModel', 'Model');
App::uses('Folder', 'Utility');

/**
 * User Model
 *
 * @property Group $Group
 * @property ServiceRequest $ServiceRequest
 * @property ServiceRequestsH $ServiceRequestsH
 * @property Solver $Solver
 * @property Direktorijum $Direktorijum
 */
class User extends AppModel {

    public $displayField = 'username';
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'username' => array(
            'unique' => array(
                'rule' => array('isUnique'),
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
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
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
        'ServiceRequest' => array(
            'className' => 'ServiceRequest',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'ServiceRequestsH' => array(
            'className' => 'ServiceRequestsH',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Solver' => array(
            'className' => 'Solver',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Direktorijum' => array(
            'className' => 'Direktorijum',
            'foreignKey' => 'user_id',
        ),
    );
    public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }

    /**
     * 
     * @param type $user
     * @return type
     */
    public function bindNode($user) {
        return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }

    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password(
                        $this->data['User']['password']
        );
        return true;
    }
    
    public function afterSave($created, $options = array()) {
        if ($created) {
            //$folder = new Folder();
            $folderName = $this->data['User']['username'];
                $data = array('Direktorijum' => array(
                    'parent_id' => null,
                    'user_id' => $this->getLastInsertId(),
                    'name' => $folderName
                ));
                $this->log($data);
                if ($this->Direktorijum->save($data)) {
                    $this->log('Folder uspjesno kreiran');
                } else {
                    $this->log($this->Direktorijum->validationErrors);
                    $this->log('Nece da sacuva korisnika u bazi');
                }
//            if ($folder->create('files'.DS.$folderName)) {
//   
//            } else {
//                $this->log('Folder nije moguce bilo kreirati');
//            }
        }
        
        parent::afterSave($created, $options);
    }
}
