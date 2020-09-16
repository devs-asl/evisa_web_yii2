<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
//            'dsn' => 'mysql:host=192.168.30.16;dbname=evisa_dev',
//            'username' => 'pranta',
//            'password' => 'root',

            'dsn' =>'mysql:host=devs-db.cl0j9h0z9kwc.ap-southeast-1.rds.amazonaws.com;dbname=evisa',


            'username' => 'devs',
            'password' => 'devsdb&2019',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
