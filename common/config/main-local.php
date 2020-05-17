<?php
return [
    'components' => [
//        'db' => [
//            'class' => 'yii\db\Connection',
//            'dsn' => 'mysql:host=localhost;dbname=evisa',
//            'username' => 'root',
//            'password' => '',
//            'charset' => 'utf8',
//        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=devs-db.cl0j9h0z9kwc.ap-southeast-1.rds.amazonaws.com;dbname=dev_evisa',
            'username' => 'devs',
            'password' => 'devsdb&2019',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mailtrap.io',
                'username' => '802fff7bccb8e4',
                'password' => 'd4c90dc0c44e29',
                'port' => '2525',
                'encryption' => 'tls',
            ],
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
    ],
];
