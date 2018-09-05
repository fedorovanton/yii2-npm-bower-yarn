# yii2-npm-bower-yarn
Подключение и настройка npm, bower, yarn в Yii2 (basic)

Добавить алиасы в /config/web.php:
~~~
...

'aliases' => [
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@yarn'   => '@app/node_modules',
],

...
~~~

Там же в массив components добавить:

~~~
...

'assetManager' => [
            'bundles' => array_merge(
                require(__DIR__ . '/assets-default.php'),
            ),
        ],
    
...
~~~

Создать файл assets-default.php:

~~~
<?php
return [
    'yii\web\JqueryAsset' => [
        'sourcePath' => '@npm/jquery/dist',
        'js' => [
            'jquery.js',
        ],
    ],
    'yii\bootstrap\BootstrapAsset' => [
        'sourcePath' => '@npm/bootstrap/dist',
        'css' => [
            'css/bootstrap.css',
        ],
    ],
    'yii\bootstrap\BootstrapPluginAsset' => [
        'sourcePath' => '@npm/bootstrap/dist',
        'js' => [
            'js/bootstrap.js',
        ],
    ],
    'yii\bootstrap\BootstrapThemeAsset' => [
        'sourcePath' => '@npm/bootstrap/dist',
        'css' => [
            'css/bootstrap-theme.css',
        ],
    ],
~~~
  
### Установка yarn

https://yarnpkg.com/lang/en/

### Установка npm

https://www.npmjs.com

### Установка bower
    
https://bower.io
    
