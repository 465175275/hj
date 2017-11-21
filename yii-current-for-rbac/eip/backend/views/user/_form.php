<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= Html::encode($this->title) ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php if (\Yii::$app->session->hasFlash('info')) { ?>
            <div class="alert alert-success fade in">
              <button type="button" class="close close-sm" data-dismiss="alert"> <i class="icon-remove"></i> </button>
              <strong>成功</strong> <?= \Yii::$app->session->getFlash('info') ?>
            </div>
            <?php } ?>
            <?php if (\Yii::$app->session->hasFlash('error')) { ?>
            <div class="alert alert-block alert-danger fade in">
              <button type="button" class="close close-sm" data-dismiss="alert"> <i class="icon-remove"></i> </button>
              <strong>失败</strong> <?= \Yii::$app->session->getFlash('error') ?>
            </div>
            <?php } ?>
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">

            <?php $form = ActiveForm::begin(); ?>
            <?php if(!$type){$arr=['disabled'=>'disabled'];}else{$arr=[];} ?>
            <?= $form->field($model, 'username')->textInput($arr) ?>
            <?php if($type){ ?>
            <?= $form->field($model, 'password_hash')->passwordInput() ?>
            <?php } ?>
            <?= $form->field($model, 'email')->textInput() ?>

            <?= $form->field($model, 'phone')->textInput() ?>

            <?= $form->field($model, 'status')->dropDownList([
                10=>'正常',
                0=>'封禁',
            ]) ?>
            <div class="form-group field-user-role required">
              <label class="control-label" for="user-status">用户角色</label>
            <?php if($type){ ?>
            <?= Html::dropDownList('role', null, $roles,['class'=>'form-control']) ?>
            <?php }else{ ?>
            <?= Html::dropDownList('role', $role, $roles,['class'=>'form-control']) ?>
            <?php
            } ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
