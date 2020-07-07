<?php


namespace common\assets;


use yii\web\AssetBundle;

class MultistepFormAssetBundle extends AssetBundle
{
    public $sourcePath = '@common/scripts';

    public $css = [
        //   Multi Step Form Style

        'css/dashboard/theme/wizard-2.min.css',
//        'css/dashboard/plugins/custom/uppy/uppy.bundle.css'

    ];

    public $js = [
        //   Multi Step Form Style

        'js/dashboard/theme/wizard-2.min.js',
        'js/dashboard/theme/bootstrap-datepicker.min.js',
//        'js/dashboard/plugins/custom/uppy/uppy.bundle.js',
//        'js/dashboard/plugins/custom/uppy.js'

    ];
}