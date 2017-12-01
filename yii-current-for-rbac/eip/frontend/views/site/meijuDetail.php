<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $info['title_en']."  ".$info['title_cn'].$info['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .contentbox .hd, .sidebarbox .hd {
        width: 990px;
        height: 55px;
        background: url(../images/titbg.jpg) repeat-x;
        color: #777;
        line-height: 55px;
        font-size: 14px;
        text-align: left;
        text-indent: 10px;
    }
    .contentbox .bd {
        padding: 10px;
    }
    .seedpic {
        float: left;
        width: 438px;
        overflow: hidden;
        text-align: center;
        background: #fcfcfc;
        padding: 5px;
    }
    .seedlink {
        float: right;
        width: 510px;
        padding: 5px;
    }
    .contentbox .bd .newstxt {
        width: 970px;
        float: left;
        margin-top: 40px;
        text-align: left;
        text-indent: 20px;
        font-size: 12px;
        color: #171717;
        line-height: 30px;
    }

    #seasoninfo .seasondiv {
        float: left;
        width: 870px;
        height: 56px;
        white-space: nowrap;
        overflow: hidden;
    }
    .latesttable .Stitle h3 {
        float: left;
        width: 90px;
        cursor: pointer;
        text-align: center;
        font-size: 14px;
    }

    .wlsnav ul .fenge, .latesttable .Stitle .fenge {
        float: left;
        width: 1px;
        height: 50px;
        background: #f1eff0;
    }
    .latesttable .Shead {
        height: 60px;
        font-weight: bold;
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

    .seedlink .greybg {
        background: #f4f4f4;
    }
    .seedlink {
        float: left;
    }
    .seedlink span {
        float: left;
        width: 510px;
        height: 31px;
        text-align: left;
        line-height: 31px;
        text-indent: 45px;
        color: #303030;
        font-size: 13px;
    }

    .curseason, .Stitle h3:hover {
        border-top: 3px solid #71b1f1;
        color: #71B1F1;
    }

    .latesttable .Stitle h3 {
        float: left;
        width: 90px;
        cursor: pointer;
        text-align: center;
        font-size: 20px;
    }
    #seasoninfo .seasondiv {
        float: left;
        width: 870px;
        height: 56px;
        white-space: nowrap;
        overflow: hidden;
    }
    .wlsnav ul .fenge, .latesttable .Stitle .fenge {
        float: left;
        width: 1px;
        height: 60px;
        background: #f1eff0;
    }


    latesttable .Stitle {
        height: 56px;
        line-height: 56px;
        font-size: 15px;
        background: url(../images/titbg.jpg) repeat-x;
        text-align: left;
        white-space: nowrap;
    }
</style>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="newscontent contentbox">
        <div class="hd"><a href="/index.php?r=site%2Fmeiju-list&mid=<?=$info['mid']?>"><?=$info['title_cn']?> <?=$info['title_en']?>-<?=$info['title_cn']?>下载-<?=$info['title_cn']?>全集下载-<?=$info['title_en']?>下载</a></div>
        <div class="bd">
            <div>
                <div class="seedpic">
                    <img src="<?=$info['img']?>" id="spic" width="438" height="246">
                </div>
                <div class="seedlink">
                    <span class="greybg">下载链接（Download Link）：

                        <?php foreach (json_decode($info['urls'],true) as $key=>$val){?>
                            <a style="" href="<?=$val?>"  data-mid="<?=$info['mid']?>" data-did="<?=$info['did']?>" class="download_meiju" rel="nofollow" target="_blank"
                               title="<?php
                               if($key=='baidu'){echo "百度云盘";}
                               elseif ($key=='mi'){
                                   echo "小米路由器远程";
                               }elseif ($key=='bt'){
                                   echo "bt美剧片源";
                               }elseif ($key=='magnet'){
                                   echo "磁力链接美剧片源";
                               }elseif ($key=='ed2k'){
                                   echo "ed2k高清片源";
                               }elseif ($key=='wy'){
                                   echo "微云网盘";
                               }else{
                                   echo "其他";
                               } ?>下载">
                                    <img ectype="downnode" src="/images/<?=$key?>.png" width="20px">
                            </a>
                        <?php } ?>
                    </span>
                    <span>字幕：<?=$info['subtitle']?></span>
                    <span class="greybg">名字：<?=$info['title_cn']?> <?=$info['title_en']?> <?=$info['title']?></span>
                    <span>发布时间：<?=$info['create_time']?></span>
                    <span class="greybg">回归：<?=$info['back_time']?></span>
                    <span>大小：<?=$info['back_time']?></span>
                    <span class="greybg">
						     <div class="bdsharebuttonbox bdshare-button-style1-16" style="margin-left:45px;" data-bd-bind="1511165844243">
                                <a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
							 </div>
                               <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","douban"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
						</span>
                    <span class="rssdiv">
                            <?php if(!$info['subscription']){?>
							<a href="javascript:void()" data-type="add" data-mid="<?=$info['mid']?>" class="subscription_meiju">订阅本剧，以便获得最新剧集</a>
                        <?php }?>
							已有<font color="red"><?=$info['subscription_num']?></font>人关注
					</span>
                </div>
            </div>
            <div class="newstxt">
                <?=$info['Introduction']?>  </div>
            <div class="meijuadp">
            </div>
        </div>
    </div>

</div>