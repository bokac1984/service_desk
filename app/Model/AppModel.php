<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
    
    public $actsAs = array('Containable');
    
    public $root;
    
    public function __construct($id = false, $table = null, $ds = null) {
        $this->root = 'files';
        parent::__construct($id, $table, $ds);
    }


    public function getLastQuery() {
        $dbo = $this->getDatasource();
        $logs = $dbo->getLog();
        $lastLog = end($logs['log']);
        return $lastLog['query'];
    }
    /**
     * Check if given object belongs to user
     * 
     * @param object $user
     * @return boolean
     */
    public function isOwnedBy($user) {
        return $this->field('id', array('user_id' => $user['id'])) !== false;
    }
}
