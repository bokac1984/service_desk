<?php

App::uses('AppController', 'Controller');

class DocumentManagerAppController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function isAuthorized($user) {
        return true;
        // All registered users 
        if ($this->action === 'add' || $this->action === 'index') {
            return true;
        }

        // The owner 
        if (in_array($this->action, array('edit', 'delete', 'view'))) {
            $id = (int) $this->request->params['pass'][0];
            return $this->ServiceRequest->isOwnedBy($user);
        }

        parent::isAuthorized($user);
    }
}
