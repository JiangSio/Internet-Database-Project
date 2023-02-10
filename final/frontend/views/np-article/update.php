<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NpArticle $model */

$this->title = 'Update Np Article: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Np Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'aid' => $model->aid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
