<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '添加节点';
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
                <?php echo Html::label('名称(* 必填选项：节点的名称，用来区分标识)') . Html::textInput('description','',['class' => 'form-control']) ?>
                </div>
                <div class="form-group required">
                <?php echo Html::label('规则名称(* 必填：规则名称，格式为控制器+方法名，小写字母)') . Html::textInput('rule_name','',['class' => 'form-control']) ?>
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

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">节点列表</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>节点名称</th>
                  <th>节点规则</th>
                  <th>操作</th>
                </thead>
                <tbody>
                <?php
                  foreach($data as $v){
                ?>
                <tr>
                  <td><?= $v['description'] ?></td>
                  <td><?= $v['name'] ?></td>
                  <td>
                    <?= Html::a('<small class="label label-info">修改</small>', ['rbac/updateitem', 'name' => $v['name']]) ?>
                    &nbsp;
                    <?= Html::a('<small class="label label-danger">删除</small>', ['rbac/deleteitem', 'name' => $v['name']]) ?>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
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

