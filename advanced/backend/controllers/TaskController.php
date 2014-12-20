<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\Industry;
use app\models\Skill;

/**
 * Site controller
 */
class TaskController extends Controller
{
	public $enableCsrfValidation=false;
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
		$data['indus']=Industry::find()->all();
		$data['skill']=Skill::find()->joinWith('join')->all();
		echo '<pre>';
		for($i=0;$i<count($data['skill']);$i++)
		{
			print_r($data['skill'][$i]);
		}
		die;
        return $this->renderPartial('skill',$data);
    }

    //技能信息（添加/编辑）
    public function actionSkill_edit(){
		$data['indus']=Industry::find()->all();
		$data['tag']='添加';
		$data['act']='skillinsert';
		if(isset($_GET['id'])){
			$id=intval($_GET['id']);
			$data['tag']='编辑';
			$data['act']='skilledit';
			$data['info']=Skill::findOne($id);
			//echo '<pre>';print_r($res);
		}
        return $this->renderPartial("skill_edit",$data);
    }

	//添加技能
    public function actionSkillinsert(){
		echo '<pre>';print_r($_POST);die;
	}

	//技能编辑
    public function actionSkilledit(){
		echo '<pre>';print_r($_POST);die;
	}

	//删除技能
    public function actionSkilldel(){
		echo '<pre>';print_r($_GET);die;
	}
      
}
