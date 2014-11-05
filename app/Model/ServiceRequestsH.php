<?php

App::uses('AppModel', 'Model');

/**
 * ServiceRequestsH Model
 *
 * @property ServiceRequest $ServiceRequest
 * @property User $User
 */
class ServiceRequestsH extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'service_requests_h';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'service_request_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            ),
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
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
        'ServiceRequest' => array(
            'className' => 'ServiceRequest',
            'foreignKey' => 'service_request_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
    public function beforeSave($options = array()) {
        $seq = $this->find('first', array(
            'conditions' => array(
                'ServiceRequestsH.service_request_id' => $this->data['ServiceRequestsH']['service_request_id']
            ),
        ));
        //debug($seq);exit();
        if (!empty($seq)) {
            $sekvenca = (int)$seq['ServiceRequestsH']['sekvenca'];
            $this->data['ServiceRequestsH']['sekvenca'] = $sekvenca++;
        } else {
            $this->data['ServiceRequestsH']['sekvenca'] = 1;
        }
        
        return parent::beforeSave($options);
    }
}
