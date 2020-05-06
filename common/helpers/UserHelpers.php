<?php
namespace common\helpers;

use common\models\db\User;
use Yii;
use yii\web\HttpException;

class UserHelpers
{
    public static function getUserId()
    {
        return Yii::$app->user->identity->id;
    }

    public static function getUserRoleId()
    {
        return Yii::$app->user->identity->role_id;
    }

    public static function getCurrentUserModule()
    {
        if (Yii::$app->user->isGuest)
        {
            $message = 'Error you are not logged in';
            throw new HttpException(403, $message);
        }
        $userRole = UrlHelpers::getLoggedInUserModule();
        return $userRole;
    }

    public static function getRoleBaseUrl()
    {
        $module = self::getCurrentUserModule();
        if($module == null)
        {
            return null;
        }

        $url = UrlHelpers::url("/");
        $url = str_replace("/auth", "/".$module, $url);

        return $url;
    }


    public static function redirectToLoggedInUsersMod()
    {
        $url = self::getRoleBaseUrl();

        return Yii::$app->response->redirect($url);
    }


}