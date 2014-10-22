<?php

App::uses('AppController', 'Controller');

/**
 * Documents Controller
 *
 */
class DocumentsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function isAuthorized($user) {
        parent::isAuthorized($user);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Document->recursive = 0;
        $this->set('documents', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $file = $this->Document->find('first', array(
            'conditions' => array(
                'Document.id' => $id
            )
        ));
        $this->response->file(
            $file['Document']['path'],
            array('download' => true, 'name' => $file['Document']['name'])
        );
        // Return response object to prevent controller from trying to render
        // a view
        return $this->response;
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        if ($this->request->is('post')) {
            $this->Document->create();
            $this->request->data['Document']['user_id'] = $this->Auth->user('id');
            

            debug($this->request->data);exit();
            if ($this->Document->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The document has been saved.'));
                return $this->redirect(array('controller' => 'direktorijums', 'action' => 'index'));
            } else {
                debug($this->Document->validationErrors);
                $this->Session->setFlash(__('The document could not be saved. Please, try again.'));
            }
        }
        if ($id !== null) {
            $this->request->data['Direktorijum']['id'] = $id;
        } else {
            $this->request->data['Direktorijum']['id'] = $this->Document->Direktorijum->getUserRootDirId($this->Auth->user('id'));
        }
        $this->set(compact('user_id'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Document->exists($id)) {
            throw new NotFoundException(__('Invalid document'));
        }
        if ($this->request->is(array('post', 'put'))) {
            debug($this->request->data);exit();
            if ($this->Document->save($this->request->data)) {
                $this->Session->setFlash(__('The document has been saved.'));
                return $this->redirect(array('controller' => 'direktorijums', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('The document could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
            $this->request->data = $this->Document->find('first', $options);
        }
        $direktorijums = $this->Document->Direktorijum->find('list');
        $users = $this->Document->User->find('list');
        $this->set(compact('direktorijums', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Document->id = $id;
        if (!$this->Document->exists()) {
            throw new NotFoundException(__('Invalid document'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Document->delete()) {
            $this->Session->setFlash(__('The document has been deleted.'));
        } else {
            $this->Session->setFlash(__('The document could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
