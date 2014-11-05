<?php

App::uses('Folder', 'Utility');
App::uses('HttpSocket', 'Network/Http');
App::uses('ModelBehavior', 'Model');

class UploadableBehavior extends ModelBehavior {
    
    public $preparedData = array();

    public $settings = array(
        'uploadFolder' => 'files'
    );

    public function beforeSave(\Model $model, $options = array()) {
        if (!empty($model->data[$model->alias]['path'])) {
            if (!$this->uploadFiles($model, $model->data[$model->alias])) {
                $model->data = $this->preparedData;
                //$model->data['User']['id'] = $model->data[$model->alias]['user_id'];
            }
        }

        debug($model->data);
        //exit();
        parent::beforeSave($model, $options);
    }

    public function uploadFiles(\Model $model, $files = array()) {
        $error = false;
        $path = $model->root . $model->Direktorijum->getFolderPath($model->data['Direktorijum']['Direktorijum']);
        $dataF = array();

        foreach ($files['path'] as $file) {
            //debug($file);
            $filePath = $path . $file['name'];
            if (!file_exists($filePath)) {
                //debug($filePath);exit();
                //$success = move_uploaded_file($file['tmp_name'], $filePath);
                $success = true;
                if (!$success) {
                    $model->validationErrors['path'][0] = __d('Nije moguc upload');
                    $error = true;
                } else {
                    echo 'ovdje';
//                    $dataF[$model->alias][]['path'] = $filePath;
//                    $dataF[$model->alias][]['name'] = $file['name'];
//                    $dataF[$model->alias][]['size'] = $file['size'];
                    $this->preparedData[] = array(
                        $model->alias => array(
                            'size' => $file['size'],
                            'name' => $file['name'],
                            'path' => $filePath
                        ),
                        'Direktorijum' => $model->data['Direktorijum'],
                        'User' => $model->data['User']
                    );                   
                }
            }
        }
        return $error;
    }
}