<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '修改节点';
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
                <?php echo  Html::textInput('name',$name,['class' => 'form-control','type'=>'hidden']) ?>
                <?php echo Html::label('名称(* 必填选项：节点的名称，用来区分标识)') . Html::textInput('description',$model->description,['class' => 'form-control']) ?>
                </div>
                <div class="form-group required">
                <?php echo Html::label('规则名称(* 必填：规则名称，格式为控制器+方法名，小写字母)') . Html::textInput('rule_name',$model->name,['class' => 'form-control']) ?>
                </div>
              <div class="form-group">
                  <?= Html::submitButton('修改', ['class' =>'btn btn-success']) ?>
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

