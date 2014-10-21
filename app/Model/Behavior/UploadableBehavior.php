<?php

App::uses('Folder', 'Utility');
App::uses('HttpSocket', 'Network/Http');
App::uses('ModelBehavior', 'Model');

class UploadBehavior extends ModelBehavior {

    public $settings = array();

}
