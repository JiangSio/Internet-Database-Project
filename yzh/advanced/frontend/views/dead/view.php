<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Dead $model */

$this->title = $model->d_time;
$this->params['breadcrumbs'][] = ['label' => 'Deads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dead-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'd_time' => $model->d_time], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'd_time' => $model->d_time], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'd_time',
            'de_num',
            'dw_num',
        ],
    ]) ?>

</div>
