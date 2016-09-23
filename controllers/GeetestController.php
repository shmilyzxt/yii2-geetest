<?php
/**
 * Created by PhpStorm.
 * User: zhenxiaotao
 * Date: 2016/8/26
 * Time: 14:29
 */

namespace shmilyzxt\geetest\controllers;


use shmilyzxt\geetest\lib\GeetestLib;
use yii\web\Controller;

class GeetestController extends Controller
{
    public function actionIndex(){
        echo "here";die;
    }
    
    public function actionPcpop(){
       return $this->renderAjax("pcpop");
    }

    public function actionStartcaptchaservlet(){
        $lib = new GeetestLib($this->module->geetestId,$this->module->geetestKey);

        \Yii::$app->session->open();

        $user_id = "test";
        $status = $lib->pre_process($user_id);
        $_SESSION['gtserver'] = $status;
        $_SESSION['user_id'] = $user_id;
        echo $lib->get_response_str();
    }

    public function actionVerifyloginservlet(){
        /**
         * 输出二次验证结果,本文件示例只是简单的输出 Yes or No
         */
        // error_reporting(0);
        if($_POST['type'] == 'pc'){
            $GtSdk = new GeetestLib($this->module->geetestId, $this->module->geetestKey);
        }elseif ($_POST['type'] == 'mobile') {
            //$GtSdk = new GeetestLib(MOBILE_CAPTCHA_ID, MOBILE_PRIVATE_KEY);
        }

        $user_id = $_SESSION['user_id'];
        if ($_SESSION['gtserver'] == 1) {   //服务器正常
            $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $user_id);
            if ($result) {
                echo '{"status":"success"}';
            } else{
                echo '{"status":"fail"}';
            }
        }else{  //服务器宕机,走failback模式
            if ($GtSdk->fail_validate($_POST['geetest_challenge'],$_POST['geetest_validate'],$_POST['geetest_seccode'])) {
                echo '{"status":"success"}';
            }else{
                echo '{"status":"fail"}';
            }
        }
    }
}