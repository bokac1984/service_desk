<?php

App::uses('DocumentManagerAppController', 'DocumentManager.Controller');

/**
 * Direktorijums Controller
 *
 * @property Direktorijum $Direktorijum
 * @property PaginatorComponent $Paginator
 */
class DirektorijumsController extends DocumentManagerAppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function isAuthorized($user) {
        return parent::isAuthorized($user);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
//        $this->Direktorijum->recursive = 0;
//        $direktorijums = $this->Direktorijum->generateTreeList(
//          array(
//              'parent_id' => null,
//              'user_id' => $this->Auth->user('id')
//          ),
//          null,
//          null,
//          '&nbsp;&nbsp;&nbsp;'
//        );
//        
//        $this->set('direktorijums', $direktorijums);
        $this->Direktorijum->recursive = 0;
        $this->set('direktorijums', $this->Paginator->paginate('Direktorijum', array(
                    'Direktorijum.user_id' => $this->Auth->user('id'),
                    'Direktorijum.parent_id' => null,
        )));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Direktorijum->exists($id)) {
            throw new NotFoundException(__('Invalid direktorijum'));
        }
        $options = array('conditions' => array('Direktorijum.' . $this->Direktorijum->primaryKey => $id));
        $dir = $this->Direktorijum->find('first', $options);

        $this->set('direktorijum', $this->Direktorijum->createParentLinkFolder($dir));
        $this->set('dirId' , $id);
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        if ($this->request->is('post')) {

            $this->request->data[$this->Direktorijum->name]['user_id'] = $this->Auth->user('id');
            $this->Direktorijum->create();
            
            if ($id !== null) {
                $this->request->data[$this->Direktorijum->name]['parent_id'] = $id;
            }

            if ($this->Direktorijum->save($this->request->data)) {
                $this->Session->setFlash(__('The direktorijum has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The direktorijum could not be saved. Please, try again.'));
            }
        }

        $parentDirektorijums = $this->Direktorijum->ParentDirektorijum->find('list', array(
            'conditions' => array(
                'ParentDirektorijum.user_id' => $this->Auth->user('id')
            )
        ));
        $this->set(compact('parentDirektorijums'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Direktorijum->exists($id)) {
            throw new NotFoundException(__('Invalid direktorijum'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Direktorijum->save($this->request->data)) {
                $this->Session->setFlash(__('The direktorijum has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The direktorijum could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Direktorijum.' . $this->Direktorijum->primaryKey => $id));
            $this->request->data = $this->Direktorijum->find('first', $options);
        }
        $users = $this->Direktorijum->User->find('list');
        $parentDirektorijums = $this->Direktorijum->ParentDirektorijum->find('list');
        $documents = $this->Direktorijum->Document->find('list');
        $this->set(compact('users', 'parentDirektorijums', 'documents'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Direktorijum->id = $id;
        if (!$this->Direktorijum->exists()) {
            throw new NotFoundException(__('Invalid direktorijum'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Direktorijum->delete()) {
            $this->Session->setFlash(__('The direktorijum has been deleted.'));
        } else {
            $this->Session->setFlash(__('The direktorijum could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
