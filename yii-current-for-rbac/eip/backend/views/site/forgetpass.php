<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
AppAsset::register($this);

$this->title = '找回密码';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<div class="login-box">
  <div class="login-logo">
    <?= Html::a('<b>Admin</b>LTE', ['site/index']) ?>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">请输入账号/邮箱/手机号找回密码</p>

    <?php if (\Yii::$app->session->hasFlash('error')) { ?>
    <div class="alert alert-block alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <strong>失败</strong> <?= \Yii::$app->session->getFlash('error') ?>
    </div>
    <?php } ?>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('发送校验码', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <a href="#">立即登录？</a><br>
        </div>

    <?php ActiveForm::end(); ?>
    <!-- /.social-auth-links -->

    
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
