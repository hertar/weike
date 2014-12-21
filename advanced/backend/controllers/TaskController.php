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
		if(isset($_GET['c'])){
			//echo '<pre>';print_r($_POST);die;
			$start=isset($_GET['start'])?$_GET['start']:0;
			$page_size=isset($_POST['page_size'])?$_POST['page_size']:10;$page='';
			$indus_id='';
			if(!empty($_POST['indus_id'])){
				$indus_id='indus_id = '.$_POST['indus_id'].' and ';
			}
			//$data['skill']=Skill::find()->where($indus_id."skill_name like '%".$_POST['skill_name']."%'")->orderby($_POST['order']." ".$_POST['desc'])->limit($_POST['page_size'])->all();
			$sql=isset($_POST['page_size'])?"select * from wk_witkey_skill where ".$indus_id." skill_name like '%".$_POST['skill_name']."%' order by ".$_POST['order']." ".$_POST['desc']." limit ".$start.",".$page_size:'select * from wk_witkey_skill limit '.$start.','.$page_size;
			$data['skill']=Skill::findBySql($sql)->all();
			$count=isset($_POST['page_size'])?Skill::findBySql($sql)->count():Skill::find()->count();
			for($i=1;$i<ceil($count/$page_size);$i++)
			{
				$p=$page_size*($i-1)+1;
				$page.="<a href='index.php?r=task/skill&start=".$p."&c='>".$i.'</a>';
			}
			$data['page']=$page;
			if(isset($_POST['page_size'])){
				$data['condition']=$_POST;
			}
		}else{
			$start=isset($_GET['start'])?$_GET['start']:0;
			$page_size=10;$page='';
			$count=Skill::find()->count();
			//$data['skill']=Skill::find()->joinWith('join')->limit($page_size)->all();
			$sql='select * from wk_witkey_skill limit '.$start.','.$page_size;
			$data['skill']=Skill::findBySql($sql)->all();
			for($i=1;$i<ceil($count/$page_size);$i++)
			{
				$p=$page_size*($i-1)+1;
				$page.="<a href='index.php?r=task/skill&start=".$p."&c='>".$i.'</a>';
			}
			$data['page']=$page;
		}
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
		//echo '<pre>';print_r($_POST);die;
		$model = new Skill();
		$_POST['fs']['on_time']=time();
		foreach($_POST['fs'] as $k => $v){
				$model->$k=$v;
		}
		if($model->insert())
		{
			echo "<script>location.href='index.php?r=task/".$_POST['submit']."'</script>";
		}
	}

	//技能编辑
    public function actionSkilledit(){
		//echo '<pre>';print_r($_POST);die;
		if(Skill::updateAll($_POST['fs'],['skill_id'=>$_POST['pk']['skill_id']]))
		{
			echo "<script>location.href='index.php?r=task/".$_POST['submit']."'</script>";
		}
	}

	//删除技能
    public function actionSkilldel(){
		//echo '<pre>';print_r($_POST);die;
		$id=isset($_GET['id'])?$_GET['id']:implode(',',$_POST['ckb']);
		if(Skill::deleteAll("skill_id in ($id)"))
		{
			echo "<script>location.href='index.php?r=task/skill'</script>";
		}
	}
      
}
