<?php
namespace common\helpers;


use Aws\Result;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;

use Yii;
use yii\db\Exception;

class S3BucketHelper
{

    private static $connection;

    public static function connect()
    {
        $region = Yii::$app->params['s3.aws_default_region'];
        $version = Yii::$app->params['s3.version'];
        $accessKey = Yii::$app->params['s3.aws_access_key_id'];
        $accessKeySecret = Yii::$app->params['s3.aws_secret_access_key'];
//        $region = Yii::$app->params['s3.aws_default_region'];
//        $accessKey = Yii::$app->params['s3.aws_access_key_id'];
//        $accessKeySecret = Yii::$app->params['s3.aws_secret_access_key'];

        try{
            static::$connection = new S3Client([
                'region' => $region,
                'version' => $version,
                'credentials' => [
                    'key' => $accessKey,
                    'secret' => $accessKeySecret
                ]
            ]);

            return static::$connection;

        }catch (\Exception $e){
            throw new \Exception("Cannot connect to S3BucketHelper.".$e);
        }
    }



    public static function saveToS3($data, $model=null, $fileParam=null, $core=true, $extraValues= null )
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


            $path = Yii::$app->params['s3.path'];


            $bucket = $public = null;
            $priorFolder = ($core) ? "core" : "additional";
            $result = static::connect()->putObject([
                'Bucket' => ($bucket == null) ? Yii::$app->params['s3.aws_bucket'] : $bucket,
                'Key' => "asl-project/app_logs"."/{$month}/{$day}/{$priorFolder}/{$file}",
                'Body' => '<?php '.print_r($saveData, true),
                'ACL'  => ($public==true)?'public-read':"private",
            ]);

//            var_dump($saveData);


            return $fileKey;


        }catch (S3Exception $e){
            // $transaction->rollBack();
            throw new \Exception("S3 put Failed:". $e->getMessage());
        }
        catch (\Exception $e)
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