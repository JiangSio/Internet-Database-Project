<?php
/**
 * 
 * Team:流浪NK
 * Coding by JiangTianjia , 2013095
 * This is backend admin page
 */

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
?>

<div class="jumbotron text-center bg-transparent">
    
</div>

<h3>数据库权限管理</h3>

<div class="card bg-gradient card-info">
    <div class="card-header border-0">
    <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        用户成员权限管理
    </h3>
    <div class="card-tools">
        <button type="button" class="btn bg btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
    </div>
    </div>
    <div class="card-body">

    <form action="index.php" method="get" id="formclick">
        <input type="hidden" name="r" value="backpage/admin">
        <?php
        $query=User::find();
        $res=$query->all();
        for($i=0;$i<count($res);$i++){
            $re = $res[$i];
            $strcheck="";
            if($re->admin==1)$strcheck="checked";
            echo '<div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-comments"></i></span>
            <span class="input-group-text">'.$re->username.'</span>
            </div>
            <div class="input-group-append">
            <div class="input-group-text">
            <span><input type="checkbox" name="'.$re->username.'" '.$strcheck.'> 管理员权限</span>
            </div>
            </div>
            </div>';
        }
        ?>
        <button type="button" class="btn btn-info btn-flat" onclick='document.getElementById("formclick").submit();'>更新</button>
    </form>
    </div>
    <!-- /.card-body -->
    
</div>
<!-- /.card -->

<div class="jumbotron text-center bg-transparent">
    
</div>

<script>

    

</script>