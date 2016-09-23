<?php
/**
 * Created by PhpStorm.
 * User: zhenxiaotao
 * Date: 2016/8/26
 * Time: 14:13
 */

namespace shmilyzxt\geetest;


use yii\web\AssetBundle;

class GeetestPopupAsset extends AssetBundle
{
    public $sourcePath = '@shmilyzxt/geetest/assets/';

    public $css = [];

    public $js = [
        'js/gt.js',
        'js/popup.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}