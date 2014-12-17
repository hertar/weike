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
class AppController extends Controller
{
    /**
     * @inheritdoc
     */

   // 应用中心
   public function actionApp_center(){
       return $this->renderPartial("app_center");
   }
   
   /*
    * 广场管理
    * 
    */
   //免费需求
   public function actionTask_list(){
       return $this->renderPartial("task_list");
   }
//免费服务
    public function actionService_list(){
        return $this->renderPartial("service_list");
    }
    //留言管理
    public function actionMessage_list(){
        return $this->renderPartial("message_list");
    }
    //动态管理
    public function actionWeibo_list(){
        return $this->renderPartial("weibo_list");
    }
    //举报管理
    public function actionDenounce_list(){
        return $this->renderPartial("denounce_list");
    }
}
