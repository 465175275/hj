<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '添加角色';
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
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <strong>成功</strong> <?= \Yii::$app->session->getFlash('info') ?>
            </div>
            <?php } ?>
      			<?php if (\Yii::$app->session->hasFlash('error')) { ?>
      			<div class="alert alert-block alert-danger fade in">
      			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      			  <strong>失败</strong> <?= \Yii::$app->session->getFlash('error') ?>
      			</div>
      			<?php } ?>
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">
              <?php $form = ActiveForm::begin(); ?>
                <div class="form-group required">
                <?php echo Html::label('名称(* 必填选项：角色的名称)') . Html::textInput('description','',['class' => 'form-control']) ?>
                </div>
                <div class="form-group required">
                <?php echo Html::label('标识(* 必填选项：角色的英文标识)') . Html::textInput('name','',['class' => 'form-control']) ?>
                </div>
                <div class="form-group required">
                <?php echo Html::label('规则名称(~ 非必填，添加角色时不需要填写)') . Html::textInput('rule_name','',['class' => 'form-control']) ?>
                </div>
                <div class="form-group required">
                <?php echo Html::label('数据(~ 非必填，添加角色时不需要填写)') . Html::textarea('data','',['class' => 'form-control']) ?>
                </div>
              <div class="form-group">
                  <?= Html::submitButton('添加', ['class' =>'btn btn-success']) ?>
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

