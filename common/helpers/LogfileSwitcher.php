<?php


namespace common\helpers;


class LogfileSwitcher
{
    public static function logfile_switcher($data, $model=null,  $fileParam=null, $fileLocation, $core=true, $extraValues= null)
    {
        switch ($fileLocation) {
            case 's3':
                S3BucketHelper::saveToS3($data, $model, $fileParam, $core, $extraValues);
                break;
            case 'local':
                LogHelper::save($data, $model, $fileParam, $core, $extraValues);
                break;
            default:
                LogHelper::save($data, $model, $fileParam, $core, $extraValues);
        }
    }
}