<?php

App::uses('AppController', 'Controller');

/**
 * ServiceRequestsHes Controller
 *
 * @property ServiceRequestsH $ServiceRequestsH
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ServiceRequestsHesController extends AppController {

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
        $this->ServiceRequestsH->recursive = 0;
        $this->set('serviceRequestsHes', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ServiceRequestsH->exists($id)) {
            throw new NotFoundException(__('Invalid service requests h'));
        }
        $options = array('conditions' => array('ServiceRequestsH.' . $this->ServiceRequestsH->primaryKey => $id));
        $this->set('serviceRequestsH', $this->ServiceRequestsH->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ServiceRequestsH->create();
            if ($this->ServiceRequestsH->save($this->request->data)) {
                $this->Session->setFlash(__('The service requests h has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The service requests h could not be saved. Please, try again.'));
            }
        }
        $serviceRequests = $this->ServiceRequestsH->ServiceRequest->find('list');
        $users = $this->ServiceRequestsH->User->find('list');
        $this->set(compact('serviceRequests', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ServiceRequestsH->exists($id)) {
            throw new NotFoundException(__('Invalid service requests h'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->ServiceRequestsH->save($this->request->data)) {
                $this->Session->setFlash(__('The service requests h has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The service requests h could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ServiceRequestsH.' . $this->ServiceRequestsH->primaryKey => $id));
            $this->request->data = $this->ServiceRequestsH->find('first', $options);
        }
        $serviceRequests = $this->ServiceRequestsH->ServiceRequest->find('list');
        $users = $this->ServiceRequestsH->User->find('list');
        $this->set(compact('serviceRequests', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ServiceRequestsH->id = $id;
        if (!$this->ServiceRequestsH->exists()) {
            throw new NotFoundException(__('Invalid service requests h'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ServiceRequestsH->delete()) {
            $this->Session->setFlash(__('The service requests h has been deleted.'));
        } else {
            $this->Session->setFlash(__('The service requests h could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
