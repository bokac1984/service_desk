<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function login() {
        $this->set('title_for_layout', 'Login for admin');
        if ($this->Auth->user()) {
            $this->Session->setFlash('Login page is useless now, since I am already logged in.');
            $this->redirect('/', null, false);
        }

        if (!empty($this->request->data)) {
            // try to login in user with data
            if ($this->Auth->login()) {
                $this->User->updateAll(array('User.last_login' => 'NOW()'), array('User.id' => $this->Auth->user('id')));
                $redirection = $this->Auth->redirect() !== '/' 
                        ? $this->Auth->redirect() 
                        : array('controller' => 'service_requests', 'action' => 'index');
                debug($this->Auth->redirect());
                debug($redirection);//exit();
                $this->redirect($redirection);
            } else {
                $this->Session->setFlash('Your username or password is incorrect, please try again.');
            }
        }
    }

    public function logout() {
        $this->Session->setFlash('Hvala na posjeti servisa.');
        $this->redirect($this->Auth->logout());
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
/*
    public function initDB() {
        $group = $this->User->Group;

        // Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');

        // operatori
        $group->id = 3;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/ServiceRequests');
        $this->Acl->allow($group, 'controllers/ServiceRequestsHes');
        $this->Acl->allow($group, 'controllers/Categories');
        $this->Acl->allow($group, 'controllers/Statuses');
        $this->Acl->allow($group, 'controllers/Users/edit');

        // users
        $group->id = 2;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/ServiceRequests/add');
        $this->Acl->allow($group, 'controllers/ServiceRequests/view');
        $this->Acl->allow($group, 'controllers/ServiceRequests/index');
        //$this->Acl->allow($group, 'controllers/Categories/listChildCategories');
        // allow basic users to log out
        $this->Acl->allow($group, 'controllers/users/logout');

        // we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }*/

}
