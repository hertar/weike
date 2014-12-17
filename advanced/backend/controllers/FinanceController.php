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
class FinanceController extends Controller
{
    /**
     * @inheritdoc
     */

     /*
      * 财务概况
      */
     public function actionRevenue(){
         return $this->renderPartial("revenue");
     }
    /*
      * 财务明细
      */
     public function actionDetail(){
         return $this->renderPartial("detail");
     }
    /*
      * 财务分析
      */
     public function actionReport(){
         return $this->renderPartial("report");
     }
    /*
      * 充值审核
      */
     public function actionRecharge(){
         return $this->renderPartial("recharge");
     }
    /*
      * 提现审核
      */
     public function actionWithdraw(){
         return $this->renderPartial("withdraw");
     }
    
}
