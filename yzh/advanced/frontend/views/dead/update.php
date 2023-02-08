<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dead $model */

$this->title = 'Update Dead: ' . $model->d_time;
$this->params['breadcrumbs'][] = ['label' => 'Deads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->d_time, 'url' => ['view', 'd_time' => $model->d_time]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dead-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
