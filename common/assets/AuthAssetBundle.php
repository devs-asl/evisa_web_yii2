<?php
namespace common\assets;

use yii\web\AssetBundle;

class AuthAssetBundle extends AssetBundle
{
    public $sourcePath = '@common/scripts';
    public $css = [
//        'css/site.css',
//        'css/vendors.bundle.css',
//        'css/style.bundle.css',

        'css/dashboard/theme/login-4.css',
        'css/dashboard/plugins/global/plugins.bundle.css',
        'css/dashboard/plugins/custom/prismjs/prismjs.bundle.css',
        'css/dashboard/theme/style.bundle.css'
    ];

    public $js = [
//        'js/vendors.bundle.js',
//        'js/scripts.bundle.js'


        'js/dashboard/theme/plugins.bundle.js',
        'js/dashboard/plugins/custom/prismjs/prismjs.bundle.js',
        'js/dashboard/theme/scripts.bundle.js',
        'js/dashboard/theme/pages/login-4.js'
    ];
}