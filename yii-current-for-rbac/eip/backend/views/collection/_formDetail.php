<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
            <div class="col-md-6 col-md-offset-1">
                <?php if (\Yii::$app->session->hasFlash('info')) { ?>
                    <div class="alert alert-success fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert"><i class="icon-remove"></i>
                        </button>
                        <strong>成功</strong> <?= \Yii::$app->session->getFlash('info') ?>
                    </div>
                <?php } ?>
                <?php if (\Yii::$app->session->hasFlash('error')) { ?>
                    <div class="alert alert-block alert-danger fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert"><i class="icon-remove"></i>
                        </button>
                        <strong>失败</strong> <?= \Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php } ?>
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                    </div>
                    <div class="box-body">

                        <?php $form = ActiveForm::begin(); ?>
                        <?= $form->field($model, 'mid')->textInput() ?>
                        <?= $form->field($model, 'title')->textInput() ?>
                        <?= $form->field($model, 'season')->textInput() ?>
                        <?= $form->field($model, 'urls')->textInput() ?>
                        <?= $form->field($model, 'click_num')->textInput() ?>
                        <?= $form->field($model, 'password')->textInput() ?>
                        <?= $form->field($model, 'size')->textInput() ?>
                        <?= $form->field($model, 'standard')->textInput() ?>
                        <?= $form->field($model, 'subtitle')->textInput() ?>
                        <?= $form->field($model, 'create_time')->textInput() ?>
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
