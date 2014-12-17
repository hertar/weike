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
class TransController extends Controller
{
    /**
     * @inheritdoc
     */

    //交易维权
    public function actionRights(){
        
        return $this->renderPartial("rights");
    }
    //交易举报
    public function actionReport(){
        return $this->renderPartial("report");
    }
   
}
