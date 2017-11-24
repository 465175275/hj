<?php

/* @var $this yii\web\View */

$this->title = '时光美剧';
?>
<style >
    ul{
        list-style: none;
    }
    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }
    .whlist{
        display: block;
    }
    .whlist li {
        float: left;
        width: 310px;
        padding-top: 5px;
        padding-bottom: 5px;
        cursor: pointer;
        list-style-type:none;
    }

    * {
        margin: 0;
        padding: 0;
    }
    .whlist li span {
        float: left;
        width: 22px;
        height: 22px;
        line-height: 22px;
        background: #6e6e6e;
        color: #ffffff;
        font-weight: bold;
        margin-left: 10px;
        text-align:center;
    }
    .whlist li .listname {
        float: left;
        width: 270px;
        height: 27px;
        margin-right: 8px;
        line-height: 27px;
        border-bottom: 1px dashed #959595;
        font-size: 13px;
        color: #151515;
        text-align: left;
        text-indent: 10px;
        overflow: hidden;
    }

    .trailer {
        float: left;
        width: 327px;
        margin-left: 10px;
    }
    .trailer ul li img {
        float: left;
        width: 327px;
        height: 175px;
    }
    img {
        vertical-align: middle;
        border: 0px;
    }
    .trailer ul li .tratit {
        float: left;
        width: 327px;
        height: 35px;
        margin-top: -35px;
        background: #111111;
        color: #ffffff;
        line-height: 35px;
        font-size: 14px;
        opacity: 0.7;
        -moz-opacity: 0.7;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }



    .dailyrcmd_li {
        float: left;
        text-align: left;
        margin-bottom: 5px;
        background: url('/images/li3.gif') no-repeat 0px 5px;
        padding-left: 14px;
        height: 25px;
        line-height: 25px;
        margin-left: 10px;
        overflow: hidden;
    }
    .dailyrcmd_li a {
        float: left;
        width: 210px;
        font-size: 13px;
    }

    .dailyrcmd_li span {
        float: left;
        margin-left: 5px;
        color: #666;
        font-size: 13px;
    }

    .whlist li .listdetail img {
        float: left;
        margin-left: 5px;
        width: 80px;
        height: 117px;
        border: 1px solid #eef5fd;
    }

    .midder .divfirst, .midder .second, .midder .third {
        float: left;
        width: 990px;
        margin-top: 5px;
        margin-bottom: 5px;
    }



    .second .secleft {
        width: 710px;
        float: left;
        background: #ffffff;
    }
    .second .secleft .secltit {
        width: 710px;
        height: 56px;
        line-height: 56px;
        font-size: 15px;
        float: left;
        background: url(../images/titbg.jpg) repeat-x;
    }

    .second .secleft .secltit .catelist {
        float: left;
        width: 610px;
        height: 56px;
        white-space: nowrap;
        overflow: hidden;
    }

    .second .secleft .secltit ul {
        width: 3000px;
        height: 56px;
        float: left;
    }

    .second .secleft .secltit ul li {
        width: 153px;
        float: left;
        cursor: pointer;
    }

    .second .secleft .secltit ul .active {
        border-top: 3px solid #71b1f1;
        color: #71B1F1;
    }

    .second .secleft .secltit .rightBtn, .second .secleft .secltit .leftBtn {
        width: 50px;
        height: 56px;
        float: left;
        font-size: 20px;
        line-height: 56px;
        text-align: center;
        cursor: pointer;
    }
    .second .secleft .secldiv ul {
        float: left;
        height: 613px;
    }

    .second .secleft .secldiv ul .catespan {
        float: left;
        height: 585px;
        display: none;
    }

    .second .secleft .secldiv ul .reflash {
        float: left;
        width: 690px;
        height: 30px;
        text-align: right;
        line-height: 30px;
        padding-right: 10px;
        display: none;
    }

    .second .secleft .secldiv ul li {
        float: left;
        width: 175px;
        height: 290px;
        border: 1px solid #f4f4f4;
        text-align: center;
        display: none;
    }

    .second .secleft .secldiv ul li img {
        width: 165px;
        height: 235px;
        margin: 5px auto;
    }
    img {
        vertical-align: middle;
        border: 0px;
    }

    .second .secleft .secldiv ul li span {
        width: 170px;
        height: 20px;
        line-height: 20px;
        font-size: 13px;
        float: left;
        text-align: left;
        margin-left: 5px;
        overflow: hidden;
    }

    .second .secright {
        width: 270px;
        height: 670px;
        float: right;
        background: #ffffff;
    }

    .second .secright .secrgtit {
        width: 270px;
        height: 56px;
        line-height: 56px;
        font-size: 15px;
        float: left;
    }

    .second .secright .secrgdiv li {
        float: left;
        width: 250px;
        height: 55px;
        border-bottom: 1px solid rgb(244, 244, 244);
        background: url("/images/li3.gif") 0px 7px no-repeat;
    }

    .second .secright .secrgdiv li a, .dwsum {
        float: left;
        width: 250px;
        height: 25px;
        line-height: 25px;
        text-align: left;
        font-size: 13px;
        text-indent: 15px;
        overflow: hidden;
    }
    .second .secright .secrgdiv {
        float: left;
        width: 250px;
        background: rgb(255, 255, 255);
        padding: 10px;
    }
    .second {
        width: 999px;
    }
    .col-lg-4 {
        width: 310px;
    }
    .trailers{
        margin-left:25px;
    }
    .dailyrcmds{
        margin-left: 60px;
    }
    .dailyrcmd_li{
        width: 335px;
    }

    .third .yp {
        float: left;
        width: 490px;
        background: #ffffff;
        padding-bottom: 20px;
    }

    .third .yp .yptit {
        width: 470px;
        height: 56px;
        line-height: 56px;
        font-size: 15px;
        float: left;
        background: url(../images/titbg.jpg) repeat-x;
        text-align: left;
        text-indent: 50px;
    }

    .third .yp .yptit .more {
        float: right;
        margin-right: 20px;
    }

    .third .yp ul li {
        width: 480px;
        height: 130px;
        float: left;
        border-bottom: 1px solid #e4e2e3;
        padding: 10px;
    }
    .third .yp ul li a img {
        width: 175px;
        height: 107px;
        float: left;
    }

    .third .yp ul li .ypinfo {
        width: 270px;
        height: 58px;
        float: left;
        text-align: left;
        margin-left: 15px;
        line-height: 20px;
        font-size: 13px;
        overflow: hidden;
    }
    .third .yp ul li .yplitit {
        width: 270px;
        height: 50px;
        line-height: 25px;
        float: left;
        text-align: left;
        margin-left: 15px;
        font-weight: bold;
        font-size: 13px;
        overflow: hidden;
    }
</style>
<div class="site-index">

    <div class="jumbotron">
        <h2>时光美剧</h2>
        <p class="lead">每天更新收集最新最好看的美剧.</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4 divfirsts">
                <h2>本周热播</h2>
                <p>
                <div class="divfirst">
                <ul class="whlist">
                    <?php foreach ($hot as $key=>$val){?>
                    <li>
                        <span style="margin-top: 0px; background: rgb(113, 177, 241);"><?=$key+1?></span>
                        <div style="display: block;" class="listname">
                            <label class="cnname"><a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><?=$val['title_cn']?> <?=$val['title_en']?></a></label>
                        </div>
                        <div style="display: none;" class="listdetail">
                            <a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><img src="<?=$val['img']?>"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><?=$val['title_cn']?></a></label>
                                <label class="enname"><a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=<?=$val['mid']?>"><?=$val['title_en']?></a></label>
                            </div>
                        </div></li>
<?php }?>
                </ul>
                </div>
                </p>
            </div>
            <div class="col-lg-4 trailers">
                <p>
                <div class="trailer">
                    <ul>
                        <li>
                            <a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=1327">
                                <img alt="《无耻家庭》第八季清资源已出！" src="http://i4.cfimg.com/588755/5ce3b48f4bceb0f2.jpg">
                                <div class="tratit">《无耻家庭》第八季高清资源已出！</div>
                            </a>
                        </li><li>
                            <a target="_blank" href="/index.php?r=site%2Fmeiju-list&mid=1309">
                                <img alt="《行尸走肉》第八季高清资源已出！" src="http://i2.cfimg.com/588755/60b52720a9c9411e.jpg">
                                <div class="tratit">《行尸走肉》第八季第三集高清资源已出！</div>
                            </a>
                        </li><li>
                            <a target="_blank" href="https://weibo.com/1265416944/FurmNolgq?from=page_1006061265416944_profile&amp;wvr=6&amp;mod=weibotime">
                                <img alt="Netflix年底惊悚新剧《暗黑》首曝【中字】预告片！" src="http://i2.cfimg.com/588755/38115e2ec982d94d.jpg">
                                <div class="tratit">Netflix年底惊悚新剧《暗黑》首曝【中字】预告片！</div>
                            </a>
                        </li> </ul>
                </div>
                </p>
            </div>

            <div class="col-lg-4 dailyrcmds" >
                <h2>今日更新推荐</h2>
                <p>
                    <div class="dailyrcmd">
                        <ul>
                            <?php foreach ($tuijian as $v) {?>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="<?="/index.php?r=site%2Fmeiju-list&mid=".$v['mid']?>"><?=$v['title_cn']."  ".$v['title_en']?></a>
                                <span>订阅量:<?=$v['subscription_num']?></span>
                            </li>
                            <?php }?>
                        </ul>
                        </div>
                </p>

                <p></p>
            </div>
        </div>

        <div class="row" align="center">
            <p class="lead">
            </p>
        </div>

        <div class="row">
            <div class="second">
                <div class="secleft">
                    <div class="secltit">
                        <div class="catelist">
                            <ul style="margin-left: -1224px;">
                                <?php foreach ($type as $k=>$val){?>
                                     <li name="<?=$k?>" class="<?=$k==8 ?"active" :'';?>"> <?=$val['type']?>                            </li>
                                <?php }?>

                            </ul>
                        </div>
                        <span class="leftBtn">◂</span><span class="rightBtn">▸</span>            </div>
                    <div class="secldiv">
                        <ul>
                            <?php foreach ($typeList as $k=>$val){ ?>
                            <div class="catespan" model="<?=$k?>" id="ctspan<?=$k?>" style="<?=$k==8 ? "display:block;":'display:none;'?>">
                                <?php foreach($val as $v){?>
                                    <li model="<?=$k?>" class="active" style="<?=$k==8 ? "display:block;":'display:none;'?>">
                                        <a target="_blank" href="<?="/index.php?r=site%2Fmeiju-list&mid=".$v['mid']?>">
                                            <img src="<?=$v['img']?>" alt="<?=$v['title_cn']?>">
                                            <span class="cicname"><?=$v['title_cn']?></span>
                                            <span class="ciename"><?=$v['title_en']?></span>
                                        </a>
                                    </li>
                                <?php }?>

                            </div>
                            <div class="reflash" model="<?=$k?>" style="display: none;">
                                <a href="javascript:void(0);" name="<?=$type[$k]['type']?>" page="1" id="<?=$k?>" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="secright">
                    <div class="secrgtit">
                        今日下载排行
                    </div>
                    <ul class="secrgdiv">
                        <?php foreach ($clickList as $key=>$val){?>
                        <li>
                            <a target="_blank" title="<?=$val['title_cn']."  ".$val['title_en']." ".$val['title']?>" href="/index.php?r=site%2Fmeiju-detail&did=<?=$val['did']?>"><?=$val['title_cn']."  ".$val['title_en']." ".$val['title']?> </a>
                            <span class="dwsum">下载量:<?php
                                if($key==0){
                                    echo $val['click_num']+2345;
                                 }elseif($key=1){
                                    echo $val['click_num']+1536;
                                }elseif($key=2){
                                    echo $val['click_num']+628;
                                }elseif($key=3){
                                    echo $val['click_num']+347;
                                }elseif($key=4){
                                    echo $val['click_num']+189;
                                }else{
                                    echo $val['click_num']+100;
                                }

                                ?>
                            </span>
                        </li>
                    <?php }?>
                    </ul>        </div>
            </div>

        </div>
        <div class="row third">
                <div class="yp">
                    <div class="yptit">
                        <span>影评</span>
                        <span class="more"><a target="_blank" href="/article.html">更多</a></span>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="/article-532.html"><img src="http://i4.cfimg.com/588755/912f26a219e467d2.jpg" alt="怕你们骂我，所以从不敢推荐这种大片！">
                                <div class="yplitit">怕你们骂我，所以从不敢推荐这种大片！</div></a>
                            <div class="ypinfo">吃/能吃/怎么吃，亦或是如何吃出新鲜、如何吃出精彩、如何吃出人间烟火味。  关于吃，或许还要从这里寻些滋味儿 ——</div>
                        </li><li>
                            <a target="_blank" href="/article-531.html"><img src="http://i2.cfimg.com/588755/96709d48ae186145.jpg" alt="偷内衣的变态死了，可问题解决了么？">
                                <div class="yplitit">偷内衣的变态死了，可问题解决了么？</div></a>
                            <div class="ypinfo">我们的生活里有太多这样的悲剧…  碍于面子、害怕麻烦、羞于启齿、不提也罢，这些微小的闪躲就像是白蚁一样，在它出现时就意味着生活可能要溃于蚁穴了。</div>
                        </li><li>
                            <a target="_blank" href="/article-530.html"><img src="http://i4.cfimg.com/588755/11b1d5e2a32f6b3f.jpg" alt="豆瓣9.0，去他妈的全世界！">
                                <div class="yplitit">豆瓣9.0，去他妈的全世界！</div></a>
                            <div class="ypinfo">最近刷了一部小破剧…   叫它小破剧是因为每集短短20分钟不到，回条信息的功夫就能错过半集剧情。   但正是它的短小，才让我深觉它的精悍。   而且，这部小破剧还有个限制级的名字 ——</div>
                        </li><li>
                            <a target="_blank" href="/article-526.html"><img src="http://i4.cfimg.com/588755/cb155af6ce040a3c.jpg" alt="别去刷烂片！这起谋杀43年前就拍到了巅峰！">
                                <div class="yplitit">别去刷烂片！这起谋杀43年前就拍到了巅峰！</div></a>
                            <div class="ypinfo">最近一部经典翻拍引起不小的争议…   阿加莎·克里斯蒂的[东方快车谋杀案]云集约翰尼·德普、威廉·达福、朱迪·丹奇等大咔再登大银幕。</div>
                        </li><li>
                            <a target="_blank" href="/article-525.html"><img src="http://i2.cfimg.com/588755/0eaff32f56ca346e.jpg" alt="多想做只猫！认识狐朋狗友，挑战冒险猫生…">
                                <div class="yplitit">多想做只猫！认识狐朋狗友，挑战冒险猫生…</div></a>
                            <div class="ypinfo">他是只橘猫，出生在破旧的农舍里…</div>
                        </li>            </ul>
                </div>
                <div class="yp zx">
                    <div class="yptit">
                        <span>资讯</span>
                        <span class="more"><a target="_blank" href="/article.html">更多</a></span>
                    </div>
                    <ul>
                        <li>
                            <a target="_blank" href="/article-533.html"><img src="http://i4.cfimg.com/588755/517241b447b2e021.jpg" alt="本周回归剧：浴血黑帮 Peaky Blinders S04">
                                <div class="yplitit">本周回归剧：浴血黑帮 Peaky Blinders S04</div></a>
                            <div class="ypinfo">在圣诞前夜到来之际，Tommy突然收到一封神秘的来信，信中称剃刀帮正面临被彻底铲除的危险。当敌人步步逼近时，Tommy被迫逃离乡间别墅，返回小石南村的街道，一场血腥的生死之战即将开始。</div>
                        </li><li>
                            <a target="_blank" href="/article-529.html"><img src="http://i4.cfimg.com/588755/085f0667d10cd7d6.jpg" alt="11月15日最新资讯">
                                <div class="yplitit">11月15日最新资讯</div></a>
                            <div class="ypinfo">根据经典小说改编成电影系列的《指环王》十分成功，而这次剧集版还在初步阶段，编剧﹑制片﹑剧情大纲都没有，不过可知的是这剧是《指环王1：魔戒再现 The Lord of the Rings: The Fellowship of the Ring》的前传。</div>
                        </li><li>
                            <a target="_blank" href="/article-528.html"><img src="http://i4.cfimg.com/588755/f0f4499ab26d4668.jpg" alt="本周新剧：高玩救未来 Future Man">
                                <div class="yplitit">本周新剧：高玩救未来 Future Man</div></a>
                            <div class="ypinfo">剧本对Josh Futterman进一步描述道：他仍然住在父母家中，在一家名叫「Devlin」的性疾病研究中心当看门人，没有任何前途可言。他的青春期过得很不愉快，因此逐渐丧失了社交能力。他在别人面前总是呆头呆脑，充满自卑心理，而且不敢接触任何女性。</div>
                        </li><li>
                            <a target="_blank" href="/article-527.html"><img src="http://i1.cfimg.com/588755/5dada75dcc3d7732.jpg" alt="本周新剧：霍华德庄园 Howards End">
                                <div class="yplitit">本周新剧：霍华德庄园 Howards End</div></a>
                            <div class="ypinfo">Starz与BBC合作开发的四集有限剧集《霍华德庄园》根据E.M. Forster的经典小说改编，原著曾多次被改编成影视作品——其中最有名的要数70年代的电影版和1992年Helena Bonham Carter、Emma Thompson、Anthony Hopkins、Vanessa Redgrave主演的电影版（该片还有个好听的译名叫做《此情可问天》）。</div>
                        </li><li>
                            <a target="_blank" href="/article-524.html"><img src="http://i1.cfimg.com/588755/65741738944df345.jpg" alt="本周回归剧：炸天女郎 Lady Dynamite S02">
                                <div class="yplitit">本周回归剧：炸天女郎 Lady Dynamite S02</div></a>
                            <div class="ypinfo">Maria Bamford将面对人生最大的冒险：爱。Maria决定利用自己小时候学到的东西来应对新的关系，包括自己和家人、朋友……甚至宠物狗的关系。问题是……她学到的那些东西全都是错的！</div>
                        </li>            </ul>
                </div>
            </div>
    </div>
</div>

<script type="text/javascript">

   $(document).ready(function() {
            //依赖于jQuery的代码
        //向右按钮点击事件
        var index = 0;
        var liLen;
        $(".rightBtn").click(function() {
            index++;
            liLen = $(".catelist ul li").length - 3;
            if (index >= liLen) {
                $(".catelist ul").stop();
                index = liLen;
            } else {
                if (index == 1) {
                    $(".catelist ul").animate({ "margin-left": -index * 153 }, 660);
                } else {
                    $(".catelist ul").animate({ "margin-left": -index * 153 }, 660);
                }
            }
        });

        //向左按钮点击事件
        $(".leftBtn").click(function() {
            if (index == 0) {
                $(".catelist ul").stop();
            } else {
                index--;
                if (index == 0) {
                    $(".catelist ul").animate({ "margin-left": -index * 153 }, 660);
                } else {
                    $(".catelist ul").animate({ "margin-left": -index * 153 }, 660);
                }
            }
        });

        //点击换一批按钮
        $("a[ectype='reflash']").click(function() {
            var name = $(this).attr('name');
            var pagenum = $(this).attr('page');
            var id = $(this).attr('id');
            $.post("/index.php/index/reflash.html", { cid: name, page: pagenum, sortid: id }, function(msg) {
                if (msg == '') {
                    alert('暂无更多资源');
                    $("a[ectype='reflash']").attr('page', 0);
                } else {
                    $("#ctspan" + id).html(msg);
                    $("a[ectype='reflash']").attr('page', Number(pagenum) + 1);
                }
            });

        })

       /*首页*/
       $(".whlist li").hover(function(){
           $('.listname').show();
           $('.listdetail').hide();
           $('.whlist li span').css("margin-top","0px");

           $(this).find('span').css("margin-top","90px");
           $(this).find('.listname').hide();
           $(this).find('.listdetail').show();
       });

       $(".secltit ul li").hover(function(){
           $('.secltit ul li').removeClass();
           $('.secltit ul li i').hide();
           $(this).addClass("active");
           //$(this).append("<e>▼</e>");
           var sortid= $(this).attr("name");
           $(".secldiv ul li").hide();
           $(".secldiv ul .reflash").hide();
           $("[model="+sortid+"]").show();
       });
    })

</script>
