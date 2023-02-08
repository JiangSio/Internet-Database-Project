<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Dead;

class XwController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }
}
