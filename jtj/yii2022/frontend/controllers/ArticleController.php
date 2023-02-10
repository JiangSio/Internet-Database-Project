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
use frontend\models\review;
class ArticleController extends Controller{
    public function actionIndex0()
    {

        $sql1="select title from news where id=0";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=0";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index0',$data);
    }
    public function actionIndex1()
    {

        $sql1="select title from news where id=1";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=1";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index1',$data);
    }
    public function actionIndex2()
    {

        $sql1="select title from news where id=2";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=2";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index2',$data);
    }
    public function actionIndex3()
    {

        $sql1="select title from news where id=3";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=3";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index3',$data);
    }
    public function actionIndex4()
    {

        $sql1="select title from news where id=4";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=4";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index4',$data);
    }
    public function actionIndex5()
    {

        $sql1="select title from news where id=5";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=5";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index5',$data);
    }
    public function actionIndex6()
    {

        $sql1="select title from news where id=6";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=6";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index6',$data);
    }
    public function actionIndex7()
    {

        $sql1="select title from news where id=7";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=7";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index7',$data);
    }
    public function actionIndex8()
    {

        $sql1="select title from news where id=8";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=8";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index8',$data);
    }
    public function actionIndex9()
    {

        $sql1="select title from news where id=9";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=9";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index9',$data);
    }
    public function actionIndex10()
    {

        $sql1="select title from news where id=10";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=10";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index10',$data);
    }
    public function actionIndex11()
    {

        $sql1="select title from news where id=11";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=11";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index11',$data);
    }
    public function actionIndex12()
    {

        $sql1="select title from news where id=12";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=12";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index12',$data);
    }
    public function actionIndex13()
    {

        $sql1="select title from news where id=13";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=13";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index13',$data);
    }
    public function actionIndex14()
    {

        $sql1="select title from news where id=14";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=14";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index14',$data);
    }
    public function actionIndex15()
    {

        $sql1="select title from news where id=15";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=15";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index15',$data);
    }
    public function actionIndex16()
    {

        $sql1="select title from news where id=16";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=16";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index16',$data);
    }
    public function actionIndex17()
    {

        $sql1="select title from news where id=17";
        $r1=news::findBysql($sql1)->all();

        $sql2="select text from news where id=17";
        $r2=news::findBysql($sql2)->all();

        $sql3="select name from review order by rand() limit 4";
        $r3=review::findBysql($sql3)->all();


        $sql4="select content from review order by rand() limit 4";
        $r4=review::findBysql($sql4)->all();

        $sql5="select time from review order by rand() limit 4";
        $r5=review::findBysql($sql5)->all();

        $sql6="select title from reader order by number desc";
        $r6=reader::findBysql($sql6)->all();



        $sql7="select number from reader order by number desc";
        $r7=reader::findBysql($sql7)->all();

        $data=['title'=>$r1,
            'text'=>$r2,
            'name'=>$r3,
            'content'=>$r4,
            'time'=>$r5,
            'bestArticle'=>$r6,
            'readNumber'=>$r7,
        ];
        return $this->renderPartial('index17',$data);
    }


}