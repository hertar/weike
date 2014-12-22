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
		$where='';
		if(isset($_POST['submit'])){
			//echo '<pre>';print_r($_POST);die;
		$where=" where indus_name like '%".$_POST['indus_name']."%' order by ".$_POST['order']." ".$_POST['desc'];
			$data['condition']=$_POST;
		}
		$connection = Yii::$app->db;
		$sql = "SELECT * FROM wk_witkey_industry".$where;
		$command = $connection->createCommand($sql);
		$res= $command->queryAll();
		for($i=0;$i<count($res);$i++){
			if($res[$i]['indus_pid']==0){
				$sort[]=$res[$i];
				for($j=0;$j<count($res);$j++){
					if($res[$i]['indus_id']==$res[$j]['indus_pid']){
						$sort[]=$res[$j];
					}
				}
			}
		}
		$data['info']=$sort;
		//print_r($result);
        return $this->renderPartial('industry',$data);
    }

	// 添加/编辑		行业信息
    public function actionEdit(){
        //echo '<pre>';print_r($_POST);die;
		$flag=0;
		$transaction =Yii::$app->db->beginTransaction();
		try 
		{
			$i=1;
			foreach($_POST['name'] as $key=>$val)
			{
				Industry::updateAll(['indus_name'=>$val],['indus_id'=>$key]);
				if($i==count($_POST['name']))
				{
					if(isset($_POST['addtr']))
					{
						$flag=1;
					}
					else
					{
						echo "<script>location.href='index.php?r=task/".$_POST['submit']."'</script>";
					}
				}
				$i++;
			}
			if(isset($_POST['addtr']))
			{
				$i=1;
				$model = new Industry();
				foreach($_POST['addtr'] as $key=>$val)
				{
					$model->indus_pid=$key;
					$model->indus_name=$val;
					$model->on_time=time();
					$model->insert();
					if($i==count($_POST['addtr'])&&$flag=1)
					{
						echo "<script>location.href='index.php?r=task/".$_POST['submit']."'</script>";
					}
					$i++;
				}
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollBack();
			echo $e->getMessage();
		}
    }

    //行业信息（添加/编辑）
    public function actionIndustry_edit(){
		$data['indus']=Industry::find()->where('indus_pid=0')->all();
		$data['tag']='添加';
		$data['act']='act';
		if(isset($_GET['id']))
		{
			$id=intval($_GET['id']);
			$data['tag']='编辑';
			$data['act']='act';
			$data['info']=Industry::findOne($id);
			//echo '<pre>';print_r($data['info']);die;
		}
        return $this->renderPartial("industry_edit",$data);
    }

	//操作行业信息
    public function actionAct(){
		//echo '<pre>';print_r($_POST);die;
		if($_POST['id']==0){
			$model = new Industry();
		}else{
			$model =Industry::findone($_POST['id']);
		}
		$model->indus_pid=$_POST['indus_pid'];
		$model->indus_name=$_POST['indus_name'];
		$model->listorder=$_POST['listorder'];
		$model->is_recommend=isset($_POST['is_recommend'])?$_POST['is_recommend']:0;
		$model->on_time=time();
		if($model->save())
		{
			echo "<script>location.href='index.php?r=task/".$_POST['submit']."'</script>";
		}
	}

	//删除行业
    public function actionDel(){
        $id=intval($_GET['id']);
		$info=Industry::findOne($id);
		if($info['indus_pid']==0){
			$res=Industry::find()->where('indus_pid='.$info['indus_id'])->all();
		}else{
			$res['key']='son';
		}
		if(count($res)==0||count($res)==1)
		{
			if(Industry::deleteAll("indus_id in ($id)"))
			{
				echo "<script>location.href='index.php?r=task/industry'</script>";
			}
		}
		else
		{
			echo "<script>alert('该分类下含有子类，删除失败！');location.href='index.php?r=task/industry'</script>";
		}
    }
    
    //行业合并
    public function actionUnion_industry(){
		$data['res']=Industry::find()->where('indus_pid=0')->all();
        return $this->renderPartial("union_industry",$data);
    }

	//合并行业
    public function actionUnion(){
        //echo '<pre>';print_r($_POST);die;
		if($_POST['delid']==0||$_POST['setid']==0)
		{
			echo "<script>location.href='index.php?r=task/industry'</script>";
		}
		$res=Industry::find()->where('indus_pid='.$_POST['delid'])->all();
		for($i=0;$i<count($res);$i++)
		{
			$id[]=$res[$i]['indus_id'];
		}
		//echo '<pre>';print_r($id);die;
		$transaction =Yii::$app->db->beginTransaction();
		try 
		{
			for($i=0;$i<count($id);$i++)
			{
				Industry::updateAll(['indus_pid'=>$_POST['setid']],['indus_id'=>$id[$i]]);
			}
			if(Industry::deleteAll("indus_id in (".$_POST['delid'].")"))
			{
				echo "<script>location.href='index.php?r=task/industry'</script>";
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollBack();
			echo $e->getMessage();
		}
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
