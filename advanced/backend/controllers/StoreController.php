<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;


class StoreController extends Controller
{
    /**
     * @inheritdoc
     */
    //店铺管理
    //店铺列表
    public function actionStore_list(){
        return $this->renderPartial("store_list");
    }
    
    /*
     * 威客作品
     */
    
    //订单管理
    public function actionOrder(){
        return $this->renderPartial("order");
    }
    //作品管理
    public function actionWorks(){
        return $this->renderPartial("works");
    }
    
    //作品配置
    public function actionWorks_config(){
        return $this->renderPartial("works_config");
    }
    //流程配置
    public function actionWorks_control(){
        return $this->renderPartial("works_control");
    }
    
    //威客服务
    //订单管理
public function actionServer_order(){
    return $this->renderPartial("server_order");
}
//服务管理
    public function actionServer(){
        return $this->renderPartial("server");
    }
    //服务配置
    public function actionServer_config(){
        return $this->renderPartial("server_config");
    }
    //流程配置
    public function actionServer_control(){
        return $this->renderPartial("server_control");
    }
}
