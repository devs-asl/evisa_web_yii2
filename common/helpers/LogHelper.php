<?php

namespace common\helpers;

use Yii;

class LogHelper
{
    public static function save($data, $model=null, $fileParam=null, $core=true, $extraValues= null)
    {
        try {
            $file = date("ymd_his");
            $fileKey = mt_rand(10000, 99999);
            $file .= $fileKey;
            $url = UrlHelpers::getCurrentUrl();
            $saveData = [
                'url' => $url,
                'isGuest' => Yii::$app->user->isGuest ? true : false,
            ];

            if ($saveData['isGuest'] == 0)
            {
                $saveData['userId'] = Yii::$app->user->id;
                $file .= '_id'.$saveData['userId'];
            }

            if($fileParam != null)
            {
                $file .= '_'.$fileParam;
            }

            $file .= '.txt';

            $saveData['errorData'] = $data;

            if($model != null)
            {
                $saveData['model'] = $model;
            }

            if($extraValues != null)
            {
                $saveData['extraValues'] = $extraValues;
            }

            $year = date('Y');
            $month = date('m');
            $day = date('d');
            $path = null;

            if($core)
            {
//                $path = Yii::getAlias('@common').'/app_logs/'."{$month}/{$day}/core/";
                $path = Yii::$app->params['app_logs.path'].'/app_logs'."/{$month}/{$day}/core/";
            }else{
//                $path = Yii::getAlias('@common').'/app_logs/'."{$month}/{$day}/additional/";
                $path = Yii::$app->params['app_logs.path'].'/app_logs'."/{$month}/{$day}/additional/";
            }

            if(!file_exists($path))
            {
                mkdir($path, 0777, true);
            }

            $fileStored = file_put_contents($path.$file, '<?php '.print_r($saveData, true));

            if(!$fileStored)
            {
                return null;
            }

            return $fileKey;


        }catch (\Exception $e)
        {
            echo $e->getMessage();
            echo PHP_EOL;
            echo $e->getFile();
            echo PHP_EOL;
            echo $e->getLine();
            echo PHP_EOL;
            echo PHP_EOL;
            echo PHP_EOL;
            echo $e;
            die();
        }
    }
}