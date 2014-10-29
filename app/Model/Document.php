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
    
    
    /**
     * Provjeravamo da li je dokument korisnikov
     * 
     * @param type $user
     * @param type $id
     * @return type
     */
    public function isOwnedByUser($user, $id) {
        $data = $this->find('first', array(
            'joins' => array(
                array(
                    'table' => 'users_documents',
                    'alias' => 'UsersDocument',
                    'type' => 'INNER',
                    'conditions' => array(
                        'UsersDocument.user_id' => $user['id'],
                        'UsersDocument.document_id = Document.id'
                    )
                )
            ),
            'conditions' => array( 'Document.id' => $id ),
            'fields' => array( 'UsersDocument.user_id' ),
            'recursive' => '-1'
        ));
        return $data['UsersDocument']['user_id'] !== null ? true : false;
    }

}
