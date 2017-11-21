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
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 divfirsts">
                <h2>本周热播</h2>

                <p>
                <div class="divfirst">
                <ul class="whlist">
                    <li>
                        <span style="margin-top: 0px; background: rgb(113, 177, 241);">1</span>
                        <div style="display: block;" class="listname">
                            <label class="cnname"><a target="_blank" href="/meiju/THE.Walking.Dead.html">行尸走肉 THE Walking Dead</a></label>
                        </div>
                        <div style="display: none;" class="listdetail">
                            <a target="_blank" href="/meiju/THE.Walking.Dead.html"><img src="http://i4.nbimg.com/588755/4648dd188a2122c8.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/THE.Walking.Dead.html">行尸走肉</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/THE.Walking.Dead.html">THE Walking Dead</a></label>
                            </div>
                        </div></li>
                    <li>
                        <span style="background: rgb(113, 177, 241); margin-top: 0px;">2</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/Shameless.html">无耻家庭 Shameless</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/Shameless.html"><img src="http://i4.cfimg.com/588755/0b82461504c6d9a2.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/Shameless.html">无耻家庭</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/Shameless.html">Shameless</a></label>
                            </div>
                        </div></li><li>
                        <span style="background: rgb(113, 177, 241); margin-top: 0px;">3</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/The.Gifted.html">天赋异禀 The Gifted</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/The.Gifted.html"><img src="http://i2.cfimg.com/588755/907668f930359697.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/The.Gifted.html">天赋异禀</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/The.Gifted.html">The Gifted</a></label>
                            </div>
                        </div></li><li>
                        <span style="margin-top: 0px;">4</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/Blue.Planet.html">蓝色星球 Blue Planet</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/Blue.Planet.html"><img src="http://i4.cfimg.com/588755/266d03c3220ead4b.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/Blue.Planet.html">蓝色星球</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/Blue.Planet.html">Blue Planet</a></label>
                            </div>
                        </div></li><li>
                        <span style="margin-top: 0px;">5</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/The.Big.Bang.Theory.html">生活大爆炸 The Big Bang Theory</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/The.Big.Bang.Theory.html"><img src="http://i2.cfimg.com/588755/2f0cfbe600e7a4f2.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/The.Big.Bang.Theory.html">生活大爆炸</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/The.Big.Bang.Theory.html">The Big Bang Theory</a></label>
                            </div>
                        </div></li><li>
                        <span style="margin-top: 0px;">6</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/The.Girlfriend.Experience.html">应召女友 The Girlfriend Experience</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/The.Girlfriend.Experience.html"><img src="http://i4.cfimg.com/588755/232b10dd42cfd5a4.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/The.Girlfriend.Experience.html">应召女友</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/The.Girlfriend.Experience.html">The Girlfriend Experience</a></label>
                            </div>
                        </div></li><li>
                        <span style="margin-top: 0px;">7</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/The.Flash.html">闪电侠 The Flash</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/The.Flash.html"><img src="http://i4.cfimg.com/588755/f199ddd5e0235c6b.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/The.Flash.html">闪电侠</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/The.Flash.html">The Flash</a></label>
                            </div>
                        </div></li>
                    <li>
                        <span style="margin-top: 0px;">8</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天 This Is Us</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/This.Is.Us.html"><img src="http://i1.nbimg.com/588755/0026c0a8a3b16ab2.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/This.Is.Us.html">This Is Us</a></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="margin-top: 0px;">8</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天 This Is Us</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/This.Is.Us.html"><img src="http://i1.nbimg.com/588755/0026c0a8a3b16ab2.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/This.Is.Us.html">This Is Us</a></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span style="margin-top: 0px;">8</span>
                        <div class="listname" style="display: block;">
                            <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天 This Is Us</a></label>
                        </div>
                        <div class="listdetail" style="display: none;">
                            <a target="_blank" href="/meiju/This.Is.Us.html"><img src="http://i1.nbimg.com/588755/0026c0a8a3b16ab2.jpg"></a>
                            <div class="detailname">
                                <label class="cnname"><a target="_blank" href="/meiju/This.Is.Us.html">我们这一天</a></label>
                                <label class="enname"><a target="_blank" href="/meiju/This.Is.Us.html">This Is Us</a></label>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">更多 &raquo;</a></p>
            </div>

            <div class="col-lg-4 trailers">
                <p>
                <div class="trailer">
                    <ul>
                        <li>
                            <a target="_blank" href="http://www.ttmeiju.vip/meiju/Shameless.html">
                                <img alt="《无耻家庭》第八季第一集高清资源已出！" src="http://i4.cfimg.com/588755/5ce3b48f4bceb0f2.jpg">
                                <div class="tratit">《无耻家庭》第八季第一集高清资源已出！</div>
                            </a>
                        </li><li>
                            <a target="_blank" href="http://www.ttmeiju.vip/meiju/THE.Walking.Dead.html">
                                <img alt="《行尸走肉》第八季第三集高清资源已出！" src="http://i2.cfimg.com/588755/60b52720a9c9411e.jpg">
                                <div class="tratit">《行尸走肉》第八季第三集高清资源已出！</div>
                            </a>
                        </li><li>
                            <a target="_blank" href="https://weibo.com/1265416944/FurmNolgq?from=page_1006061265416944_profile&amp;wvr=6&amp;mod=weibotime">
                                <img alt="Netflix年底惊悚新剧《暗黑》首曝【中字】预告片！" src="http://i2.cfimg.com/588755/38115e2ec982d94d.jpg">
                                <div class="tratit">Netflix年底惊悚新剧《暗黑》首曝【中字】预告片！</div>
                            </a>
                        </li>            </ul>
                </div>

                </p>
            </div>

            <div class="col-lg-4 dailyrcmds" >
                <h2>今日更新推荐</h2>

                <p>
                    <div class="dailyrcmd">
                        <ul>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
                            <li class="dailyrcmd_li">
                                <a target="_blank" href="/meiju/Inhumans.html">异人族 Inhumans</a>
                                <span>订阅量:2199</span>
                            </li>
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
                                <li name="1" class=""> 剧情类                            </li>
                                <li name="2"> 科幻类                            </li>
                                <li name="3"> 喜剧类                            </li>
                                <li name="4"> 律政类                            </li>
                                <li name="5"> 历史类                            </li>
                                <li name="6"> 罪案类                            </li>
                                <li name="7"> 医务类                            </li>
                                <li name="8"> 惊悚类                            </li>
                                <li name="9" class="active"> 奇幻类                            </li>
                                <li name="10" class=""> 真人秀                            </li>
                                <li name="11" class=""> 动画类                            </li>
                                <li name="12" class=""> 音乐类                            </li>
                                <li name="13"> 奇幻类                            </li>
                                <li name="14"> 悬疑类                            </li>
                                <li name="15"> 纪录片                            </li>
                                <li name="16"> 脱口秀                            </li>
                                <li name="17"> 动作类                            </li>
                                <li name="18"> 家庭类                            </li>
                                <li name="19"> 运动类                            </li>
                                <li name="20"> 爱情类                            </li>
                                <li name="21"> 战争类                            </li>
                                <li name="22"> 冒险类                            </li>
                                <li name="23"> 西部类                            </li>
                            </ul>
                        </div>
                        <span class="leftBtn">◂</span><span class="rightBtn">▸</span>            </div>
                    <div class="secldiv">
                        <ul>
                            <div class="catespan" model="1" id="ctspan1" style="display:block;">
                                <li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Last.Post.html">
                                        <img src="http://i4.cfimg.com/588755/e5b600e83d7aa19a.jpg" alt="最后的岗哨">
                                        <span class="cicname">最后的岗哨</span>
                                        <span class="ciename">The Last Post</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Marvelous.Mrs.Maisel.html">
                                        <img src="http://i2.cfimg.com/588755/1da4bd0f400d1c08.jpg" alt="了不起的麦瑟尔女士">
                                        <span class="cicname">了不起的麦瑟尔女士</span>
                                        <span class="ciename">The Marvelous Mrs Maisel</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Frankenstein.Chronicles.html">
                                        <img src="http://i2.cfimg.com/588755/80be26798f95fcfa.jpg" alt="弗兰肯斯坦传奇">
                                        <span class="cicname">弗兰肯斯坦传奇</span>
                                        <span class="ciename">The Frankenstein Chronicles</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/Bad.Blood.html">
                                        <img src="http://i1.cfimg.com/588755/fab9d0ad3ae2577a.jpg" alt="血仇">
                                        <span class="cicname">血仇</span>
                                        <span class="ciename">Bad Blood</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/Tin.Star.html">
                                        <img src="http://i2.nbimg.com/588755/4b5ff5f67a45a9bd.jpg" alt="锡星">
                                        <span class="cicname">锡星</span>
                                        <span class="ciename">Tin Star</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/Runaways.html">
                                        <img src="http://i2.cfimg.com/588755/eb0468c0f9536650.jpg" alt="离家童盟">
                                        <span class="cicname">离家童盟</span>
                                        <span class="ciename">Runaways</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/Liar.html">
                                        <img src="http://i1.nbimg.com/588755/b5dbc81620a3a88a.jpg" alt="谁在撒谎">
                                        <span class="cicname">谁在撒谎</span>
                                        <span class="ciename">Liar</span>
                                    </a>
                                </li><li model="1" class="active" style="display: none;">
                                    <a target="_blank" href="/meiju/Absentia.html">
                                        <img src="http://i1.nbimg.com/588755/174b01808e19667c.jpg" alt="失联">
                                        <span class="cicname">失联</span>
                                        <span class="ciename">Absentia</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="1" style="display: none;">
                                <a href="javascript:void(0);" name="2" page="1" id="1" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="2" id="ctspan2">
                                <li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/Philip.K.Dicks.Electric.Dreams.html">
                                        <img src="http://i2.cfimg.com/588755/7f92f3661c84fc92.jpg" alt="菲利普·狄克的电子梦">
                                        <span class="cicname">菲利普·狄克的电子梦</span>
                                        <span class="ciename">Philip K Dicks Electric Dreams</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/I.am.Frankie.html">
                                        <img src="http://i4.nbimg.com/588755/7fda6c7a83510499.jpg" alt="机器少女法兰姬">
                                        <span class="cicname">机器少女法兰姬</span>
                                        <span class="ciename">I am Frankie</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/Future.Man.html">
                                        <img src="http://i1.nbimg.com/588755/2418b78bb07b5437.jpg" alt="高玩救未来">
                                        <span class="cicname">高玩救未来</span>
                                        <span class="ciename">Future Man</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/Inhumans.html">
                                        <img src="http://i1.fuimg.com/588755/47da6a1ea79299a9.jpg" alt="异人族">
                                        <span class="cicname">异人族</span>
                                        <span class="ciename">Inhumans</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Gifted.html">
                                        <img src="http://i2.cfimg.com/588755/907668f930359697.jpg" alt="天赋异禀">
                                        <span class="cicname">天赋异禀</span>
                                        <span class="ciename">The Gifted</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/Star.Trek.Discovery.html">
                                        <img src="http://i1.fuimg.com/588755/220d39ca51af0175.jpg" alt="星际迷航：发现号">
                                        <span class="cicname">星际迷航：发现号</span>
                                        <span class="ciename">Star Trek Discovery</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Orville.html">
                                        <img src="http://i1.fuimg.com/588755/7295f311f0fbe83b.jpg" alt="奥维尔">
                                        <span class="cicname">奥维尔</span>
                                        <span class="ciename">The Orville</span>
                                    </a>
                                </li><li model="2" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Defenders.html">
                                        <img src="http://i1.fuimg.com/588755/ff0ec931f1d2dc85.jpg" alt="捍卫者联盟">
                                        <span class="cicname">捍卫者联盟</span>
                                        <span class="ciename">The Defenders</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="2" style="display: none;">
                                <a href="javascript:void(0);" name="1" page="1" id="2" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="3" id="ctspan3">
                                <li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/The.End.of.The.Fucking.World.html">
                                        <img src="http://i2.cfimg.com/588755/c7d7766d9452bc07.jpg" alt="去他妈的世界">
                                        <span class="cicname">去他妈的世界</span>
                                        <span class="ciename">The End of The Fucking World</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/White.Famous.html">
                                        <img src="http://i1.cfimg.com/588755/a975b2a1712cd7a2.png" alt="白闻名">
                                        <span class="cicname">白闻名</span>
                                        <span class="ciename">White Famous</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/MECHX4.html">
                                        <img src="http://i1.nbimg.com/588755/bbaebe0d28f567f9.jpg" alt="MECH-X4">
                                        <span class="cicname">MECH-X4</span>
                                        <span class="ciename">MECHX4</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/Back.html">
                                        <img src="http://i1.cfimg.com/588755/cf89934be996590d.jpg" alt="不速归客">
                                        <span class="cicname">不速归客</span>
                                        <span class="ciename">Back</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/SMILF.html">
                                        <img src="http://i2.cfimg.com/588755/d3f7f8be09346aeb.png" alt="单亲辣妈">
                                        <span class="cicname">单亲辣妈</span>
                                        <span class="ciename">SMILF</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Mayor.html">
                                        <img src="http://i1.nbimg.com/588755/e1303224582d6122.jpg" alt="嘻哈市长">
                                        <span class="cicname">嘻哈市长</span>
                                        <span class="ciename">The Mayor</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/Cradle.To.Grave.html">
                                        <img src="http://i2.cfimg.com/588755/9ebfd8609dcd4fe3.jpg" alt="生活琐逝">
                                        <span class="cicname">生活琐逝</span>
                                        <span class="ciename">Cradle To Grave</span>
                                    </a>
                                </li><li model="3" style="display: none;">
                                    <a target="_blank" href="/meiju/Disjointed.html">
                                        <img src="http://i4.fuimg.com/588755/3eed0c3c8c8ce1f8.jpg" alt="生活大麻烦">
                                        <span class="cicname">生活大麻烦</span>
                                        <span class="ciename">Disjointed</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="3" style="display: none;">
                                <a href="javascript:void(0);" name="3" page="1" id="3" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="4" id="ctspan4">
                                <li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/Chicago.Justice.html">
                                        <img src="http://i4.buimg.com/588755/e3af0af7706303bf.jpg" alt="芝加哥律政">
                                        <span class="cicname">芝加哥律政</span>
                                        <span class="ciename">Chicago Justice</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Good.Fight.html">
                                        <img src="http://i1.piimg.com/588755/8ee166daf2b05e82.jpg" alt="傲骨之战">
                                        <span class="cicname">傲骨之战</span>
                                        <span class="ciename">The Good Fight</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/Goliath.html">
                                        <img src="http://i1.piimg.com/588755/ddc8122bf7dee011.jpg" alt="律界巨人">
                                        <span class="cicname">律界巨人</span>
                                        <span class="ciename">Goliath</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/The.West.Wing.html">
                                        <img src="http://i1.piimg.com/588755/21962b6851d7977b.jpg" alt="白宫风云">
                                        <span class="cicname">白宫风云</span>
                                        <span class="ciename">The West Wing</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/House.of.Cards.html">
                                        <img src="http://i4.buimg.com/588755/d42b8ee808248838.jpg" alt="纸牌屋">
                                        <span class="cicname">纸牌屋</span>
                                        <span class="ciename">House of Cards</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/Law.and.Order.html">
                                        <img src="http://i4.buimg.com/588755/ff080ea95a089b02.jpg" alt="法律与秩序">
                                        <span class="cicname">法律与秩序</span>
                                        <span class="ciename">Law and Order</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/Silk.html">
                                        <img src="http://i4.buimg.com/588755/2123b3efb2a49160.jpg" alt="皇家律师">
                                        <span class="cicname">皇家律师</span>
                                        <span class="ciename">Silk</span>
                                    </a>
                                </li><li model="4" style="display: none;">
                                    <a target="_blank" href="/meiju/Garrows.Law.html">
                                        <img src="http://i2.muimg.com/588755/30ae5c18039a26d3.jpg" alt="加罗律师">
                                        <span class="cicname">加罗律师</span>
                                        <span class="ciename">Garrows Law</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="4" style="display: none;">
                                <a href="javascript:void(0);" name="5" page="1" id="4" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="5" id="ctspan5">
                                <li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Snowfall.html">
                                        <img src="http://i2.kiimg.com/588755/b6785ce7f244d42f.jpg" alt="白粉飞">
                                        <span class="cicname">白粉飞</span>
                                        <span class="ciename">Snowfall</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Kennedys.html">
                                        <img src="http://i1.piimg.com/588755/357ce33ae59482ef.jpg" alt="肯尼迪家族">
                                        <span class="cicname">肯尼迪家族</span>
                                        <span class="ciename">The Kennedys</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Camelot.html">
                                        <img src="http://i1.piimg.com/588755/fc3b984add721a45.jpg" alt="圣城风云">
                                        <span class="cicname">圣城风云</span>
                                        <span class="ciename">Camelot</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Into.the.West.html">
                                        <img src="http://i4.buimg.com/588755/5ffa9a498742c5b6.jpg" alt="西部风云">
                                        <span class="cicname">西部风云</span>
                                        <span class="ciename">Into the West</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Company.html">
                                        <img src="http://i4.buimg.com/588755/857219257598fa23.jpg" alt="冷战疑云">
                                        <span class="cicname">冷战疑云</span>
                                        <span class="ciename">The Company</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Medici.Masters.of.Florence.html">
                                        <img src="http://i2.muimg.com/588755/f7755bbc465ad25d.jpg" alt="美第奇家族翡冷翠名门">
                                        <span class="cicname">美第奇家族翡冷翠名门</span>
                                        <span class="ciename">Medici Masters of Florence</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Graves.html">
                                        <img src="http://i2.cfimg.com/588755/8487a44b821ba83c.jpg" alt="格拉夫斯">
                                        <span class="cicname">格拉夫斯</span>
                                        <span class="ciename">Graves</span>
                                    </a>
                                </li><li model="5" style="display: none;">
                                    <a target="_blank" href="/meiju/Frontier.html">
                                        <img src="http://i2.muimg.com/588755/48cfadaf0ae136a5.jpg" alt="边境">
                                        <span class="cicname">边境</span>
                                        <span class="ciename">Frontier</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="5" style="display: none;">
                                <a href="javascript:void(0);" name="7" page="1" id="5" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="6" id="ctspan6">
                                <li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Damnation.html">
                                        <img src="http://i1.cfimg.com/588755/dfaeccceb8e3030f.jpg" alt="诅咒">
                                        <span class="cicname">诅咒</span>
                                        <span class="ciename">Damnation</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Frankie.Drake.Mysteries.html">
                                        <img src="http://i1.cfimg.com/588755/92a7ef21f6d76fbe.jpg" alt="德雷克探案集">
                                        <span class="cicname">德雷克探案集</span>
                                        <span class="ciename">Frankie Drake Mysteries</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Midsomer.Murders.html">
                                        <img src="http://i4.cfimg.com/588755/09a141902cb62947.jpg" alt="骇人命案事件簿">
                                        <span class="cicname">骇人命案事件簿</span>
                                        <span class="ciename">Midsomer Murders</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Janet.King.html">
                                        <img src="http://i2.cfimg.com/588755/db400225caef9b27.jpg" alt="珍妮特·金">
                                        <span class="cicname">珍妮特·金</span>
                                        <span class="ciename">Janet King</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Law.and.Order.True.Crime.html">
                                        <img src="http://i1.nbimg.com/588755/e97bc7237393d052.jpg" alt="法律与秩序 真实重案">
                                        <span class="cicname">法律与秩序 真实重案</span>
                                        <span class="ciename">Law and Order True Crime</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Strike.html">
                                        <img src="http://i1.cfimg.com/588755/20073b533362236f.jpg" alt="神探斯特莱克">
                                        <span class="cicname">神探斯特莱克</span>
                                        <span class="ciename">Strike</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/S.W.A.T.html">
                                        <img src="http://i1.cfimg.com/588755/0dbeef42018e02b7.jpg" alt="反恐特警组">
                                        <span class="cicname">反恐特警组</span>
                                        <span class="ciename">S.W.A.T</span>
                                    </a>
                                </li><li model="6" style="display: none;">
                                    <a target="_blank" href="/meiju/Wisdom.of.the.Crowd.html">
                                        <img src="http://i1.fuimg.com/588755/8615afab46eaa235.jpg" alt="群策群力">
                                        <span class="cicname">群策群力</span>
                                        <span class="ciename">Wisdom of the Crowd</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="6" style="display: none;">
                                <a href="javascript:void(0);" name="4" page="1" id="6" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="7" id="ctspan7">
                                <li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Good.Karma.Hospital.html">
                                        <img src="http://i1.buimg.com/588755/2dfe935d5cce75a6.jpg" alt="善缘医院">
                                        <span class="cicname">善缘医院</span>
                                        <span class="ciename">The Good Karma Hospital</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/Chance.html">
                                        <img src="http://i1.piimg.com/588755/42dd42df68035417.jpg" alt="钱斯医生">
                                        <span class="cicname">钱斯医生</span>
                                        <span class="ciename">Chance</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/Code.Black.html">
                                        <img src="http://i4.buimg.com/588755/16da97f8aef7e8ae.jpg" alt="紧急抢救">
                                        <span class="cicname">紧急抢救</span>
                                        <span class="ciename">Code Black</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/Scrubs.html">
                                        <img src="http://i4.buimg.com/588755/24894d030857a664.jpg" alt="实习医生风云">
                                        <span class="cicname">实习医生风云</span>
                                        <span class="ciename">Scrubs</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Night.Shift.html">
                                        <img src="http://i4.piimg.com/588755/b782dadd4830c7a0.jpg" alt="夜班医生">
                                        <span class="cicname">夜班医生</span>
                                        <span class="ciename">The Night Shift</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/ER.html">
                                        <img src="http://i2.muimg.com/588755/25e679d8bf93a56b.jpg" alt="急诊室的故事">
                                        <span class="cicname">急诊室的故事</span>
                                        <span class="ciename">ER</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/Monday.Mornings.html">
                                        <img src="http://i4.buimg.com/588755/1b41d4e77b86d02f.jpg" alt="周一清晨">
                                        <span class="cicname">周一清晨</span>
                                        <span class="ciename">Monday Mornings</span>
                                    </a>
                                </li><li model="7" style="display: none;">
                                    <a target="_blank" href="/meiju/Saving.Hope.html">
                                        <img src="http://i4.buimg.com/588755/c34dad961fd5c4b5.jpg" alt="拯救希望">
                                        <span class="cicname">拯救希望</span>
                                        <span class="ciename">Saving Hope</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="7" style="display: none;">
                                <a href="javascript:void(0);" name="8" page="1" id="7" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="8" id="ctspan8">
                                <li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Superstition.html">
                                        <img src="http://i4.cfimg.com/588755/13a35236b218fee5.jpg" alt="迷信">
                                        <span class="cicname">迷信</span>
                                        <span class="ciename">Superstition</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Gunpowder.html">
                                        <img src="http://i2.cfimg.com/588755/f66a0f8ca563b217.jpg" alt="火药">
                                        <span class="cicname">火药</span>
                                        <span class="ciename">Gunpowder</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Lore.html">
                                        <img src="http://i4.cfimg.com/588755/758a06491c121ef5.jpg" alt="传说">
                                        <span class="cicname">传说</span>
                                        <span class="ciename">Lore</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Alias.Grace.html">
                                        <img src="http://i4.cfimg.com/588755/84e86208873dedfe.png" alt="双面格蕾丝">
                                        <span class="cicname">双面格蕾丝</span>
                                        <span class="ciename">Alias Grace</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Mindhunter.html">
                                        <img src="http://i1.cfimg.com/588755/94576edad6d99f31.jpg" alt="心灵猎人">
                                        <span class="cicname">心灵猎人</span>
                                        <span class="ciename">Mindhunter</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Mr.Mercedes.html">
                                        <img src="http://i4.bvimg.com/588755/d08c99f16f70b7dc.jpg" alt="梅塞德斯先生">
                                        <span class="cicname">梅塞德斯先生</span>
                                        <span class="ciename">Mr Mercedes</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Somewhere.Between.html">
                                        <img src="http://i2.kiimg.com/588755/5f99141467070359.jpg" alt="那时那处">
                                        <span class="cicname">那时那处</span>
                                        <span class="ciename">Somewhere Between</span>
                                    </a>
                                </li><li model="8" style="display: none;">
                                    <a target="_blank" href="/meiju/Patriot.html">
                                        <img src="http://i4.buimg.com/588755/752720f72c6cedfe.jpg" alt="爱国者">
                                        <span class="cicname">爱国者</span>
                                        <span class="ciename">Patriot</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="8" style="display: none;">
                                <a href="javascript:void(0);" name="17" page="1" id="8" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="9" id="ctspan9" style="display: block;">
                                <li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/Midnight.Texas.html">
                                        <img src="http://i1.buimg.com/588755/7512de90388c1256.jpg" alt="德州午夜">
                                        <span class="cicname">德州午夜</span>
                                        <span class="ciename">Midnight Texas</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/A.Series.of.Unfortunate.Event.html">
                                        <img src="http://i1.piimg.com/588755/94241406aa030159.jpg" alt="雷蒙·斯尼奇的不幸历险">
                                        <span class="cicname">雷蒙·斯尼奇的不幸历险</span>
                                        <span class="ciename">A Series of Unfortunate Event</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/Emerald.City.html">
                                        <img src="http://i2.muimg.com/588755/16cde3becac4f1ad.jpg" alt="翡翠城">
                                        <span class="cicname">翡翠城</span>
                                        <span class="ciename">Emerald City</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/The.OA.html">
                                        <img src="http://i2.muimg.com/588755/4639ce5486693cb0.jpg" alt="先见之明">
                                        <span class="cicname">先见之明</span>
                                        <span class="ciename">The OA</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/Shut.Eye.html">
                                        <img src="http://i2.muimg.com/588755/dfaa602e86614d50.jpg" alt="闭眼">
                                        <span class="cicname">闭眼</span>
                                        <span class="ciename">Shut Eye</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/Wolfblood.Secrets.html">
                                        <img src="http://i2.muimg.com/588755/3ec7504c8bfc2f28.jpg" alt="狼血少年的秘密">
                                        <span class="cicname">狼血少年的秘密</span>
                                        <span class="ciename">Wolfblood Secrets</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/Van.Helsing.html">
                                        <img src="http://i4.cfimg.com/588755/52205d6d9b642009.jpg" alt="凡妮莎海辛">
                                        <span class="cicname">凡妮莎海辛</span>
                                        <span class="ciename">Van Helsing</span>
                                    </a>
                                </li><li model="9" style="display: list-item;">
                                    <a target="_blank" href="/meiju/The.Wizards.of.Aus.html">
                                        <img src="http://i4.buimg.com/588755/be88da5a0bb21564.jpg" alt="澳野巫踪">
                                        <span class="cicname">澳野巫踪</span>
                                        <span class="ciename">The Wizards of Aus</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="9" style="display: block;">
                                <a href="javascript:void(0);" name="6" page="1" id="9" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="10" id="ctspan10" style="display: block;">
                                <li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/The.F.Word.With.Gordon.Ramsay.html">
                                        <img src="http://i1.cfimg.com/588755/2da7c9c57ad78eb6.jpg" alt="食为天">
                                        <span class="cicname">食为天</span>
                                        <span class="ciename">The F Word With Gordon Ramsay</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/First.Dates.html">
                                        <img src="http://i2.bvimg.com/588755/1a80ed788100932e.jpg" alt="初次约会">
                                        <span class="cicname">初次约会</span>
                                        <span class="ciename">First Dates</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/Undercover.Boss.html">
                                        <img src="http://i1.buimg.com/588755/6aed2c7cdeb54dbb.jpg" alt="卧底老板">
                                        <span class="cicname">卧底老板</span>
                                        <span class="ciename">Undercover Boss</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/Bitva.ekstrasensov.html">
                                        <img src="http://i4.buimg.com/588755/9874b9704721c61b.jpg" alt="通灵之战">
                                        <span class="cicname">通灵之战</span>
                                        <span class="ciename">Bitva ekstrasensov</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/Project.Runway.Junior.html">
                                        <img src="http://i4.buimg.com/588755/80fb79554387d623.jpg" alt="天桥骄子青少年版">
                                        <span class="cicname">天桥骄子青少年版</span>
                                        <span class="ciename">Project Runway Junior</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/Hunted.US.html">
                                        <img src="http://i4.buimg.com/588755/1ed47e3954283de5.jpg" alt="潜行追踪美版">
                                        <span class="cicname">潜行追踪美版</span>
                                        <span class="ciename">Hunted US</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/White.Rabbit.Project.html">
                                        <img src="http://i4.buimg.com/588755/2bf6279096680214.jpg" alt="未知项目">
                                        <span class="cicname">未知项目</span>
                                        <span class="ciename">White Rabbit Project</span>
                                    </a>
                                </li><li model="10" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Grand.Tour.html">
                                        <img src="http://i1.piimg.com/588755/ddf1a582cdc0405e.jpg" alt="伟大的旅程">
                                        <span class="cicname">伟大的旅程</span>
                                        <span class="ciename">The Grand Tour</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="10" style="display: none;">
                                <a href="javascript:void(0);" name="9" page="1" id="10" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="11" id="ctspan11" style="display: block;">
                                <li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Unikitty.html">
                                        <img src="http://i4.cfimg.com/588755/6c24eee4af8cb866.jpg" alt="独角猫">
                                        <span class="cicname">独角猫</span>
                                        <span class="ciename">Unikitty</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Shimmer.and.Shine.html">
                                        <img src="http://i2.cfimg.com/588755/09ff6ab2290372d3.jpg" alt="愿望精灵小姐妹">
                                        <span class="cicname">愿望精灵小姐妹</span>
                                        <span class="ciename">Shimmer and Shine</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Lost.in.OZ.html">
                                        <img src="http://i4.nbimg.com/588755/e6fda82d9e8069c4.jpg" alt="迷失奥兹国">
                                        <span class="cicname">迷失奥兹国</span>
                                        <span class="ciename">Lost in OZ</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Lastman.html">
                                        <img src="http://i4.fuimg.com/588755/8a8143489f9d5b85.jpg" alt="拳馆英雄">
                                        <span class="cicname">拳馆英雄</span>
                                        <span class="ciename">Lastman</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Spider.Man.html">
                                        <img src="http://i2.fuimg.com/588755/d906bafd8d30d39d.png" alt="蜘蛛侠Spider-Man">
                                        <span class="cicname">蜘蛛侠Spider-Man</span>
                                        <span class="ciename">Spider Man</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/DuckTales.html">
                                        <img src="http://i4.nbimg.com/588755/97456eced88712c8.jpg" alt="新唐老鸭俱乐部">
                                        <span class="cicname">新唐老鸭俱乐部</span>
                                        <span class="ciename">DuckTales</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Loud.House.html">
                                        <img src="http://i4.nbimg.com/588755/e86f879c90e53aa8.jpg" alt="喧闹一家亲">
                                        <span class="cicname">喧闹一家亲</span>
                                        <span class="ciename">The Loud House</span>
                                    </a>
                                </li><li model="11" style="display: none;">
                                    <a target="_blank" href="/meiju/Puppy.Dog.Pals.html">
                                        <img src="http://i2.kiimg.com/588755/e319908ea04f54d1.jpg" alt="小狗的朋友">
                                        <span class="cicname">小狗的朋友</span>
                                        <span class="ciename">Puppy Dog Pals</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="11" style="display: none;">
                                <a href="javascript:void(0);" name="10" page="1" id="11" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="12" id="ctspan12" style="display: block;">
                                <li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/School.of.Rock.html">
                                        <img src="http://i1.fuimg.com/588755/f0a300ac986ba7fd.jpg" alt="摇滚学校">
                                        <span class="cicname">摇滚学校</span>
                                        <span class="ciename">School of Rock</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/Sun.Records.html">
                                        <img src="http://i1.piimg.com/588755/f60ff2050248abb1.jpg" alt="太阳唱片">
                                        <span class="cicname">太阳唱片</span>
                                        <span class="ciename">Sun Records</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Get.Down.html">
                                        <img src="http://i4.buimg.com/588755/e362fab8eb58bc2e.jpg" alt="少年嘻哈梦">
                                        <span class="cicname">少年嘻哈梦</span>
                                        <span class="ciename">The Get Down</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/Vinyl.html">
                                        <img src="http://i2.muimg.com/588755/67d22394a216eef5.jpg" alt="黑胶唱片">
                                        <span class="cicname">黑胶唱片</span>
                                        <span class="ciename">Vinyl</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Glee.Project.html">
                                        <img src="http://i4.buimg.com/588755/c1d4bfc31909ea19.jpg" alt="欢乐合唱团计划">
                                        <span class="cicname">欢乐合唱团计划</span>
                                        <span class="ciename">The Glee Project</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/Duets.html">
                                        <img src="http://i4.buimg.com/588755/13814344c0bf9e2a.jpg" alt="最美和声">
                                        <span class="cicname">最美和声</span>
                                        <span class="ciename">Duets</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/Smash.html">
                                        <img src="http://i2.muimg.com/588755/8b5664ffcf2d7c4c.jpg" alt="名声大噪">
                                        <span class="cicname">名声大噪</span>
                                        <span class="ciename">Smash</span>
                                    </a>
                                </li><li model="12" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Sing.Off.html">
                                        <img src="http://i4.buimg.com/588755/3d70e91d60775068.jpg" alt="欢乐颂">
                                        <span class="cicname">欢乐颂</span>
                                        <span class="ciename">The Sing Off</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="12" style="display: none;">
                                <a href="javascript:void(0);" name="14" page="1" id="12" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="13" id="ctspan13">
                                <li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/American.Gods.html">
                                        <img src="http://i1.piimg.com/588755/e49c6ed2ebf16232.jpg" alt="美国众神">
                                        <span class="cicname">美国众神</span>
                                        <span class="ciename">American Gods</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/Stranger.Things.html">
                                        <img src="http://i4.nbimg.com/588755/1be8d2c79a1701d5.jpg" alt="怪奇物语">
                                        <span class="cicname">怪奇物语</span>
                                        <span class="ciename">Stranger Things</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/Preacher.html">
                                        <img src="http://i4.piimg.com/588755/ace23a072347f599.jpg" alt="传道士">
                                        <span class="cicname">传道士</span>
                                        <span class="ciename">Preacher</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/Wynonna.Earp.html">
                                        <img src="http://i1.piimg.com/588755/330707e58e01ee2c.jpg" alt="狩魔女杰">
                                        <span class="cicname">狩魔女杰</span>
                                        <span class="ciename">Wynonna Earp</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/South.of.Hell.html">
                                        <img src="http://i4.buimg.com/588755/9cbf8e91885b2c4c.jpg" alt="地狱恶魔">
                                        <span class="cicname">地狱恶魔</span>
                                        <span class="ciename">South of Hell</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/Lucifer.html">
                                        <img src="http://i1.cfimg.com/588755/61543eb79f5e16fa.jpg" alt="路西法">
                                        <span class="cicname">路西法</span>
                                        <span class="ciename">Lucifer</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Librarians.html">
                                        <img src="http://i2.muimg.com/588755/11c7393bea5ef43b.jpg" alt="图书馆员">
                                        <span class="cicname">图书馆员</span>
                                        <span class="ciename">The Librarians</span>
                                    </a>
                                </li><li model="13" style="display: none;">
                                    <a target="_blank" href="/meiju/H2O.Just.Add.Water.2006.html">
                                        <img src="http://i2.muimg.com/588755/c92f9dfa7c377978.jpg" alt="美人鱼">
                                        <span class="cicname">美人鱼</span>
                                        <span class="ciename">H2O Just Add Water 2006</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="13" style="display: none;">
                                <a href="javascript:void(0);" name="13" page="1" id="13" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="14" id="ctspan14">
                                <li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Rellik.html">
                                        <img src="http://i2.nbimg.com/588755/488173e1e02cfb14.jpg" alt="杀手回路">
                                        <span class="cicname">杀手回路</span>
                                        <span class="ciename">Rellik</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Ghost.Wars.html">
                                        <img src="http://i1.nbimg.com/588755/6900f187345fdffa.png" alt="灵战">
                                        <span class="cicname">灵战</span>
                                        <span class="ciename">Ghost Wars</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Hunter.Street.html">
                                        <img src="http://i1.buimg.com/588755/3caf2c301a6fd85c.jpg" alt="亨特之谜">
                                        <span class="cicname">亨特之谜</span>
                                        <span class="ciename">Hunter Street</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Loch.html">
                                        <img src="http://i4.piimg.com/588755/792af9e52b48a766.jpg" alt="尼斯湖谜案">
                                        <span class="cicname">尼斯湖谜案</span>
                                        <span class="ciename">The Loch</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Houdini.and.Doyle.html">
                                        <img src="http://i1.piimg.com/588755/7daa965f9881b02a.jpg" alt="胡迪尼与道尔">
                                        <span class="cicname">胡迪尼与道尔</span>
                                        <span class="ciename">Houdini and Doyle</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Twin.Peaks.html">
                                        <img src="http://i2.muimg.com/588755/c5f19ecc3e05bbd6.jpg" alt="双峰">
                                        <span class="cicname">双峰</span>
                                        <span class="ciename">Twin Peaks</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Channel.Zero.html">
                                        <img src="http://i2.cfimg.com/588755/a2d10323edc7af9a.jpg" alt="零异频道">
                                        <span class="cicname">零异频道</span>
                                        <span class="ciename">Channel Zero</span>
                                    </a>
                                </li><li model="14" style="display: none;">
                                    <a target="_blank" href="/meiju/Paranoid.html">
                                        <img src="http://i2.muimg.com/588755/a48496ea327db974.jpg" alt="妄想">
                                        <span class="cicname">妄想</span>
                                        <span class="ciename">Paranoid</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="14" style="display: none;">
                                <a href="javascript:void(0);" name="11" page="1" id="14" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="15" id="ctspan15">
                                <li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/Blue.Planet.html">
                                        <img src="http://i4.cfimg.com/588755/266d03c3220ead4b.jpg" alt="蓝色星球">
                                        <span class="cicname">蓝色星球</span>
                                        <span class="ciename">Blue Planet</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/Planet.Earth.II.A.World.of.Wonder.html">
                                        <img src="http://i1.cfimg.com/588755/3bab0711fea0e4c2.jpg" alt="行星地球2：奇迹世界">
                                        <span class="cicname">行星地球2：奇迹世界</span>
                                        <span class="ciename">Planet Earth II A World of Wonder</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/National.Geographic.Megastructures.html">
                                        <img src="http://i2.cfimg.com/588755/6f25a24f7c0445e5.jpg" alt="国家地理:伟大工程巡礼系列">
                                        <span class="cicname">国家地理:伟大工程巡礼系列</span>
                                        <span class="ciename">National Geographic Megastructures</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Vietnam.War.html">
                                        <img src="http://i2.cfimg.com/588755/fdf33a8844c5720e.jpg" alt="越南战争">
                                        <span class="cicname">越南战争</span>
                                        <span class="ciename">The Vietnam War</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Royal.House.of.Windsor.html">
                                        <img src="http://i1.cfimg.com/588755/28082d62978ca4f6.jpg" alt="温莎皇室">
                                        <span class="cicname">温莎皇室</span>
                                        <span class="ciename">The Royal House of Windsor</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Hunt.html">
                                        <img src="http://i1.buimg.com/588755/a474c7fbcf94d9e7.jpg" alt="猎捕">
                                        <span class="cicname">猎捕</span>
                                        <span class="ciename">The Hunt</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/Five.Came.Back.html">
                                        <img src="http://i4.piimg.com/588755/5c8a1a69901e8858.jpg" alt="五人归来：好莱坞与第二次世界大战">
                                        <span class="cicname">五人归来：好莱坞与第二次世界大战</span>
                                        <span class="ciename">Five Came Back</span>
                                    </a>
                                </li><li model="15" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Defiant.Ones.html">
                                        <img src="http://i1.buimg.com/588755/dc5f82f75939eb95.jpg" alt="反叛者">
                                        <span class="cicname">反叛者</span>
                                        <span class="ciename">The Defiant Ones</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="15" style="display: none;">
                                <a href="javascript:void(0);" name="16" page="1" id="15" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="16" id="ctspan16">
                                <li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/Late.Show.with.Stephen.Colbert.html">
                                        <img src="http://i1.piimg.com/588755/0b127f3619352cbd.jpg" alt="科尔伯特晚间秀">
                                        <span class="cicname">科尔伯特晚间秀</span>
                                        <span class="ciename">Late Show with Stephen Colbert</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Late.Late.Show.with.James.Corden.html">
                                        <img src="http://i2.muimg.com/588755/7c1667d84a4a48ec.jpg" alt="詹姆斯科登深深夜秀">
                                        <span class="cicname">詹姆斯科登深深夜秀</span>
                                        <span class="ciename">The Late Late Show with James Corden</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Graham.Norton.Show.html">
                                        <img src="http://i1.piimg.com/588755/c91f8556dad772d8.jpg" alt="格拉汉姆诺顿秀">
                                        <span class="cicname">格拉汉姆诺顿秀</span>
                                        <span class="ciename">The Graham Norton Show</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Tonight.Show.Starring.Jimmy.Fallon.html">
                                        <img src="http://i2.muimg.com/588755/eeea03cee8c3cc69.jpg" alt="肥伦今夜秀">
                                        <span class="cicname">肥伦今夜秀</span>
                                        <span class="ciename">The Tonight Show Starring Jimmy Fallon</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/Last.Week.Tonight.with.John.Oliver.html">
                                        <img src="http://i1.piimg.com/588755/07fb00b43592126e.jpg" alt="上周今夜秀">
                                        <span class="cicname">上周今夜秀</span>
                                        <span class="ciename">Last Week Tonight with John Oliver</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/Talking.Bad.html">
                                        <img src="http://i1.piimg.com/588755/dccb8e3c4f904bd3.jpg" alt="闲话毒师">
                                        <span class="cicname">闲话毒师</span>
                                        <span class="ciename">Talking Bad</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/Russell.Howards.Good.News.html">
                                        <img src="http://i4.buimg.com/588755/37eb72abbac476be.jpg" alt="罗素的好消息">
                                        <span class="cicname">罗素的好消息</span>
                                        <span class="ciename">Russell Howards Good News</span>
                                    </a>
                                </li><li model="16" style="display: none;">
                                    <a target="_blank" href="/meiju/Chelsea.Lately.html">
                                        <img src="http://i1.piimg.com/588755/d4afd67567ff5ac5.jpg" alt="切尔茜晚间秀">
                                        <span class="cicname">切尔茜晚间秀</span>
                                        <span class="ciename">Chelsea Lately</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="16" style="display: none;">
                                <a href="javascript:void(0);" name="21" page="1" id="16" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="17" id="ctspan17">
                                <li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/SEAL.Team.html">
                                        <img src="http://i1.fuimg.com/588755/d87f7cb9fb0084ea.jpg" alt="海豹突击队">
                                        <span class="cicname">海豹突击队</span>
                                        <span class="ciename">SEAL Team</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/Comrade.Detective.html">
                                        <img src="http://i4.bvimg.com/588755/a1f7a83ed8dca991.jpg" alt="侦探双雄">
                                        <span class="cicname">侦探双雄</span>
                                        <span class="ciename">Comrade Detective</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/Marvels.Agents.of.SHIELDSlingshot.html">
                                        <img src="http://i2.muimg.com/588755/6d8e3f279e0d5dae.jpg" alt="神盾局特工弹弓">
                                        <span class="cicname">神盾局特工弹弓</span>
                                        <span class="ciename">Marvels Agents of SHIELDSlingshot</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/MacGyver.html">
                                        <img src="http://i2.cfimg.com/588755/5ba8da8528e5a25b.jpg" alt="百战天龙">
                                        <span class="cicname">百战天龙</span>
                                        <span class="ciename">MacGyver</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Tick.html">
                                        <img src="http://i1.bvimg.com/588755/0cf6c65c60ede1c7.jpg" alt="超级蜱人">
                                        <span class="cicname">超级蜱人</span>
                                        <span class="ciename">The Tick</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/Battlebots.html">
                                        <img src="http://i4.buimg.com/588755/9ba20c6657209f34.jpg" alt="战斗机器人">
                                        <span class="cicname">战斗机器人</span>
                                        <span class="ciename">Battlebots</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/Rush.html">
                                        <img src="http://i2.muimg.com/588755/69e740ff1376d4cc.jpg" alt="逍遥神医">
                                        <span class="cicname">逍遥神医</span>
                                        <span class="ciename">Rush</span>
                                    </a>
                                </li><li model="17" style="display: none;">
                                    <a target="_blank" href="/meiju/Robot.Combat.League.html">
                                        <img src="http://i4.buimg.com/588755/c5392adf3337100e.jpg" alt="机器人战斗联盟">
                                        <span class="cicname">机器人战斗联盟</span>
                                        <span class="ciename">Robot Combat League</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="17" style="display: none;">
                                <a href="javascript:void(0);" name="22" page="1" id="17" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="18" id="ctspan18">
                                <li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Project.Mc2.html">
                                        <img src="http://i1.buimg.com/588755/024821c18a983d93.jpg" alt="青春相对论">
                                        <span class="cicname">青春相对论</span>
                                        <span class="ciename">Project Mc2</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Big.Love.html">
                                        <img src="http://i2.muimg.com/588755/ec7c7f87f98565f2.jpg" alt="大爱">
                                        <span class="cicname">大爱</span>
                                        <span class="ciename">Big Love</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Last.Tango.In.Halifax.html">
                                        <img src="http://i2.muimg.com/588755/e94c538d1a0c8b61.jpg" alt="哈利法克斯最后的探戈">
                                        <span class="cicname">哈利法克斯最后的探戈</span>
                                        <span class="ciename">Last Tango In Halifax</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Our.Ex.Wife.html">
                                        <img src="http://i1.piimg.com/588755/48a779940802bc69.png" alt="我们的前妻">
                                        <span class="cicname">我们的前妻</span>
                                        <span class="ciename">Our Ex Wife</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Flowers.html">
                                        <img src="http://i2.muimg.com/588755/ae6683908e57361a.jpg" alt="那些花儿">
                                        <span class="cicname">那些花儿</span>
                                        <span class="ciename">Flowers</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Real.Housewives.of.Beverly.Hills.html">
                                        <img src="http://i2.muimg.com/588755/4117927266d26d1d.jpg" alt="比弗利娇妻">
                                        <span class="cicname">比弗利娇妻</span>
                                        <span class="ciename">The Real Housewives of Beverly Hills</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Fuller.House.html">
                                        <img src="http://i1.piimg.com/588755/917fd9b00e468f7a.jpg" alt="欢乐再满屋">
                                        <span class="cicname">欢乐再满屋</span>
                                        <span class="ciename">Fuller House</span>
                                    </a>
                                </li><li model="18" style="display: none;">
                                    <a target="_blank" href="/meiju/Good.Luck.Charlie.html">
                                        <img src="http://i4.buimg.com/588755/52be7915d5417eb1.jpg" alt="查莉成长日记">
                                        <span class="cicname">查莉成长日记</span>
                                        <span class="ciename">Good Luck Charlie</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="18" style="display: none;">
                                <a href="javascript:void(0);" name="23" page="1" id="18" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="19" id="ctspan19">
                                <li model="19" style="display: none;">
                                    <a target="_blank" href="/meiju/Pitch.html">
                                        <img src="http://i2.muimg.com/588755/c48d893e97753ed3.jpg" alt="掷出青春">
                                        <span class="cicname">掷出青春</span>
                                        <span class="ciename">Pitch</span>
                                    </a>
                                </li><li model="19" style="display: none;">
                                    <a target="_blank" href="/meiju/Sports.Night.1998.html">
                                        <img src="http://i1.piimg.com/588755/ad0c794e01c76688.jpg" alt="体育之夜">
                                        <span class="cicname">体育之夜</span>
                                        <span class="ciename">Sports Night 1998</span>
                                    </a>
                                </li><li model="19" style="display: none;">
                                    <a target="_blank" href="/meiju/Tennis.html">
                                        <img src="http://i1.piimg.com/588755/d84b8a032eb5727e.jpg" alt="网球赛事">
                                        <span class="cicname">网球赛事</span>
                                        <span class="ciename">Tennis</span>
                                    </a>
                                </li><li model="19" style="display: none;">
                                    <a target="_blank" href="/meiju/Make.It.or.Break.It.html">
                                        <img src="http://i1.piimg.com/588755/955547c60a600f2b.jpg" alt="体操公主">
                                        <span class="cicname">体操公主</span>
                                        <span class="ciename">Make It or Break It</span>
                                    </a>
                                </li><li model="19" style="display: none;">
                                    <a target="_blank" href="/meiju/One.Tree.Hill.html">
                                        <img src="http://i4.buimg.com/588755/484390e0121eaac6.jpg" alt="篮球兄弟">
                                        <span class="cicname">篮球兄弟</span>
                                        <span class="ciename">One Tree Hill</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="19" style="display: none;">
                                <a href="javascript:void(0);" name="24" page="1" id="19" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="20" id="ctspan20">
                                <li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Feral.html">
                                        <img src="http://i1.piimg.com/588755/f582cabcaa0cca7a.jpg" alt="小情歌">
                                        <span class="cicname">小情歌</span>
                                        <span class="ciename">Feral</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Beauty.and.the.Beast.1987.html">
                                        <img src="http://i1.piimg.com/588755/baaf3e5460bc5a80.jpg" alt="侠胆雄狮">
                                        <span class="cicname">侠胆雄狮</span>
                                        <span class="ciename">Beauty and the Beast 1987</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Mad.about.You.html">
                                        <img src="http://i1.piimg.com/588755/117c4984b8541249.jpg" alt="我为卿狂">
                                        <span class="cicname">我为卿狂</span>
                                        <span class="ciename">Mad about You</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Mildred.Pierce.html">
                                        <img src="http://i1.piimg.com/588755/0c02676cc1fd37e7.jpg" alt="欲海情魔">
                                        <span class="cicname">欲海情魔</span>
                                        <span class="ciename">Mildred Pierce</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Choice.html">
                                        <img src="http://i2.muimg.com/588755/19be2949f6760c2a.jpg" alt="美国之挑">
                                        <span class="cicname">美国之挑</span>
                                        <span class="ciename">The Choice</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Pride.and.Prejudice.html">
                                        <img src="http://i2.muimg.com/588755/2759a6149cd7d3e9.jpg" alt="傲慢与偏见">
                                        <span class="cicname">傲慢与偏见</span>
                                        <span class="ciename">Pride and Prejudice</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Pan.Am.html">
                                        <img src="http://i4.buimg.com/588755/863026f8f74fd362.jpg" alt="泛美航空">
                                        <span class="cicname">泛美航空</span>
                                        <span class="ciename">Pan Am</span>
                                    </a>
                                </li><li model="20" style="display: none;">
                                    <a target="_blank" href="/meiju/Friends.with.Benefits.html">
                                        <img src="http://i1.piimg.com/588755/3996cf924d0cc487.jpg" alt="如此朋友">
                                        <span class="cicname">如此朋友</span>
                                        <span class="ciename">Friends with Benefits</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="20" style="display: none;">
                                <a href="javascript:void(0);" name="25" page="1" id="20" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="21" id="ctspan21">
                                <li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Long.Road.Home.html">
                                        <img src="http://i4.cfimg.com/588755/318233015e128740.jpg" alt="漫长归途">
                                        <span class="cicname">漫长归途</span>
                                        <span class="ciename">The Long Road Home</span>
                                    </a>
                                </li><li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/Valor.html">
                                        <img src="http://i4.fuimg.com/588755/7911fb3080780903.jpg" alt="勇者">
                                        <span class="cicname">勇者</span>
                                        <span class="ciename">Valor</span>
                                    </a>
                                </li><li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/1864.html">
                                        <img src="http://i1.piimg.com/588755/a0dcc178d40f50c5.jpg" alt=" 1864年普丹战争">
                                        <span class="cicname"> 1864年普丹战争</span>
                                        <span class="ciename">1864</span>
                                    </a>
                                </li><li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/My.Mother.And.Other.Strangers.html">
                                        <img src="http://i1.piimg.com/588755/5515667b928f9c8e.jpg" alt="母亲与陌生人">
                                        <span class="cicname">母亲与陌生人</span>
                                        <span class="ciename">My Mother And Other Strangers</span>
                                    </a>
                                </li><li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/Mercy.Street.html">
                                        <img src="http://i4.buimg.com/588755/06157184ba6fcfd7.jpg" alt="怜悯之街">
                                        <span class="cicname">怜悯之街</span>
                                        <span class="ciename">Mercy Street</span>
                                    </a>
                                </li><li model="21" style="display: none;">
                                    <a target="_blank" href="/meiju/Parades.End.html">
                                        <img src="http://i1.piimg.com/588755/4ab1ecd31737c0f9.jpg" alt="队列之末">
                                        <span class="cicname">队列之末</span>
                                        <span class="ciename">Parades End</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="21" style="display: none;">
                                <a href="javascript:void(0);" name="26" page="1" id="21" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="22" id="ctspan22">
                                <li model="22" style="display: none;">
                                    <a target="_blank" href="/meiju/Lonesome.Dove.html">
                                        <img src="http://i2.muimg.com/588755/d95f018554d69b9b.jpg" alt="寂寞之鸽">
                                        <span class="cicname">寂寞之鸽</span>
                                        <span class="ciename">Lonesome Dove</span>
                                    </a>
                                </li><li model="22" style="display: none;">
                                    <a target="_blank" href="/meiju/The.Amazing.Race.Australia.html">
                                        <img src="http://i2.muimg.com/588755/4a6fc2846e95ff5c.jpg" alt="极速前进澳洲版">
                                        <span class="cicname">极速前进澳洲版</span>
                                        <span class="ciename">The Amazing Race Australia</span>
                                    </a>
                                </li><li model="22" style="display: none;">
                                    <a target="_blank" href="/meiju/Noble.House.1988.html">
                                        <img src="http://i4.buimg.com/588755/a16b50517e8e559f.jpg" alt="洋行">
                                        <span class="cicname">洋行</span>
                                        <span class="ciename">Noble House 1988</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="22" style="display: none;">
                                <a href="javascript:void(0);" name="27" page="1" id="22" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div><div class="catespan" model="23" id="ctspan23">
                                <li model="23" style="display: none;">
                                    <a target="_blank" href="/meiju/Godless.html">
                                        <img src="http://i4.cfimg.com/588755/1f11bf7b9f8f56cf.jpg" alt="无神">
                                        <span class="cicname">无神</span>
                                        <span class="ciename">Godless</span>
                                    </a>
                                </li>                        </div>
                            <div class="reflash" model="23" style="display: none;">
                                <a href="javascript:void(0);" name="28" page="1" id="23" ectype="reflash">换一批<img alt="换一批" src="http://i4.piimg.com/588755/2b307c361a6103a5.png"></a>
                            </div>                </ul>
                    </div>
                </div>
                <div class="secright">
                    <div class="secrgtit">
                        今日下载排行
                    </div>
                    <ul class="secrgdiv">
                        <li>
                            <a target="_blank" href="/seed/91805.html">生活大爆炸 The Big Bang Theory  S11E07 720p </a>
                            <span class="dwsum">下载量:3682</span>
                        </li><li>
                            <a target="_blank" href="/seed/91807.html">小谢尔顿 Young Sheldon S01E03 720p </a>
                            <span class="dwsum">下载量:2174</span>
                        </li><li>
                            <a target="_blank" href="/seed/91819.html">绿箭侠 Arrow  S06E05 720p </a>
                            <span class="dwsum">下载量:1543</span>
                        </li><li>
                            <a target="_blank" href="/seed/91872.html">哥谭 Gotham  S04E08 720p 深影字幕组</a>
                            <span class="dwsum">下载量:1432</span>
                        </li><li>
                            <a target="_blank" href="/seed/91804.html">生活大爆炸 The Big Bang Theory  S11E07 </a>
                            <span class="dwsum">下载量:1219</span>
                        </li><li>
                            <a target="_blank" href="/seed/91799.html">哥谭 Gotham  S04E08 720p </a>
                            <span class="dwsum">下载量:1161</span>
                        </li><li>
                            <a target="_blank" href="/seed/91836.html">越南战争 The Vietnam War S01E01 纪录片之家</a>
                            <span class="dwsum">下载量:1134</span>
                        </li><li>
                            <a target="_blank" href="/seed/91803.html">邪恶力量 Supernatural  S13E05 720p </a>
                            <span class="dwsum">下载量:1038</span>
                        </li><li>
                            <a target="_blank" href="/seed/91801.html">实习医生格蕾 Greys Anatomy  S14E07 720p </a>
                            <span class="dwsum">下载量:958</span>
                        </li><li>
                            <a target="_blank" href="/seed/91823.html">逍遥法外 How to Get Away with Murder  S04E07...</a>
                            <span class="dwsum">下载量:950</span>
                        </li>                </ul>        </div>
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
