<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '修改：' . $model->title_cn;
$this->params['breadcrumbs'][] = ['label' => 'Meiju', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'mid' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
        'type' => false,
    ]) ?>
