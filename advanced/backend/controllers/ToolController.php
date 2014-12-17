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
class ToolController extends Controller
{
    /**
     * @inheritdoc
     */

//清缓存
    public function actionCache()
    {
        return $this->renderPartial('cache');
    }
//pv统计
    public function actionPv(){
         return $this->renderPartial('pv');
    }
    
    //广告管理
    public function actionAd(){
        return $this->renderPartial("ad");
    }
//广告列表
    public function actionAd_list(){
        return $this->renderPartial("ad_list");
    }
}
