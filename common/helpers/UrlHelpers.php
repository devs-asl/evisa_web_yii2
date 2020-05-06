<?php

namespace common\helpers;

use Yii;
use common\models\db\UserRole;


class UrlHelpers
{
    public static function url($path, $absolute = false)
    {
        if($absolute)
        {
            return Yii::$app->urlManager->createAbsoluteUrl();
        }

        return Yii::$app->urlManager->createUrl($path);
    }

    public static function getBaseUrl($absolute = false)
    {
        return self::url('/', $absolute);
    }

    public static function baseUrlMetaTag()
    {
        echo '<meta name="base-url" content="'.self::getBaseUrl().'">';
    }

    public static function getLoggedInUserModule()
    {
        $userRole = UserRole::findOne(Yii::$app->user->identity->role_id)->name;
        switch ($userRole) {
            case 'admin':
                return 'admin';
            case 'client':
                return 'client';
        }
    }

    public static function getModule()
    {
        $module = ['admin', 'client'];

        $url = UrlHelpers::url("/");
        foreach ($module as $m)
        {
            if(strpos($url, $m) !== false)
            {
                return $m;
            }
        }
    }

    public static function getAuthUrl()
    {
        $mod = self::getModule();
        $url = UrlHelpers::url("/");
        $url = str_replace("/".$mod, "/"."auth", $url);
        return $url;
    }

    public static function redirectToAuthUrl()
    {
        $url = self::getAuthUrl();

        return Yii::$app->response->redirect($url);
    }

    public static function getCurrentUrl()
    {
        $url = null;
        if (isset($_SERVER['HTTP_HOST']) && isset($_SERVER['REQUEST_URI']))
        {
            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        }

        return $url;
    }
}