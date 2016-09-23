<?php

namespace shmilyzxt\geetest;
use shmilyzxt\geetest\lib\GeetestLib;
use yii\helpers\Html;

/**
 * This is just an example.
 */
class GeetestWidget extends \yii\base\Widget
{
    public $type;

    public $options = [];

    public function run()
    {
        $view = $this->getView();

        if($this->type == 'popup'){//弹出式
            $view->registerAssetBundle('shmilyzxt\geetest\GeetestPopupAsset');
            return $this->render("pcpop");
        }elseif ($this->type == 'embed'){//嵌入式
            $view->registerAssetBundle('shmilyzxt\geetest\GeetestEmbedAsset');
            return $this->render("embed");
        }elseif ($this->type == 'mobile'){//移动弹出式
            $view->registerAssetBundle('shmilyzxt\geetest\GeetestEmbedAsset');
            return $this->render("embed");
        }else{
            $view->registerAssetBundle('shmilyzxt\geetest\GeetestEmbedAsset');
            return $this->render("mobile");
        }
    }

    public function getViewPath(){
        return "@vendor/shmilyzxt/yii2-geetest/views/geetest";
    }
}
