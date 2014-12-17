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
class AuthController extends Controller
{
    /**
     * @inheritdoc
     */

//企业认证
    public function actionEnterprise()
    {
        return $this->renderPartial('enterprise');
    }

//银行认证
    public function actionBank(){
                return $this->renderPartial('bank');
        }
        
        
//实名认证
        public function actionRealname(){
                return $this->renderPartial('realname');
        }

//邮箱认证
        public function actionEmail(){
                return $this->renderPartial('email');
        }
        
//手机认证
         public function actionMobile(){
                return $this->renderPartial('mobile');
        }
//认证项目
         public function actionItem_list(){
                return $this->renderPartial('item_list');
        }
}
