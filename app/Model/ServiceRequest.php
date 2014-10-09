<?php

App::uses('AppModel', 'Model');

/**
 * ServiceRequest Model
 *
 * @property Status $Status
 * @property User $User
 * @property Category $Category
 * @property Priority $Priority
 */
class ServiceRequest extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'status_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            ),
        ),
        'parent_category' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Morate odabrati kategoriju',
            )
        ),
        'priority_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Your custom message here',
            ),
        ),
        'naziv_zahtjeva' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ne smije biti prazno',
            ),
        ),
        'opis_zahtjeva' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ne smije biti prazno',
            ),
        )
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Status' => array(
            'className' => 'Status',
            'foreignKey' => 'status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => array('User.id', 'User.username'),
            'order' => ''
        ),
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Priority' => array(
            'className' => 'Priority',
            'foreignKey' => 'priority_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function assignedTo($categoryId = null) {
        if ($categoryId != null) {
            $options = array(
                'conditions' => array(
                    'Solver.category_id' => $categoryId
                ),
                'fields' => 'user_id',
                'recursive' => -1
            );
            $assignedTo = $this->Category->Solver->find('first', $options);
            if (empty($assignedTo)) {
                return 1;
            }

            return $assignedTo['Solver']['user_id'];
        }
    }
    
    public function prepareDataForSave($data = array()) {
        if (!empty($data)) {
            if (isset($data[$this->name]['children_category']) && $data[$this->name]['children_category'] == '') {
                $this->validator()->add('children_category', array(
                    'Morate odabrati' => array(
                        'rule' => 'notEmpty',
                        'required' => 'create'
                    ),
                ));
            }
            
            if (isset($data[$this->name]['type']) && $data[$this->name]['type'] == '') {
                $this->validator()->add('type', array(
                    'Morate odabrati' => array(
                        'rule' => 'notEmpty',
                        'required' => 'create'
                    ),
                ));
            }
        }
        return $data;
    }
    
    public function beforeSave($options = array()) {

        if (isset($this->data[$this->name]['parent_category'])) {
            $this->data[$this->name]['category_id'] = $this->data[$this->name]['parent_category'];
        }
        if (isset($this->data[$this->name]['children_category'])) {
            $this->data[$this->name]['category_id'] = $this->data[$this->name]['children_category'];
        }
        if (isset($this->data[$this->name]['type'])) {
            $this->data[$this->name]['category_id'] = $this->data[$this->name]['type'];
        }
        
        return parent::beforeSave($options);
    }
}
