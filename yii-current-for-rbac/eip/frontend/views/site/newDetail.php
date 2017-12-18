<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $data['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    h1 {
        font-size: 14px;
    }
    .articleinfo .ariticle_left .title {
        float: left;
        width: 990px;
        color: #000;
        margin-top: 20px;
        height: 37px;
    }

    .articleinfo .ariticle_left .title div {
        margin-left: 20px;
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
    .articleinfo .ariticle_left .infos {
        float: left;
        width: 920px;
        font-size: 12px;
        margin-top: 10px;
        height: 20px;
        line-height: 20px;
        text-align: left;
        padding-left: 70px;
    }
    .share {
        float: left;
        padding-left: 15px;
        margin-top: -3px;
    }
    .contentbox .news-list .views .viewico, .ariticle_left .infos .viewico {
        float: left;
        margin-top: 6px;
        width: 15px;
        height: 11px;
        background: url(../images/view.png);
    }
    .yingping {
        background: #54bae2;
    }

    .articlecontent {
        float: left;
        width: 930px;
        text-align: left;
        text-indent: 20px;
        margin-top: 30px;
        margin-left: 30px;
        margin-right: 30px;
        padding-bottom: 20px;
        overflow: hidden;
        font-size: 14px;
        line-height: 30px;
    }
</style>
<div id="wrapper">
    <div class="midder">

        <div id="gtop"><a href="#top" target="_self"></a></div>
        <div class="contentbox articleinfo">
            <div class="ariticle_left">
                <div class="title">
                    <div class="yingping"><?=$data['type']?></div> <label><?=$data['title']?></label>
                </div>
                <div class="infos">
                    <span><?=date('Y-m-d',$data['update_at'])?> 时光美剧</span>
                    <div class="viewico" style="margin-left:10px;"></div><span><?=$data['click_num']?>次</span>
                    <div class="share">
                        <div class="bdsharebuttonbox bdshare-button-style1-16" data-bd-bind="1512985903557">
                            <a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","douban"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                    </div>
                </div>
                <div class="articlecontent" style="overflow: hidden;">
                    <?=$data['content']?>
                </div>
            </div>
        </div>
        <!--底部评论区-->
        <div style="width:100%;display:;" >
        <span id="counter-box" style="display: none;">
            <div class="global-nav">
                <ul>
                    <li><h4><e id="totalcount">0</e>条评论。</h4></li>
                </ul>
            </div>
        </span>

            <span id="post-box">
            <div class="uyanpost">
                <div class="resetbox sectionbox">
                    <div id="errormsg" class="rompt">
                        <span>
                            <p id="errorinfo"></p>
                            <a href="javascript:;" onclick="postTip();"></a>
                            <div class="claer"></div>
                        </span>
                    </div>
                    <div class="blockbox"style="display: none;">
                        <div class="blockhead">
                            <div class="headimg">
                                 <img src="http://bbs.ttmeiju.vip/uc_server/avatar.php?uid=1662477&amp;size=middle">
                            </div>
                        </div>
                        <div class="postarea">
                            <div class="postwrap postborder">
                                <div class="wraparea">
                                    <div class="textareawrap" id="textareawrap">
                                        <textarea maxlength="500" id="uyanmessage" class="textareastyle inputdefaultcolor"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="sociallogin" class="Social-Login">
                                <div class="Login">
                                    <h6 id="nicknamemsg" style="float:right;">发布前先在头部右侧进行登录</h6>
                                    <span style="float:right;" class="Login-border">
                                        <a id="postsubmit" href="javascript:;" class="btn" onclick="post(564,2);"></a>
                                    </span>
                                </div>
                                <div class="claer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
            <div class="nav" >
                <div class="nav-left" onmouseover="listMenu();" onmouseout="listMenu();">
                <span style="display: none;">
                    <b id="sorttxt">最新评论</b>
                    <input type="hidden" id="sortid">
                    <i class="downicon" id="arrowstatus"></i>
                </span>
                    <ul class="nav-menu nav-menu-left" id="commentmenu" style="display:none;">
                        <li>
                            <a class="on" href="javascript:;" onclick="getSort(this,1,2,564);">最新评论</a>
                        </li>
                        <li><a href="javascript:;" onclick="getSort(this,2,2,564);">最早评论</a></li>
                        <li><a href="javascript:;" onclick="getSort(this,3,2,564);">最热评论</a></li>
                    </ul>
                </div>
                <div class="claer"></div>
            </div>

            <span id="posts">
                <ul id="post-list" class="post-list">
        </ul>
            </span>
<script>
//加载更多 564 2 0
var nStart = 5;
var object = 564;
var objtype = 2;
var sortid = $("#sortid").val();


$(function(){
    $(".articlecontent").find("img").each(function(index,element){
        if($(this).attr("src").indexOf("http:") == -1 ){
             //ttmeiju.vip
            $(this).attr("src","http://www.ttmeiju.vip"+$(this).attr("src"));
        }

    })
})



$('#loadmore').click(function() {
    if (nStart>=0) {
        $("#loadmore").text('没有数据了亲...').css({ "border-top": "1px solid #d4d5d6", "height": "30px", "line-height": "30px" });
        return false;
    } else {
        $("#loading").show();
        $.post("/index.php/comment/loadmore.html", { start: nStart, source: object, srctype: objtype, sort: sortid }, function(res) {
            $("#post-list").append(res)
            $("#loading").hide();
        });
        nStart += 5;
    }
});



/**
 回复评论
 */
function reply(pid,uid) {
    if(uid==false){
        $("#uyan-reply-" + pid).html('请在<a href="/index.php/user/login.html"><font color="#5cb1c5">登录</font></a>后进行回复！');
        return false;
    }
    var content = $("#uyan-reply-" + pid).html();
    if (content) {
        $("#uyan-reply-" + pid).html('');
    } else {
        // alert(pid);return false;
        $.ajax({
            url: "/index.php/comment/reply.html",
            data: { parent: pid },
            type: 'post',
            datetype: 'html',
            success: function(res) {
                // alert(res);return false;
                $("#uyan-reply-" + pid).html(res);
                //return false;
            }
        });
    }
}
</script></span>

</div>