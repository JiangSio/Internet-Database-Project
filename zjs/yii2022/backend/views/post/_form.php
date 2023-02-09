<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?php
    $allStatus=(new \yii\db\Query())->select(['name','id'])->from('poststatus')->indexBy('id')->column();
    $allAdminuser=(new \yii\db\Query())->select(['nickname','id'])->from('adminuser')->indexBy('id')->column();


    ?>
    <?= $form->field($model,'status')->dropDownList($allStatus,['prompt'=>'请选择状态']);?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'author_id')->dropDownList($allAdminuser,['prompt'=>'请选择作者']);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
