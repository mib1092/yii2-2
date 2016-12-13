<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Custom;

class CustomController extends Controller
{
    public function actionIndex()
    {
        $model = new Custom();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            Yii::$app->session->setFlash('success', 'You have entered the data correctly!');
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}