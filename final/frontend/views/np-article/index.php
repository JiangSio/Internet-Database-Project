<?php

use frontend\models\NpArticle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\NpArticleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Np Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Np Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aid',
            'title',
            'content',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, NpArticle $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'aid' => $model->aid]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
