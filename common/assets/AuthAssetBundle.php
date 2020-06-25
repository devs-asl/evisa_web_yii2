<?php
namespace common\assets;

use yii\web\AssetBundle;

class AuthAssetBundle extends AssetBundle
{
//    public $sourcePath = '@common/scripts';
    public $css = [
        'css/site.css',
        'css/vendors.bundle.css',
        'css/style.bundle.css'
    ];

    public $js = [
        'js/vendors.bundle.js',
        'js/scripts.bundle.js'
    ];
}