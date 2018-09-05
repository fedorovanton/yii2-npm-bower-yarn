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
