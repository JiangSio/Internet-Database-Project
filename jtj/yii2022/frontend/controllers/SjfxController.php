<?php


/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is a sjfx controller
 */

namespace frontend\controllers;

use frontend\models\SjfxPetrolprice;
use frontend\models\SjfxEvent;
use frontend\models\SjfxGasprice;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class SjfxController extends Controller
{
    public function actionPrice(){
        $query1=SjfxPetrolprice::find();
        $petrolprice=$query1->orderBy('date')->all();
        $newpetrol=$query1->orderBy('date DESC')->limit(1)->one();

        $query2=SjfxGasprice::find();
        $gasprice=$query2->orderBy('date')->all();
        $newproduct=SjfxGasprice::findBySql('SELECT * FROM sjfx_gasprice a WHERE NOT EXISTS (SELECT * FROM sjfx_gasprice b where a.product=b.product AND a.date < b.date )')->all();
        //$newdate=$query2->select(['product','COUNT(product) AS count','MAX(date) AS max'])->where(['>','date','2023-01-01'])->groupBy('product')->all();
        

        $query3=SjfxEvent::find();
        $events=$query3->orderBy('date DESC')->all();
        return $this->render("price",['patrolprice'=>$petrolprice,'newpetrol'=>$newpetrol,'events'=>$events,
                                'gasprice'=>$gasprice,'newproduct'=>$newproduct]);
    }
}