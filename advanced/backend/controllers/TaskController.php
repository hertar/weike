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
class TaskController extends Controller
{
    /**
     * @inheritdoc
     */

        //行业管理(行业列表)
    public function actionIndustry()
    {
        return $this->renderPartial('industry');
    }
    //行业添加
    public function actionIndustry_edit(){
        return $this->renderPartial("industry_edit");
    }
    
    //行业合并
    public function actionUnion_industry(){
        
        return $this->renderPartial("union_industry");
    }

    //技能管理
    public function actionSkill(){
                return $this->renderPartial('skill');
    }
    //技能添加
    public function actionSkill_edit(){
        
        return $this->renderPartial("skill_edit");
    }
      
}
