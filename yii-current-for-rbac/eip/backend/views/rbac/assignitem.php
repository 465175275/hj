<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '分配权限';
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
                <?php echo Html::label('角色名称',null).'：'.Html::encode($parent); ?><br><hr>

                <?php echo Html::label('角色子节点',null).'：'.Html::checkboxList('children',$children['roles'],$roles); ?><hr>
                <?php echo Html::label('权限子节点',null).'：'.Html::checkboxList('children',$children['permissions'],$permissions); ?>
                <div class="form-group">
                    <?= Html::submitButton('授权', ['class' =>'btn btn-success']) ?>
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

