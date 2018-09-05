<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    
    // ...
    
    'aliases' => [
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@yarn'   => '@app/node_modules',
    ],
    'components' => [
        // ...
        'assetManager' => [
            'bundles' => array_merge(
                require(__DIR__ . '/assets-default.php'),
            ),
        ],
    ],
    'params' => $params,
];

// ...

return $config;
