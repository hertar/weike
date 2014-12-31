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
     'components' => [
    'cache' => [
        'class' => '\yii\caching\MemCache',
        'servers' => [
            [
                'host' => '192.168.1.154',
                'port' => 11211,
                'weight' => 100,
            ],
            
        ],
    ],
],
];
