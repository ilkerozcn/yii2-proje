<?php
namespace vendor\ilkerozcn\yii2proje\src\controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}