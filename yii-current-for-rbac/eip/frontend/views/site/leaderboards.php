<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = '排行榜';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <style>
        .latesttable {
            width: 990px;
            float: left;
        }
        .latesttable .Shead {
            height: 60px;
            font-weight: bold;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        td, th {
            text-align: center;
            display: table-cell;
            vertical-align: inherit;
        }

        .latesttable .Scontent1 {
            height: 35px;
            background: #f4f4f4;
            color: #5c5c5c;
            line-height: 35px;
        }

        .latesttable .Scontent {
            height: 35px;
        }

        .ranktop3 {
            float: left;
            width: 310px;
            height: 260px;
            background: #ffffff;
            padding-top: 10px;
            border-bottom: 30px solid #f4f4f4;
        }
        .ranktop3 img {
            width: 290px;
            height: 160px;
        }
        .ranktop3 .mjtit {
            float: left;
            width: 310px;
            height: 40px;
            line-height: 40px;
            text-align: left;
            font-size: 14px;
            font-weight: bold;
            text-indent: 10px;
            overflow: hidden;
        }
        .ranktop3 .mjinfo {
            width: 240px;
            height: 20px;
            line-height: 20px;
            text-align: left;
            float: left;
            color: #99abb7;
            text-indent: 10px;
        }
        .ranktop3 .ranknum {
            width: 70px;
            height: 55px;
            float: left;
            color: #d3d1d2;
            font-size: 75px;
            font-weight: bold;
            font-style: italic;
        }
        div {
            display: block;
        }
    </style>
    <?php if($pagination->offset==0){ foreach ($data as $key=> $val){ if($key>2) {break;}?>
    <div class="ranktop3" style="border-left:15px;border-right:15px;">
        <img src="<?=$val['img']?>">
        <div class="mjtit">
            <a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><?=$val['title_cn']?>&nbsp;<?=$val['title_en']?></a>
        </div>
        <div class="ranknum"><?=$key+1?></div>
        <div class="mjinfo"><?=$val['type']?> / <?=$val['update_status']?> / 更新日：<?=$val['update_day']?></div>
        <div class="mjinfo">暂无</div>
    </div>
    <?php } }?>


    <table class="latesttable" cellpadding="0" cellspacing="0" style="margin-top: 15px;">
        <tbody><tr class="Shead">
            <td width="5%" align="center">序号</td>
            <td style="text-align: left">剧名</td>
            <td width="10%">分类</td>
            <td width="10%">状态</td>
            <td width="10%">更新日期</td>
            <td width="10%">回归时间</td>
            <td width="10%">最后更新时间</td>
        </tr>

        <?php foreach ($data as $key=> $val){ if($pagination->offset==0 && $key<3){ continue;}?>
        <tr class="<?=($key%2==1)? "Scontent1" : "Scontent"?>">
            <td><?=$pagination->offset+$key+1?></td>
            <td style="text-align: left">
                <a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><?=$val['title_cn']?>&nbsp;&nbsp;<?=$val['title_en']?></a></td>
            <td>
                <?=$val['type']?>																	</td>
            <td><font color="#5cb1c5"><?=$val['update_status']?></font></td>
            <td><?=$val['update_day']?></td>
            <td>
                <?=$val['back_time']?>																	</td>
            <td>
            <?=date("Y-m-d",$val['update_time'])?>																</td>
        </tr>
        <?php }?>
        <tr>
            <td colspan="7">
                <?=LinkPager::widget([
                    'pagination' => $pagination,
                    'firstPageLabel'=>"First",
                    'prevPageLabel'=>'Prev',
                    'nextPageLabel'=>'Next',
                    'lastPageLabel'=>'Last',
                ]);?>

            </td>
        </tr>
        </tbody>
    </table>

</div>
