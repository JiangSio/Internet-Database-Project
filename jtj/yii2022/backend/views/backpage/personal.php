<?php
/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is backend personal homework page
 */

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="jumbotron text-center bg-transparent">
    
</div>
<h3>个人作业下载</h3>
<div class="card bg-gradient card-secondary">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        姜天嘉 Leader
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
    <?php
    $path = './data/personal/姜天嘉/';
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

<div class="card bg-gradient card-secondary">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        闫钊辉 Developer
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
    <?php
    $path = './data/personal/闫钊辉/';
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
<div class="card bg-gradient card-secondary">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        张继盛 Developer
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
    <?php
    $path = './data/personal/张继盛/';
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
<div class="card bg-gradient card-secondary">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        王天鹏 Developer
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
    <?php
    $path = './data/personal/王天鹏/';
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