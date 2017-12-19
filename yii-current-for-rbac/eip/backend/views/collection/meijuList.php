<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MeijuDetial */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '详情列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_searchDetail', ['model' => $searchModel]); ?>
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
                    'options' => ['class' => 'grid-view', 'style' => 'overflow:auto', 'did' => 'grid'],
                    'columns' => [
                        [
                            'class' => 'yii\grid\CheckboxColumn',
                            'name' => 'did',
                        ],
                        'did',
                        'mid',
                        'tdid',
                        [
                            'attribute' => 'title',
                            'value' => function ($model, $key, $index, $column) {
                                return '<a  target="_blank" href="/index.php?r=site%2Fmeiju-detail&did=' . $key . '">' . $model->title . '</a>';
                            },
                            'format' => 'raw',
                        ],
                        'season',
                        'click_num',
                        'password',
                        'size',
                        'standard',
                        'subtitle',
                        'create_time',
                        [
                            'attribute' => 'update_at',
                            'value' => function ($data) {
                                return date('Y-m-d H:i:s', $data->update_at);
                            }
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => '操作',
                            'template' => '{update} {delete}',
                            'buttons' => [
                                'update' => function ($url, $data, $key) {
                                    return Html::a('修改', ['update-detail', 'did' => $key], ['class' => 'btn btn-xs btn-info']);
                                },
                                'delete' => function ($url, $data, $key) {
                                    return Html::a('删除', ['delete-detail', 'did' => $key], [
                                        'class' => 'btn btn-xs btn-danger',
                                        'data' => [
                                            'confirm' => '您确定要删除该？',
                                            'method' => 'post',
                                        ],
                                    ]);
                                },
                            ],
                        ],
                    ],
                    /*此处是重点：这是没有会员提示的信息*/
                    'emptyText' => '当前没有用户',
                    'emptyTextOptions' => ['style' => 'text-align:center;'],
                    /*
                    * 此处是表格的布局，原始为：{summary}\n{items}\n{pager}
                    * 为了去掉表格顶部提示信息，所以去掉summary
                    * summart:顶部提示信息
                    * items:表格本身
                    * pager:翻页条
                    */
                    'layout' => '{items}{pager}'
                ]);


                $this->registerJs('
                        $(".gridview").on("click", function () {
                            var keys = $("#grid").yiiGridView("getSelectedRows");
                            console.log(keys);
                        });
                        ');
                ?>
                <?= Html::a('批量删除', "javascript:void(0);", ['class' => 'btn btn-success gridview']) ?>
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
