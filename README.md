# yii2-npm-bower-yarn

Данная инструкция поможет подключить сборщики пакетов и зависимостей npm, bower, yarn в Yii2.

## Настройка для Yii2 (basic). 

1. Добавить алиасы в /config/web.php:
~~~
...

'aliases' => [
        '@bower'  => '@vendor/bower-asset',
        '@npm'    => '@vendor/npm-asset',
        '@yarn'   => '@app/node_modules',
],

...
~~~

2. Там же в массив components добавить:

~~~
...

'assetManager' => ['bundles' => require(__DIR__ . '/assets-default.php')],
    
...
~~~

3. Создать файл /config/assets-default.php:

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

4. Создать собственный MyLibAsset в папке assets с помощью которого можно подключать любые библиотеки из соответсвующих зависимостей:

~~~
<?php
namespace app\assets;
use yii\web\AssetBundle;
class MyLibAsset extends AssetBundle
{
    public $sourcePath = '@yarn';
    public $css = [
        'font-awesome/css/font-awesome.min.css',
    ];
}
~~~

## Настройка для Yii2 (advanced). 

1. Алиасы для /common/config/main.php:
~~~
...

'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@yarn'  => '@common/node_modules',
    ],

...
~~~

2. Там же в массив components добавить:

~~~
...

'assetManager' => ['bundles' => require(__DIR__ . '/assets-default.php')],
    
...
~~~

3. Создать файл /common/config/assets-default.php:

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

4. Создать собственный MyLibAsset в папке /frontend/assets/ с помощью которого можно подключать любые библиотеки из соответсвующих зависимостей:

~~~
<?php
namespace frontend\assets;
use yii\web\AssetBundle;
class MyLibAsset extends AssetBundle
{
    public $sourcePath = '@yarn';
    public $css = [
        'font-awesome/css/font-awesome.min.css',
    ];
}
~~~

5. Например установка пакета fontawesome через Yarn:

- из root папки перейти в common: **$ cd common**
- добавление пакета fontawesome с помощью yarn: **$ yarn add font-awesome **

Появится папка /common/node_modules в которой будет /font-awesome.


### Установка yarn

https://yarnpkg.com/lang/en/

### Установка npm

https://www.npmjs.com

### Установка bower
    
https://bower.io
    
> Если будут вопросы пишите: 
> Telegram @fedorov_anton
