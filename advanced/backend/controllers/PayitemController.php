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
class PayitemController extends Controller
{
    /**
     * @inheritdoc
     */

        //服务项目
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    //威客
    public function actionWitkey(){
        return $this->renderPartial("witkey");
    }
    //雇主
    public function actionEmployer(){
        return $this->renderPartial("employer");
    }

    //购买记录
    public function actionBuy(){
                return $this->renderPartial('buy');
     }

}
