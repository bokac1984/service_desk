<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    protected $groupId = null;

    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Controller',
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session', 'Js');

    public function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->autoRedirect = false;
        $this->Auth->loginAction = array(
            'prefix' => null,
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
            'prefix' => null,
            'plugin' => null,
            'controller' => 'pages',
            'action' => 'index'
        );
        $this->Auth->authError = __('Nije dozvoljena ta stranica');
        $this->Auth->loginError = __('Pogresno korisnicko ime ili lozinka');
        $this->Auth->flash['element'] = "flashError";
        
        if ($this->Auth->user()) {
            $this->groupId = $this->Auth->user('group_id');
            switch($this->groupId) {
                case 1:
                    $this->layout = 'admin';
                    break;
                case 3:
                    $this->layout = 'admin';
                    break;
                default:
                    $this->layout = 'default';
                    break;
            }
        } else {
            $this->layout = 'signin';
        }
        
        $this->set('groupId', $this->groupId);
        $this->Auth->allow('*');
    }
    
    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['group_id']) && $user['group_id'] === '1') {
            return true;
        }
        
        if ($this->action === 'login' || $this->action === 'logout') {
            return true;
        }
        
        // Default deny
        return false;
    }

}
