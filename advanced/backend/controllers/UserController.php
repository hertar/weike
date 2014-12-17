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
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
//用户管理
    //用户列表
    public function actionUser_list(){
        return $this->renderPartial("user_list");
    }
    //添加用户
    public function actionUser_add(){
        return $this->renderPartial("user_add");
    }
    /*
      * 手动充值
      */
     public function actionCharge(){
         return $this->renderPartial("charge");
     }
     
     //用户组
     public function actionCustom_list(){
         
         return $this->renderPartial("custom_list");
     }
   //添加用户组
   public function actionCustom_add(){
       return $this->renderPartial("custom_add");
   }
//系统组管理
    public function actionGroup_list(){
        return $this->renderPartial("group_list");
    }
    //系统组添加
    public function actionGroup_add(){
        return $this->renderPartial("group_add");
    }
    //建议投诉
    public function actionSuggest(){
        return $this->renderPartial("suggest");
    }
}
