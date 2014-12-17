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
class ModelController extends Controller
{
    /**
     * @inheritdoc
     */
    //单人悬赏
    
    //任务列表
    public function actionSingle_task_list(){
        return $this->renderPartial("single_task_list");
    }
    
    //任务配置(基本配置)
    public function actionSingle_task_config(){
        return $this->renderPartial("single_task_config");
    }
     //流程配置
public function actionSingle_task_control(){
    return $this->renderPartial("single_task_control");
}
//权限配置
public function actionSingle_task_priv(){
    return $this->renderPartial("single_task_priv");
}

/*
 * 多人悬赏任务
 */
//任务管理
    public function actionMany_task_list(){
        return $this->renderPartial("many_task_list");
    }
    
    //任务配置（基本配置）
      public function actionMany_task_config(){
        return $this->renderPartial("many_task_config");
    }
     //流程配置
    public function actionMany_task_control(){
         return $this->renderPartial("many_task_control");
    }
    //权限配置
    public function actionMany_task_priv(){
        return $this->renderPartial("many_task_priv");
    }
/*
 * 计件悬赏任务
 */
//任务管理
    public function actionJijian_task_list(){
        return $this->renderPartial("jijian_task_list");
    }
    
    //任务配置（基本配置）
      public function actionJijian_task_config(){
        return $this->renderPartial("jijian_task_config");
    }
     //流程配置
    public function actionJijian_task_control(){
         return $this->renderPartial("jijian_task_control");
    }
    //权限配置
    public function actionJijian_task_priv(){
        return $this->renderPartial("jijian_task_priv");
    }
    
    //普通招标
    //任务管理
    public function actionNormal_task_list(){
        return $this->renderPartial("normal_task_list");
    }
    
    //任务配置（基本配置）
      public function actionNormal_task_config(){
        return $this->renderPartial("normal_task_config");
    }
     //流程配置
    public function actionNormal_task_control(){
         return $this->renderPartial("normal_task_control");
    }
    //权限配置
    public function actionNormal_task_priv(){
        return $this->renderPartial("normal_task_priv");
    }
    
    //订金招标
    
        //任务管理
    public function actionDeposit_task_list(){
        return $this->renderPartial("deposit_task_list");
    }
    
    //任务配置（基本配置）
      public function actionDeposit_task_config(){
        return $this->renderPartial("deposit_task_config");
    }
     //流程配置
    public function actionDeposit_task_control(){
         return $this->renderPartial("deposit_task_control");
    }
    //权限配置
    public function actionDeposit_task_priv(){
        return $this->renderPartial("deposit_task_priv");
    }
}
