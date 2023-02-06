<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use common\models\Developer;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $get1 = $request->get("jtj");
        if($get1!=null){
            $record=Developer::find()->where(['name'=>'姜天嘉'])->one();
            $record->text=$get1;
            $record->save();
            $this->redirect(array('site/index'));
        }
        $get2 = $request->get("yzh");
        if($get2!=null){
            $record=Developer::find()->where(['name'=>'闫钊辉'])->one();
            $record->text=$get2;
            $record->save();
            $this->redirect(array('site/index'));
        }
        $get3 = $request->get("wtp");
        if($get3!=null){
            $record=Developer::find()->where(['name'=>'王天鹏'])->one();
            $record->text=$get3;
            $record->save();
            $this->redirect(array('site/index'));
        }
        $get4 = $request->get("zjs");
        if($get4!=null){
            $record=Developer::find()->where(['name'=>'张继盛'])->one();
            $record->text=$get4;
            $record->save();
            $this->redirect(array('site/index'));
        }
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
