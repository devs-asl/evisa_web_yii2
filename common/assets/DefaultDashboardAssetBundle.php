<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 23/6/20
 * Time: 1:35 PM
 */

namespace common\assets;


use yii\web\AssetBundle;

class DefaultDashboardAssetBundle extends AssetBundle
{
    public $sourcePath = '@common/scripts';

    public $css = [
        //       Page Custom Style

        'css/dashboard-theme/wizard-2.min.css',

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

        //   Page Custom Style

        'js/dashboard-theme/wizard-2.min.js',


        //        Theme Plugin

        'js/dashboard-plugins-js/custom/prismjs/prismjs.bundle.js',


    ];

}