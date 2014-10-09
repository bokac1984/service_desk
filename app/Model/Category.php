<?php

App::uses('AppModel', 'Model');

/**
 * Category Model
 *
 * @property ServiceRequest $ServiceRequest
 * @property Solver $Solver
 */
class Category extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'naziv';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ServiceRequest' => array(
            'className' => 'ServiceRequest',
            'foreignKey' => 'category_id',
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
            'foreignKey' => 'category_id',
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
    
    
    public function hasChildren($id = null) {
        $hasChildren = $this->find('all', array(
            'conditions' => array(
                'Category.parent_id' => $id
            )
        ));
        
        return empty($hasChildren);
    }

}
