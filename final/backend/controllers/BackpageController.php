<?php

/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is back page controller
 */
namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use common\models\User;

class BackpageController extends Controller
{
    public function actionPersonal(){
        return $this->render('personal');
    }

    public function actionTeamwork(){
        return $this->render('teamwork');
    }

    public function actionAdmin(){
        $request = Yii::$app->request;
        $get = $request->get();
        if(count($get)>1){
            $admins=array();
            $num=0;
            foreach($get as $key => $value)
            {
                $admins[$num]=$key;
                $num++;
            }
            $admins[0]='';
            $records=User::find()->all();
            foreach($records as $record)
            {
                if(in_array($record->username,$admins)){
                    $record->admin=1;
                }
                else
                {
                    $record->admin=0;
                }
                $record->save();
            }
            $this->redirect(array("backpage/admin"));
        }
        return $this->render('admin');
    }
}