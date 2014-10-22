<?php

App::uses('AppModel', 'Model');

/**
 * Document Model
 *
 * @property Direktorijum $Direktorijum
 * @property User $User
 */
class Document extends AppModel {
    
    public $actsAs = array('Uploadable');
    
    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Direktorijum' => array(
            'className' => 'Direktorijum',
            'joinTable' => 'direktorijums_documents',
            'foreignKey' => 'document_id',
            'associationForeignKey' => 'direktorijum_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        ),
        'User' => array(
            'className' => 'User',
            'joinTable' => 'users_documents',
            'foreignKey' => 'document_id',
            'associationForeignKey' => 'user_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );
    
    public function saveFileInfo() {
        
    }
    
    
//    public function beforeSave($options = array()) {
//        debug($this->data)
//        ;
//        $data = array(
//            'Document' => array(
//                'id' => $this->id
//            )
//        );
//        $this->Direktorijum->save($data);
//        foreach ($this->data['User'] as $user) {
//            debug($user);
//        }
//        exit();
//        parent::beforeSave($options);
//    }

}
