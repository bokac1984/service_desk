<?php

App::uses('DocumentManagerAppModel', 'DocumentManager.Model');

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

}
