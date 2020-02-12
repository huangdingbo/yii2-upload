<?php
/**
 * Created by PhpStorm.
 * User: 黄定波
 * Date: 2019/12/19
 * Time: 10:45
 */

namespace dsj\upload\controllers;


use dsj\components\models\FileImportForm;
use yii\web\Controller;

class ImportController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $model = new FileImportForm();
        $model->load(\Yii::$app->request->post());
        var_dump(\Yii::$app->request->get());exit;
        var_dump(array_merge(\Yii::$app->request->get(),\Yii::$app->request->post()));exit;
    }
}