<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Dead $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'd_time')->textInput() ?>

    <?= $form->field($model, 'de_num')->textInput() ?>

    <?= $form->field($model, 'dw_num')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
