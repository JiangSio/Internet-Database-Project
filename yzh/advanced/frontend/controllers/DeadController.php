<?php

namespace frontend\controllers;

use frontend\models\Dead;
use frontend\models\DeadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeadController implements the CRUD actions for Dead model.
 */
class DeadController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Dead models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DeadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dead model.
     * @param string $d_time D Time
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($d_time)
    {
        return $this->render('view', [
            'model' => $this->findModel($d_time),
        ]);
    }

    /**
     * Creates a new Dead model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dead();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'd_time' => $model->d_time]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dead model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $d_time D Time
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($d_time)
    {
        $model = $this->findModel($d_time);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'd_time' => $model->d_time]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dead model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $d_time D Time
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($d_time)
    {
        $this->findModel($d_time)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dead model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $d_time D Time
     * @return Dead the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($d_time)
    {
        if (($model = Dead::findOne(['d_time' => $d_time])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
