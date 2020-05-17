<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-client',
    'name' => 'eVisa | Bangladesh',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'client\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-client',
            'enableCookieValidation' => false,
//            'cookieValidationKey' => 'wNYLL2eYAxIYjJuQF447K0aT-TZ52ulXs'
        ],
        'user' => [
            'identityClass' => 'common\models\db\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-auth', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the test
            'name' => 'advanced-auth',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',

                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',

                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
    ],

    'params' => $params,
];
