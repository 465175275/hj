<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a0b2fb0dc6d59e75b3754ed5bc86bb6a";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<script src="/assets/88b1d8db/jquery.js"></script>
<style>
    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .fa-search:before {

    }
</style>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '时光美剧',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '影评资讯', 'url' => ['/site/news']],
        ['label' => '排行榜', 'url' => ['/site/leaderboards']],
        ['label' => '关于时光', 'url' => ['/site/about']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    $menuItems[] = '<li>
                     <form class="navbar-form navbar-right" action="/index.php?r=site%2Fleaderboards" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="name" value="'.(isset($_GET["name"]) ? $_GET["name"] : "").'" placeholder="全站搜索">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-search">搜索</i>
                    </button>
                </span>
            </div>
          </form>
                    </li>';

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
    $(".download_meiju").click(function(){
        var mid=$(this).data("mid");
        var did=$(this).data("did");
        $.post("/index.php?r=site%2Fmeiju-click",
            { mid:mid,did:did },
            function(data, textStatus){
                console.log(data);
            }, "json"
        );
    })

    $(".subscription_meiju").click(function(){
        var mid=$(this).data("mid");
        var type=$(this).data("type");
        $.post("/index.php?r=site%2Fmeiju-subscription",
            { mid:mid,type:type },
            function(data, textStatus){
                console.log(data);
                if(data=='1'){
                    $(".subscription_meiju").hide();
                }
            }, "json"
        );
    })


</script>
