<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'css/global.css',
//        'css/bootstrap-table.css',

//        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
//        'css/metro/font-awesome/css/font-awesome.min.css',
//        'css/metro/simple-line-icons/simple-line-icons.min.css',
//        'css/metro/uniform/css/uniform.default.css',
//        'css/metro/select2/select2.css',
//        'css/metro/login-soft.css',
//        'css/metro/components.css',
//        'css/metro/plugins.css',
//        'css/metro/layout.css',
//        'css/metro/darkblue.css',
//        'css/metro/custom.css',
    ];
    public $js = [
//        'js/bootstrap-table.js',
//        'js/metro/jquery.min.js',
//        'js/metro/jquery-migrate.min.js',
//        'js/metro/jquery.blockui.min.js',
//        'js/metro/uniform/jquery.uniform.min.js',
//        'js/metro/jquery.cokie.min.js',
//        'js/metro/jquery-validation/js/jquery.validate.min.js',
//        'js/metro/backstretch/jquery.backstretch.min.js',
//        'js/metro/select2/select2.min.js',
//        'js/metro/metronic.js',
//        'js/metro/layout.js',
//        'js/metro/demo.js',
//        'js/metro/login-soft.js',
        'js/metro/global.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
