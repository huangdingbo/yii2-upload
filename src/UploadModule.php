<?php


namespace dsj\upload;


use yii\base\Module;

class UploadModule extends Module
{
    public $controllerNamespace = 'dsj\upload\controllers';
    public $defaultRoute = 'index';
}