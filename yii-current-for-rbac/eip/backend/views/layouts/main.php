<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<?php //var_dump(\Yii::$app->request->getUserIP());die; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php $this->beginBody() ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= Url::toRoute('site/index') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <?php 
        $controllerId = \Yii::$app->controller->id;
        $controllerAction = \Yii::$app->controller->action->id;
      ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">欢迎回来！<?= \Yii::$app->user->identity->username ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="<?= Url::toRoute('user/mypassword') ?>">修改密码</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="<?= Url::toRoute('user/myinfo') ?>">修改个人资料</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  &nbsp;
                </div>
                <div class="pull-right">
                  <?= Html::a('安全退出', ['site/logout'], [
                      'class' => 'btn btn-default btn-flat',
                      'data' => [
                          'confirm' => '您确定要退出登录？',
                          'method' => 'post',
                      ],
                  ]) ?>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?= Html::img('@web/admin/dist/img/user2-160x160.jpg', ['alt' => 'My logo','class'=>"img-circle"]) ?>
        </div>
        <div class="pull-left info">
          <p><?= \Yii::$app->user->identity->username ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <?php if(\Yii::$app->user->can('site/index')){ ?>
        <li <?php if($controllerId=='site' && $controllerAction=='index'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('site/index') ?>"><i class="fa fa-home"></i> <span>系统首页</span></a></li>
        <?php } ?>

        <?php if(\Yii::$app->user->can('user/create') || \Yii::$app->user->can('user/index')){ ?>
        <li class="treeview <?php if($controllerId=='user'){echo 'active menu-open';} ?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>管理员系统</span>
          </a>
          <ul class="treeview-menu">
            <?php if(\Yii::$app->user->can('user/create')){ ?>
            <li <?php if($controllerAction=='create' && $controllerId=='user'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('user/create') ?>"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
            <?php } ?>
            <?php if(\Yii::$app->user->can('user/index')){ ?>
            <li <?php if($controllerAction=='index' && $controllerId=='user'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('user/index') ?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
            <?php } ?>
          </ul>
        </li>
        <?php } ?>

        <?php if(\Yii::$app->user->can('rbac/create') || \Yii::$app->user->can('rbac/index') || \Yii::$app->user->can('rbac/createitem')){ ?>
        <li class="treeview <?php if($controllerId=='rbac'){echo 'active menu-open';} ?>">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>权限系统</span>
          </a>
          <ul class="treeview-menu">
            <?php if(\Yii::$app->user->can('rbac/create')){ ?>
            <li <?php if($controllerAction=='create' && $controllerId=='rbac'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('rbac/create') ?>"><i class="fa fa-circle-o"></i> 添加角色</a></li>
            <?php } ?>
            <?php if(\Yii::$app->user->can('rbac/index')){ ?>
            <li <?php if($controllerAction=='index' && $controllerId=='rbac'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('rbac/index') ?>"><i class="fa fa-circle-o"></i> 角色列表</a></li>
            <?php } ?>
            <?php if(\Yii::$app->user->can('rbac/createitem')){ ?>
            <li <?php if($controllerAction=='createitem' && $controllerId=='rbac'){echo 'class="active"';} ?>><a href="<?= Url::toRoute('rbac/createitem') ?>"><i class="fa fa-circle-o"></i> 添加权限节点</a></li>
            <?php } ?>
          </ul>
        </li>
        <?php } ?>

              <li class="treeview <?php if($controllerId=='user'){echo 'active menu-open';} ?>">
                  <a href="#">
                      <i class="fa fa-user"></i>
                      <span>数据采集</span>
                  </a>
                  <ul class="treeview-menu">
                          <li ><a href="<?= Url::toRoute('collection/index') ?>"><i class="fa fa-circle-o"></i> 列表管理</a></li>
                          <li ><a href="<?= Url::toRoute('collection/caiji-news') ?>"><i class="fa fa-circle-o"></i> 最新采集</a></li>
                          <li ><a href="<?= Url::toRoute('collection/caiji-list') ?>"><i class="fa fa-circle-o"> </i>采集列表</a></li>
                  </ul>
              </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <?= $content ?>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="https://soera.cn">noecs</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
