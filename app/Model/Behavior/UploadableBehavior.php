<?php

App::uses('Folder', 'Utility');
App::uses('HttpSocket', 'Network/Http');
App::uses('ModelBehavior', 'Model');

class UploadableBehavior extends ModelBehavior {

    public $settings = array(
        'uploadFolder' => 'files'
    );
    
    public function beforeSave(\Model $model, $options = array()) {
        $model->Direktorijum->getUserRootDirId(18);
        
        if (!empty($model->data[$model->alias]['path'])) {
                    if (!$this->uploadFiles($model, $model->data[$model->alias])) {
            $model->data['User']['id'] = $model->data[$model->alias]['user_id'];
            
        }
        }

        //debug($model->data);exit();
        parent::beforeSave($model, $options);
    }
    
    public function uploadFiles(\Model $model, $files = array()) {
        $error = false;
        $path = $model->root . $model->Direktorijum->getFolderPath($model->data['Direktorijum']['id']);

        foreach($files['path'] as $file) {  
            $filePath = $path . $file['name'];
            if (!file_exists($filePath)) {
                //debug($filePath);exit();
                $success = move_uploaded_file($file['tmp_name'], $filePath);
                if (!$success) {
                    $model->validationErrors['path'][0] = __d('Nije moguc upload');
                    $error = true;
                } else {
                    echo 'ovdje';
                    $model->data[$model->alias]['path'] = $filePath;
                    $model->data[$model->alias]['name'] = $file['name'];
                    $model->data[$model->alias]['size'] = $file['size'];
                }
            }
        }
        return $error;
    }

}
