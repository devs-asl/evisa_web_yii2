<?php


namespace common\assets;


use yii\web\AssetBundle;

class DefaultDashboardAssetBundle extends AssetBundle
{
    public $sourcePath = '@common/scripts';

    public $css = [
        //   Theme Plugins

        'css/dashboard/plugins/global/plugins.bundle.css',
        'css/dashboard/plugins/custom/prismjs/prismjs.bundle.css',

        //        GLOBAL style

        'css/dashboard/theme/style.bundle.css',
        'css/dashboard/plugins/custom/fullcalendar.bundle.css',

    ];

    public $js = [
        //        Theme Plugin
        'js/dashboard/theme/plugins.bundle.js',
        'js/dashboard/plugins/custom/prismjs/prismjs.bundle.js',
        'js/dashboard/theme/scripts.bundle.js',
//        'js/dashboard/plugins/widgets/widgets.min.js',
//        'js/dashboard/plugins/custom/fullcalendar.bundle.js',
    ];

}