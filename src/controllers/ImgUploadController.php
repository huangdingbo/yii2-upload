<?php


namespace dsj\upload\controllers;

use dsj\components\models\ImgUploadModel;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ImgUploadController extends Controller
{
    public function actionUpload(){
        try {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model = new ImgUploadModel();
            $info = $model->upImage();
            if ($info && is_array($info)) {
                return $info;
            } else {
                return ['code' => 1, 'msg' => 'error'];
            }
        } catch (\Exception $e) {
            return ['code' => 1, 'msg' => $e->getMessage()];
        }
    }
}