<?php
/**
 * Created by PhpStorm.
 * User: zhenxiaotao
 * Date: 2016/8/26
 * Time: 14:35
 */

namespace shmilyzxt\geetest;


class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'shmilyzxt\geetest\controllers';
    
    public $geetestId;
    
    public $geetestKey;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}