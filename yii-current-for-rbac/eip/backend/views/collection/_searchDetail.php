<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        采集列表
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">搜索</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php $form = ActiveForm::begin([
                    'action' => ['meiju-list'],
                    'method' => 'get',
                ]); ?>
                <div class="row">
                    <div class="col-md-2">
                        <?= $form->field($model, 'mid')->textInput(['maxlength' => true])?>
                    </div>
                    <div class="col-md-2">
                        <?= $form->field($model, 'tdid') ?>
                    </div>
                    <div class="col-md-2">
                    <?= $form->field($model, 'title') ?>
                    </div>
                    <div class="col-md-2">
                    <?= $form->field($model, 'season') ?>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label" for="usersearch-status">&nbsp;</label>
                            <div>
                            <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
                            <?= Html::resetButton('重置', ['class' => 'btn btn-default']) ?>
                            <?= Html::a('新增详情', "/index.php?r=collection%2Fcreate-detail", ['class' => 'btn btn-success createDetail']) ?>

                            </div>
                        </div>

                    </div>

                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>