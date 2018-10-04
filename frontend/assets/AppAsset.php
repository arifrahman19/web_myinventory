<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "css/font-awesome.css",
        "css/skdslider.css",
    ];
    public $js = [
        "js/jquery-1.11.1.min.js",
        "js/move-top.js",
        "js/easing.js",
        "js/skdslider.min.js",
        "js/minicart.min.js",
        "js/bootstrap.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
