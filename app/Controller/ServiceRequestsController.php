<?php

App::uses('AppController', 'Controller');

/**
 * ServiceRequests Controller
 *
 * @property ServiceRequest $ServiceRequest
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ServiceRequestsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->ServiceRequest->recursive = 1;
        $this->set('serviceRequests', $this->Paginator->paginate(array('user_id' => $this->Auth->user('id'))));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ServiceRequest->exists($id)) {
            throw new NotFoundException(__('Invalid service request'));
        }
        $options = array('conditions' => array('ServiceRequest.' . $this->ServiceRequest->primaryKey => $id),
            'recursive' => 1);
        $serviceRequest = $this->ServiceRequest->find('first', $options);
        $assignedTo = $this->ServiceRequest->User->find('first', array(
            'conditions' => array(
                'User.id' => $serviceRequest['ServiceRequest']['assigned_to'],
                ),
            'fields' => array(
                'User.id',
                'User.username'
            ),
            'recursive' => -1
            ));
        $serviceRequest['ServiceRequest']['assigned_to'] = $assignedTo['User'];
        $this->set(compact('serviceRequest'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $children = array();
        $type = array();
        if ($this->request->is('post')) {
            
            $statusObj = $this->ServiceRequest->Status->find('first', array(
                'conditions' => array(
                    'Status.naziv' => 'Otvoren'
                ),
               'fields' => array('Status.id'),
               'recursive' => -1
            ));
            
            $this->request->data = $this->ServiceRequest->prepareDataForSave($this->request->data);
            if ($this->ServiceRequest->validates($this->request->data)) {
                $this->request->data['ServiceRequest']['status_id'] = $statusObj['Status']['id'];
                $this->request->data['ServiceRequest']['user_id'] = $this->Session->read('Auth.User.id');
                $this->request->data['ServiceRequest']['assigned_to'] = $this->ServiceRequest->assignedTo($this->request->data['ServiceRequest']['parent_category']);
                //unset($this->request->data['ServiceRequest']['parent_category']);

                debug($this->request->data);//exit();

                $this->ServiceRequest->create();
                if ($this->ServiceRequest->save($this->request->data)) {
                    $this->Session->setFlash(__('The service request has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    debug($this->ServiceRequest->validationErrors);
                    if ($this->request->data[$this->ServiceRequest->name]['parent_category']) {
                        $children = $this->ServiceRequest->Category->find('list', array(
                            'conditions' => array(
                                'Category.parent_id' => $this->request->data[$this->ServiceRequest->name]['parent_category']
                            )
                        ));
                    }
                    
                    if ($this->request->data[$this->ServiceRequest->name]['children_category']) {
                        $type = $this->ServiceRequest->Category->find('list', array(
                            'conditions' => array(
                                'Category.parent_id' => $this->request->data[$this->ServiceRequest->name]['children_category']
                            )
                        ));
                    }
                    $this->Session->setFlash(__('The service request could not be saved. Please, try again.'));
                }
            }
            else {
                                    if ($this->request->data[$this->ServiceRequest->name]['parent_category']) {
                        $children = $this->ServiceRequest->Category->find('list', array(
                            'conditions' => array(
                                'Category.parent_id' => $this->request->data[$this->ServiceRequest->name]['parent_category']
                            )
                        ));
                    }
                    
                    if ($this->request->data[$this->ServiceRequest->name]['children_category']) {
                        $type = $this->ServiceRequest->Category->find('list', array(
                            'conditions' => array(
                                'Category.parent_id' => $this->request->data[$this->ServiceRequest->name]['children_category']
                            )
                        ));
                    }
            }
        }
        
        $options = array('conditions' => array('Category.parent_id' => null));
        $categories = $this->ServiceRequest->Category->find('list', $options);
        
        $priorities = $this->ServiceRequest->Priority->find('list');
        $this->set(compact('statuses', 'users', 'categories', 'priorities', 'children', 'type'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ServiceRequest->exists($id)) {
            throw new NotFoundException(__('Invalid service request'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->ServiceRequest->save($this->request->data)) {
                $this->Session->setFlash(__('The service request has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The service request could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ServiceRequest.' . $this->ServiceRequest->primaryKey => $id));
            $this->request->data = $this->ServiceRequest->find('first', $options);
        }
        $statuses = $this->ServiceRequest->Status->find('list');
        $users = $this->ServiceRequest->User->find('list');
        $categories = $this->ServiceRequest->Category->find('list');
        $priorities = $this->ServiceRequest->Priority->find('list');
        $this->set(compact('statuses', 'users', 'categories', 'priorities'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ServiceRequest->id = $id;
        if (!$this->ServiceRequest->exists()) {
            throw new NotFoundException(__('Invalid service request'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ServiceRequest->delete()) {
            $this->Session->setFlash(__('The service request has been deleted.'));
        } else {
            $this->Session->setFlash(__('The service request could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
