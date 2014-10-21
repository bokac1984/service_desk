<?php

App::uses('AppModel', 'Model');

/**
 * Document Model
 *
 * @property Direktorijum $Direktorijum
 * @property User $User
 */
class Document extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

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

}
