<?php
/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is backend team homework page
 */

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="jumbotron text-center bg-transparent">
    
</div>
<h3>团队作业下载</h3>
<div class="card bg-gradient card-secondary">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        团队作业 Team
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
    <?php
    $path = './data/team/';
    $res = scandir($path);
    for($i=2;$i<count($res);$i++){
        $re = $res[$i];
        echo '<div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-file"></i></span>
        <span class="input-group-text">'.$re.'</span>
        </div>
        <span class="input-group-append">
        <button type="button" class="btn btn-default btn-flat"><a href="'.$path.$re.'">下载</a></button>
        </span>
        </div>';
    }
    ?>
    </div>
    <!-- /.card-body -->
    
</div>
<!-- /.card -->

<div class="jumbotron text-center bg-transparent">
    
</div>