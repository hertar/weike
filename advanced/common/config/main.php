<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
	'bootstrap' => ['debug'],
    'modules' => [
        'debug' => 'yii\debug\Module',
    ],
	'defaultRoute' => 'index/index',
];
