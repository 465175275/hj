<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Meiju */

$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => 'Meiju', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
    'type' => true,

]) ?>
