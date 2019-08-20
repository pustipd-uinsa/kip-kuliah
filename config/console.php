<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests/codeception');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'db_siakad' => require(__DIR__ . '/db_siakad.php'),
        'db_simpeg' => require(__DIR__ . '/db_simpeg.php'),
        'db_ukt' => require(__DIR__ . '/db_ukt.php'),
 
        'authManager'  => [
            'class'        => 'yii\rbac\DbManager',
            

        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            
            // if using Gmail
            // turn on at less secure apps
            // https://www.google.com/settings/security/lesssecureapps
            // please set in params.php too
            'viewPath' => '@app/mail',
            'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>'smtp.gmail.com',
                'username'=>'bidikmisi@student.uinsby.ac.id',
                'password'=>'12345678',
                'port'=>'587',
                'encryption'=>'tls',
            ],
        ],    
      
        
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
