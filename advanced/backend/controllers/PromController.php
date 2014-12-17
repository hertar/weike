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
class PromController extends Controller
{
    /**
     * @inheritdoc
     */

//推广配置管理
    public function actionConfig()
    {
        return $this->renderPartial('config');
    }
    //发布推广
    public function actionPub_task(){
        return $this->renderPartial("pub_task");
    }
    
    //任务承接
    public function actionBid_task(){
        return $this->renderPartial("bid_task");
    }
//商品宣传
    public function actionService(){
        return $this->renderPartial("service");
    }

//推广关系管理
    public function actionRelation(){
                return $this->renderPartial('relation');
        }
        
        
//推广财务管理
     
        public function actionEvent(){
                return $this->renderPartial('event');
        }


}
