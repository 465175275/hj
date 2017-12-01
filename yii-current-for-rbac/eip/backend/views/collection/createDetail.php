<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MeijuDetial */

$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => 'MeijuDetail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_formDetail', [
    'model' => $model,
    'type' => true,

]) ?>
