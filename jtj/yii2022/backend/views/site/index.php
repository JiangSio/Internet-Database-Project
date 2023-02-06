<?php
/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is backend first page
 */

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Developer;
?>
<div>
    <div class="col-sm-2">
    <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
        <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
    </a>
    </div>
    <div class="col-sm-2">
    <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
        <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
    </a>
    </div>
</div>
<div class="jumbotron text-center bg-transparent">
    <h1 class="display-4">Congratulations!</h1>

    <p class="lead">You have successfully entered Backend Plantform</p>

    <p><a class="btn btn-lg btn-success" href="">Get started Now</a></p>
</div>
<div>
    <div class="row">
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="" data-title="sample 2 - black" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="" data-title="sample 3 - red" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="" data-title="sample 4 - red" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
    </div>
    <div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
        <div class="col-sm-2">
        <a data-toggle="" data-title="sample 1 - white" data-gallery="gallery">
            <img src="" class="img-fluid mb-2" alt="white sample" style="opacity:0"/>
        </a>
        </div>
    </div>
</div>

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">团队成员</h3>
</div>
<div class="card-body">
<form action="index.php" method="get" id="jtjclick">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        <span class="input-group-text">@姜天嘉</span>
        </div>
        <input type="text" class="form-control" id="jtj" name="jtj">
        <span class="input-group-append">
        <button type="button" class="btn btn-info btn-flat" onclick='document.getElementById("jtjclick").submit();'>Go!</button>
        </span>
    </div>
</form>
<form action="index.php" method="get" id="yzhclick">
<div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    <span class="input-group-text">@闫钊辉</span>
    </div>
    <input type="text" class="form-control" id="yzh" name="yzh">
    <span class="input-group-append">
    <button type="button" class="btn btn-info btn-flat" onclick='document.getElementById("yzhclick").submit();'>Go!</button>
    </span>
</div>
</form>
<form action="index.php" method="get" id="wtpclick">
<div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    <span class="input-group-text">@王天鹏</span>
    </div>
    <input type="text" class="form-control" id="wtp" name="wtp">
    <span class="input-group-append">
    <button type="button" class="btn btn-info btn-flat" onclick='document.getElementById("wtpclick").submit();'>Go!</button>
    </span>
</div>
</form>
<form action="index.php" method="get" id="zjsclick">
<div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    <span class="input-group-text">@张继盛</span>
    </div>
    <input type="text" class="form-control" id="zjs" name="zjs">
    <span class="input-group-append">
    <button type="button" class="btn btn-info btn-flat" onclick='document.getElementById("zjsclick").submit();'>Go!</button>
    </span>
</div>
</form>
<script>
    $("#jtj").val('<?php 
                      $a = Developer::find()->where(['id'=>1])->one();
                      echo $a->text;
                  ?>');
    $("#zjs").val('<?php 
                      $b = Developer::find()->where(['id'=>2])->one();
                      echo $b->text;
                  ?>');
    $("#wtp").val('<?php 
                      $c = Developer::find()->where(['id'=>3])->one();
                      echo $c->text;
                  ?>');
    $("#yzh").val('<?php 
                      $d = Developer::find()->where(['id'=>4])->one();
                      echo $d->text;
                  ?>');
</script>
<!-- /.card-body -->
</div>
</div>
</div>

<div class="jumbotron text-center bg-transparent">
    
</div>



    

