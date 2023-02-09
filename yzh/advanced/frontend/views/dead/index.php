<?php

use frontend\models\Dead;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DeadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Deads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dead', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'd_time',
            'de_num',
            'dw_num',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dead $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'd_time' => $model->d_time]);
                 }
            ],
        ],
    ]); ?>


</div>
