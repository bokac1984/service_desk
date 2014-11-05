<?php

App::uses('AppController', 'Controller');

/**
 * Direktorijums Controller
 *
 * @property Direktorijum $Direktorijum
 * @property PaginatorComponent $Paginator
 */
class DirektorijumsController extends AppController {
    
    public function beforeFilter() {
        return parent::beforeFilter();
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    public function isAuthorized($user) {
        if ($this->Direktorijum->isOwnedBy($user)) {
            return true;
        }
        return parent::isAuthorized($user);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $id = $this->Direktorijum->getUserRootDirId($this->Auth->user('id'));
        if ($id === 0) {
            throw new NotFoundException(__('Nemate vas root folder kreiran. Kontaktirajte administratora.'));
        }
        
        $options = array(
            'conditions' => array(
                'Direktorijum.id' => $id
            ),
//            'fields' => array(
//                'Direktorijum.id'
//            ),
            'recursive' => '1',
            'joins' => array(
                array(
                    'table' => 'users_documents',
                    'alias' => 'UsersDocument',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'UsersDocument.user_id' => $this->Auth->user('id')
                    )
                ),               
            )
        );
//        $this->Direktorijum->id = $id;
//        debug($this->Direktorijum->find('all', array(
////            'joins' => array(
////                array(
////                    'table' => 'users_documents',
////                    'alias' => 'UsersDocument',
////                    'type' => 'INNER',
////                    'conditions' => array(
////                        'UsersDocument.user_id' => $this->Auth->user('id'),
////                        'UsersDocument.document_id = Document.id'
////                    )
////                ),               
////            ),
//            'recursive' => '-1'
//        )));
        $dir = $this->Direktorijum->find('all', $options);
        //debug($dir);
        $this->set('direktorijums', $dir);
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
        $options = array(
            'conditions' => array(
                'Direktorijum.' . $this->Direktorijum->primaryKey => $id
        ));
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
            $this->Direktorijum->create();
            
            if ($this->Direktorijum->save($this->request->data)) {
                $this->Session->setFlash(__('Folder uspjesno kreiran.'), 'flashSuccess');
                
                if ($this->request->data['Direktorijum']['parent_id'] === null) {
                    return $this->redirect(array('action' => 'index'));
                } else {
                    return $this->redirect(array('action' => 'view', $this->request->data['Direktorijum']['parent_id']));
                }

            } else {
                $this->Session->setFlash(__('Nije moguce kreirati folder, pokusajte ponovo.'), 'flashError');
            }
        }
        
        $this->set('parentId', $id);
        $this->set('userId', $this->Auth->user('id'));
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
