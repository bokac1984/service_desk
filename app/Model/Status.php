<?php

App::uses('AppModel', 'Model');

/**
 * Status Model
 *
 * @property ServiceRequest $ServiceRequest
 */
class Status extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'naziv';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'naziv' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Morate unijeti naziv statusa',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'opis' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Morate unijeti opis statusa',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ServiceRequest' => array(
            'className' => 'ServiceRequest',
            'foreignKey' => 'status_id',
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

}
