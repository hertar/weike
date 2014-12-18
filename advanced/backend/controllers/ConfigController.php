<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\BasicConfig;
use app\models\Nav;

/**
 * Site controller
 */
class ConfigController extends Controller
{
	public $enableCsrfValidation=false;
    /**
     * @inheritdoc
     */

	 //修改配置
	public function actionEdit()
	{
		//echo '<pre>';print_r($_POST);die;
		$_POST['website_title']='KPPW';
		$transaction =Yii::$app->db->beginTransaction();
		try 
		{
			$i=1;
			foreach($_POST as $key=>$val)
			{
				BasicConfig::updateAll(['v'=>$val],['k'=>$key]);
				if($i==count($_POST))
				{
					echo "<script>alert('配置生效');location.href='index.php?r=config/".$_POST['submit']."'</script>";
				}
				$i++;
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollBack();
			echo $e->getMessage();
		}
	}

    //站点配置
    public function actionQuanju()
    {
		$res=BasicConfig::find()->where(['type'=>'web'])->all();
		for($i=0;$i<BasicConfig::find()->where(['type'=>'web'])->count();$i++)
		{
			$data[$res[$i]['k']]=$res[$i]['v'];
		}
        return $this->renderPartial('quanju',$data);
    }

    //基本配置
    public function actionConf()
	{
		$res=BasicConfig::find()->where(['type'=>'sys'])->all();
		for($i=0;$i<BasicConfig::find()->where(['type'=>'sys'])->count();$i++)
		{
			$data[$res[$i]['k']]=$res[$i]['v'];
		}
		//echo '<pre>';print_r($data);die;
        return $this->renderPartial('conf',$data);
    }
    
    //SEO配置
    public function actionSeo()
	{
		$res=BasicConfig::find()->where(['type'=>'sys'])->all();
		for($i=0;$i<BasicConfig::find()->where(['type'=>'sys'])->count();$i++)
		{
			$data[$res[$i]['k']]=$res[$i]['v'];
		}
		$res=BasicConfig::find()->where(['type'=>'seo'])->all();
		for($i=0;$i<BasicConfig::find()->where(['type'=>'seo'])->count();$i++)
		{
			$data[$res[$i]['k']]=$res[$i]['v'];
		}
		//echo '<pre>';print_r($data);die;
        return $this->renderPartial('seo',$data);
    }

	//伪静态规则
    public function actionSeorule()
	{
		return $this->renderPartial('seorule');
	}

    //邮件配置
    public function actionMail()
	{
		$res=BasicConfig::find()->where(['type'=>'mail'])->all();
		for($i=0;$i<BasicConfig::find()->where(['type'=>'mail'])->count();$i++)
		{
			$data[$res[$i]['k']]=$res[$i]['v'];
		}
		//echo '<pre>';print_r($data);die;
        return $this->renderPartial("mail",$data);
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
		$res=Nav::find()->orderby('listorder')->all();
		//echo '<pre>';print_r($data);die;
        return $this->renderPartial('nav',['info'=>$res]);
    }

	//添加导航
	public function actionNavinfo()
    {
		return $this->renderPartial('Navinfo');
	}

	//编辑导航信息
	public function actionNavedit()
    {
		//echo '<pre>';print_r($_POST);die;
		$transaction =Yii::$app->db->beginTransaction();
		try 
		{
			$i=1;
			foreach($_POST['nav'] as $key=>$val)
			{
				Nav::updateAll($val,['nav_id'=>$key]);
				if($i==count($_POST['nav']))
				{
					echo "<script>alert('更改生效');location.href='index.php?r=config/".$_POST['submit']."'</script>";
				}
				$i++;
			}
			$transaction->commit();
		}
		catch(Exception $e)
		{
			$transaction->rollBack();
			echo $e->getMessage();
		}
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
