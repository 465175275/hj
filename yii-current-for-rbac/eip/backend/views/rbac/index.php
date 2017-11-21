<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '权限列表';
$this->params['breadcrumbs'][] = $this->title;
?>
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
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
              <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'description:text:名称',
                    'name:text:标识',
                    [
                        'attribute' => 'created_at',
                        'header'=>'创建时间',
                        'value'=>function($data)
                        {
                            return date('Y-m-d H:i:s',$data['created_at']);
                        }
                    ],
                    [
                        'attribute' => 'updated_at',
                        'header'=>'修改时间',
                        'value'=>function($data)
                        {
                            return date('Y-m-d H:i:s',$data['updated_at']);
                        }
                    ],

                    [
                          'class' => 'yii\grid\ActionColumn',
                          'header' => '操作',
                          'template' => '{assign}&nbsp;{update}&nbsp;{delete}',
                          'buttons'=>[
                            'assign'=>function($url,$data,$key){
                                return Html::a('分配权限',['assignitem','name'=>$data['name']],['class'=>'btn btn-xs btn-info']);
                            },
                            'update'=>function($url,$data,$key){
                                return Html::a('修改',['update','name'=>$data['name']],['class'=>'btn btn-xs btn-warning']);
                            },
                            'delete'=>function($url,$data,$key){
                                return Html::a('删除', ['delete','name'=>$data['name']], [
                                    'class' => 'btn btn-xs btn-danger',
                                    'data' => [
                                        'confirm' => '您确定要删除该权限？',
                                        'method' => 'post',
                                    ],
                                ]);
                            },
                          ],
                        ],
                    ],
                    /*此处是重点：这是没有会员提示的信息*/
                    'emptyText' => '当前没有权限',
                    'emptyTextOptions' => ['style' => 'text-align:center;'],
                    /*
                    * 此处是表格的布局，原始为：{summary}\n{items}\n{pager}
                    * 为了去掉表格顶部提示信息，所以去掉summary
                    * summart:顶部提示信息
                    * items:表格本身
                    * pager:翻页条
                    */
                    'layout' => '{items}{pager}'
                    ]); ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

