<?php

App::uses('AppController', 'Controller');

/**
 * Documents Controller
 * 
 * @property Document $Document Model za ovaj kontroler
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
        if ($this->action === 'add') {
            return true;
        }
        if (in_array($this->action, array('edit', 'delete', 'view'))) {
            return $this->Document->isOwnedByUser($user, $this->passedArgs[0]);
        }
        
        return parent::isAuthorized($user);
    }
    
    public function beforeFilter() {
        return parent::beforeFilter();
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
        if (!$this->Document->exists($id)) {
            throw new NotFoundException(__('Ne postoji fajl'));
        }
        $options = array(
            'conditions' => array(
                'Document.' . $this->Document->primaryKey => $id
        ));
        $document = $this->Document->find('first', $options);

        $this->set(compact('document'));
    }
    
    public function download() {
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
     * @param string $id
     *
     * @return void
     */
    public function add($id = null) {
        if ($this->request->is('post')) {
            $this->Document->create();
            debug($this->request->data);
            if ($this->Document->saveAll($this->request->data)) {
                $this->Session->setFlash(__('Uspješno ste dodali fajl.', 'flashSuccess'));
                if ($this->request->data['Direktorijum']['Direktorijum'] === null) {
                    return $this->redirect(array('controller' => 'direktorijums', 'action' => 'index'));
                } else {
                    return $this->redirect(array('controller' => 'direktorijums', 'action' => 'view', $this->request->data['Direktorijum']['Direktorijum']));
                }
            } else {
                debug($this->Document->validationErrors);
                $this->Session->setFlash(__('Nije moguće sačuvati fajl.', 'flashError'));
            }
        }
        
        $user_id = $this->Auth->user('id');
        $dirId = $id !== null ? $id : $this->Document->Direktorijum->getUserRootDirId($user_id);
        
        $this->set(compact('user_id', 'dirId'));
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
            if (!in_array($this->Auth->user('id'), $this->request->data['User']['User'])) {
                array_push($this->request->data['User']['User'], $this->Auth->user('id'));
            }
            
            $folderIDs = $this->Document->Direktorijum->getFolderIdsForUsers($this->request->data['User']['User']);
            if ($folderIDs) {
                $this->request->data['Direktorijum'] = $folderIDs;
            }
            
            //debug($this->request->data);exit();
            if ($this->Document->save($this->request->data)) {
                $this->Session->setFlash(__('Uspjesno ste uredili fajl'), 'flashSuccess');
                return $this->redirect(array('controller' => 'direktorijums', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('Nije moguce spasiti promjene.'), 'flashError');
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
//        $this->Document->id = $id;
//        if (!$this->Document->exists()) {
//            throw new NotFoundException(__('Invalid document'));
//        }
//        $this->request->allowMethod('post', 'delete');
//        if ($this->Document->delete()) {
//            $this->Session->setFlash(__('The document has been deleted.'));
//        } else {
//            $this->Session->setFlash(__('The document could not be deleted. Please, try again.'));
//        }
//        return $this->redirect(array('action' => 'index'));
        $this->Document->DirektorijumsDocument->deleteAll(array('DirektorijumsDocument.document_id' => $this->Auth->user('id')), false);
        debug($this->Document->UsersDocument->deleteAll(array('UsersDocument.user_id' => $this->Auth->user('id')), false));
    }

}
