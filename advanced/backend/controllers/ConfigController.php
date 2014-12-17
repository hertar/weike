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
class ConfigController extends Controller
{
    /**
     * @inheritdoc
     */

        //全局变量
    public function actionQuanju()
    {
        return $this->renderPartial('quanju');
    }
    //基本配置
    public function actionConf(){
        
        return $this->renderPartial('conf');
    }
    
    //SEO配置
    public function actionSeo(){
        return $this->renderPartial('seo');
    }
    //邮件配置
    public function actionMail(){
        
        return $this->renderPartial("mail");
    }

    //模型管理(任务模型)
    public function actionModel(){
                return $this->renderPartial('model');
        }
     //商业模型
     public function actionModel_shop(){
         
         return $this->renderPartial("model_shop");
     }
     


     //会员整合
        public function actionIntegration(){
                return $this->renderPartial('integration');
        }

        //自定义导航
         public function actionNav()
    {
        return $this->renderPartial('nav');
    }

        //汇率配置
    public function actionCurrencies(){
                return $this->renderPartial('currencies');
     }
     //信誉规则
     public function actionMark(){
         return $this->renderPartial("mark");
     }
     //添加信誉
     public function actionMark_edit(){
         return $this->renderPartial("mark_edit");
     }
     //互评配置
     public function actionMark_config(){
         return $this->renderPartial("mark_config");
     }
     //互评记录
     public function actionMark_log(){
         return $this->renderPartial("mark_log");
     }
     
}
