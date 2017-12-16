<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = '精彩影评';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    ul {
        list-style: none;
    }
    * {
        margin: 0;
        padding: 0;
    }
    .midder {
        width: 990px;
    }
    .contentbox .news-list li {
        margin: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eeeeee;
        float: left;
    }
    .contentbox .news-list li .newstit {
        float: left;
        width: 100%;
        height: 40px;
    }
    .yingping {
        background: #54bae2;
    }
    .zixun {
        background: #7bdbb6;
    }

    .contentbox .news-list li .newstit label, .contentbox .news-list li .newstit a {
        width: 550px;
        float: left;
        height: 18px;
        font-size: 12px;
        line-height: 18px;
        color: #999999;
        margin-left: 10px;
        margin-top: -2px;
        text-align: left;
    }
    .yingping, .zixun {
        float: left;
        width: 37px;
        height: 37px;
        color: #fff;
        font-size: 15px;
        font-weight: bold;
        line-height: 37px;
        border-radius: 2px;
    }

    element.style {
        width: 200px;
        height: 112px;
    }

    .contentbox .news-list .cover img {
        float: left;
        border-radius: 5px;
    }
    img {
        vertical-align: middle;
        border: 0px;
    }

    .contentbox .news-list li .newstit a {
        font-size: 14px;
        font-weight: bold;
        color: #23559a;
        margin-top: 2px;
    }

    .contentbox .news-list .contents {
        float: left;
        padding-left: 45px;
        margin-top: 10px;
        width: 800px;
    }

    .contentbox .news-list .contents .newsinfo {
        float: left;
        width: 460px;
        height: 112px;
        margin-left: 15px;
        text-align: left;
        color: #000000;
        font-size: 14px;
    }

    div {
        display: block;
    }

    p {
        display: block;
    }

    .contentbox .news-list .views {
        float: left;
        height: 20px;
        padding-left: 45px;
        margin-top: 10px;
        width: 605px;
        color: #999999;
        text-align: left;
    }
    .contentbox .news-list .views .viewico, .ariticle_left .infos .viewico {
        float: left;
        margin-top: 6px;
        width: 15px;
        height: 11px;
        background: url(../images/view.png);
    }
</style>
<div>
    <div id="wrapper">
        <div class="midder">
            <div class="contentbox">
                <ul class="news-list">

                    <?php foreach ($data as $val){?>
                        <li>
                            <div class="newstit">
                                <div class="yingping"><?=$val['type']?></div>
                                <label>来自：时光美剧</label>
                                <a href="/index.php?r=site%2Fnew-detail&nid=<?=$val['nid']?>" ectype="clicknode" name="<?=$val['nid']?>" target="_blank"><?=$val['title']?></a>
                            </div>
                            <div class="contents">
                                <div class="cover">
                                    <a href="/article-563.html" target="_blank"><img style="width: 200px;height: 112px;" src="<?=$val['img']?>"></a>
                                </div>
                                <div class="newsinfo">
                                    <p><?=$val['summary']?>
                                        <a name="<?=$val['nid']?>" ectype="clicknode" href="/index.php?r=site%2Fnew-detail&nid=<?=$val['nid']?>" target="_blank">显示全部</a></p>
                                </div>
                            </div>
                            <div class="views">
                                <div class="viewico"></div>3次&nbsp;&nbsp;2017-12-09                                                </div>
                        </li>
                    <?php }?>

<!--                    <li>
                        <div class="newstit">
                            <div class="yingping">影评</div>
                            <label>来自：时光美剧</label>
                            <a href="/article-563.html" ectype="clicknode" name="563" target="_blank">不杀人就等死，这不是游戏而是现实…</a>
                        </div>
                        <div class="contents">
                            <div class="cover">
                                <a href="/article-563.html" target="_blank"><img style="width: 200px;height: 112px;" src="http://i1.cfimg.com/588755/927abf096d678962.jpg"></a>
                            </div>
                            <div class="newsinfo">
                                <p>一座孤岛   一项游戏   一群玩家  一人生还...<a name="563" ectype="clicknode" href="/article-563.html" target="_blank">显示全部</a></p>
                            </div>
                        </div>
                        <div class="views">
                            <div class="viewico"></div>3次&nbsp;&nbsp;2017-12-09                                                </div>
                    </li>-->
                </ul>
            </div>
            <table>
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
            </table>
        </div>
    </div>


</div>
