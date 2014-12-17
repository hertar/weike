<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class MsgController extends Controller
{
    /**
     * @inheritdoc
     */
    //oauth登录(微博)
    public function actionWeibo(){
                return $this->renderPartial('weibo');
     }
     //微博关注
     public function actionAttention(){
         return $this->renderPartial("attention");
     }
//地图接口
    public function actionMap(){
            return $this->renderPartial('map');
    }
    //短信接口(账号管理)
    public function actionConfig(){
        return $this->renderPartial('config');
    }
    //短信发送
    public function actionSend(){
        return $this->renderPartial("send");
    }


    //短信模板(模板列表)
    public function actionInternal(){
        
        return $this->renderPartial('internal');
    }
    //模板编辑
    public function actionIntertpl(){
        return $this->renderPartial("intertpl");
    }


    //支付接口
    public function actionPay(){
        
        return $this->renderPartial('pay');
    }
    
    //在线支付
    public function actionPay_online(){
        return $this->renderPartial("pay_online");
    }
    //线下接口
    public function actionPay_offline(){
        return $this->renderPartial("pay_offline");
    }
}
