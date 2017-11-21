<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'admin/bower_components/font-awesome/css/font-awesome.min.css',
        'admin/bower_components/Ionicons/css/ionicons.min.css',
        'admin/dist/css/AdminLTE.min.css',
        'admin/dist/css/skins/_all-skins.min.css',
        'admin/bower_components/morris.js/morris.css',
        'admin/bower_components/jvectormap/jquery-jvectormap.css',
        'admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'admin/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        'admin/bower_components/jquery-ui/jquery-ui.min.js',
        'admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'admin/bower_components/raphael/raphael.min.js',
        'admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',
        'admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'admin/bower_components/jquery-knob/dist/jquery.knob.min.js',
        'admin/bower_components/moment/min/moment.min.js',
        'admin/bower_components/bootstrap-daterangepicker/daterangepicker.js',
        'admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        'admin/bower_components/fastclick/lib/fastclick.js',
        'admin/dist/js/adminlte.min.js',
        'admin/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
