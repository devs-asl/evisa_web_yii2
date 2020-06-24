<?php


namespace common\assets;


use yii\web\AssetBundle;

class DefaultDashboardAssetBundle extends AssetBundle
{
    public $sourcePath = '@common/scripts';

    public $css = [
        //   Theme Plugins

        'css/dashboard-plugins-css/global/plugins.bundle.css',
        'css/dashboard-plugins-css/custom/prismjs/prism.bundle.css',

        //        GLOBAL style

        'css/dashboard-theme/style.bundle.min.css',
        'css/dashboard-theme/header/base/light.min.css',
        'css/dashboard-theme/header/menu/light.min.css',
        'css/dashboard-theme/brand/dark.min.css',
        'css/dashboard-theme/aside/dark.min.css',



    ];

    public $js = [
        //        Theme Plugin
        'js/dashboard-theme/plugins.bundle.js',
        'js/dashboard-theme/scripts.bundle.js',
        'js/dashboard-plugins-js/custom/prismjs/prismjs.bundle.js',
        'js/dashboard-plugins-js/custom/widgets/widgets.min.js'
    ];

}