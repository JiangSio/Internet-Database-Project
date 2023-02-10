<?php

namespace frontend\controllers;

use frontend\models\NpArticle;
use frontend\models\NpArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NpArticleController implements the CRUD actions for NpArticle model.
 */
class NpArticleController extends Controller
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
     * Lists all NpArticle models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NpArticleSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NpArticle model.
     * @param int $aid 自增列
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aid)
    {
        return $this->render('view', [
            'model' => $this->findModel($aid),
        ]);
    }

    /**
     * Creates a new NpArticle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new NpArticle();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'aid' => $model->aid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NpArticle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $aid 自增列
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aid)
    {
        $model = $this->findModel($aid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aid' => $model->aid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NpArticle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $aid 自增列
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aid)
    {
        $this->findModel($aid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NpArticle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $aid 自增列
     * @return NpArticle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aid)
    {
        if (($model = NpArticle::findOne(['aid' => $aid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
