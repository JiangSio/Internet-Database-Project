<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use frontend\models\LoginForm;
use frontend\models\ContactForm;
use frontend\models\news;
use frontend\models\author;
use frontend\models\reader;
class NewsController extends Controller{
    public function actionIndex()
    {
        $sql1="select title from news limit 0,6";
        $r1=news::findBysql($sql1)->all();

        $sql2="select abstract from news limit 0,6";
        $r2=news::findBysql($sql2)->all();

        $sql3="select authorName from author limit 0,6";
        $r3=author::findBysql($sql3)->all();


        $sql4="select doneDate from author limit 0,6";
        $r4=author::findBysql($sql4)->all();

        $sql5="select doneTime from author limit 0,6";
        $r5=author::findBysql($sql5)->all();


        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();


        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'abstract'=>$r2,
            'authorName'=>$r3,
            'doneDate'=>$r4,
            'doneTime'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
            ];

        return $this->renderPartial('index',$data);
    }
    public function actionIndex1()
    {
        $sql1="select title from news limit 6,6";
        $r1=news::findBysql($sql1)->all();

        $sql2="select abstract from news limit 6,6";
        $r2=news::findBysql($sql2)->all();

        $sql3="select authorName from author limit 6,6";
        $r3=author::findBysql($sql3)->all();


        $sql4="select doneDate from author limit 6,6";
        $r4=author::findBysql($sql4)->all();

        $sql5="select doneTime from author limit 6,6";
        $r5=author::findBysql($sql5)->all();


        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();


        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'abstract'=>$r2,
            'authorName'=>$r3,
            'doneDate'=>$r4,
            'doneTime'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];

        return $this->renderPartial('index1',$data);
    }
    public function actionIndex2()
    {
        $sql1="select title from news limit 12,6";
        $r1=news::findBysql($sql1)->all();

        $sql2="select abstract from news limit 12,6";
        $r2=news::findBysql($sql2)->all();

        $sql3="select authorName from author limit 12,6";
        $r3=author::findBysql($sql3)->all();


        $sql4="select doneDate from author limit 12,6";
        $r4=author::findBysql($sql4)->all();

        $sql5="select doneTime from author limit 12,6";
        $r5=author::findBysql($sql5)->all();


        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();


        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'abstract'=>$r2,
            'authorName'=>$r3,
            'doneDate'=>$r4,
            'doneTime'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];

        return $this->renderPartial('index2',$data);
    }



}