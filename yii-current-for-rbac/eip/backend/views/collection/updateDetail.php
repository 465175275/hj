<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '修改：' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'MeijuDetail', 'url' => ['meiju-detail']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'did' => $model->did]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_formDetail', [
        'model' => $model,
        'type' => false,
    ]) ?>
