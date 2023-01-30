<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NpArticle $model */

$this->title = 'Create Np Article';
$this->params['breadcrumbs'][] = ['label' => 'Np Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
