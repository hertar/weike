<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Industry;
use app\models\Model;
use yii\db\Query;
use yii\data\Pagination;


class ServerController extends Controller
{
    public function actionSeller_list(){
        
       $this->layout='@app/views/layouts/public.php';
       $session=new \yii\web\Session();
        $fenlei=Industry::find()->where(['indus_pid'=>0])->all();
        $moshi= Model::find()->all();
        $can=[];
        $where='1=1';
        if(@$_GET['fl']){
            $can=['fl'=>$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $indus_id=$_GET['fl'];
            //echo $indus_id;die;
            $indus=Industry::findOne($indus_id);
            //print_r($indus['indus_name']);die;
             $session->set("fl",$indus['indus_name']);
             //echo $session->get('indus');die;
            $where.=" and indus_pid=$indus_id";
        }
        if(@$_GET['ms']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $model_id=$_GET['ms']; 
            $indus=Model::findOne($model_id);
             $session->set("ms",$indus['model_name']);
            $where.=" and wk_witkey_task.model_id=$model_id";
        }
        if(@$_GET['min'] && @$_GET['max']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>$_GET['min'],'max'=>@$_GET['max']];
            $min=$_GET['min'];
             $max=$_GET['max'];
            //$where.=" ";
            $where.=" and real_cash>$min and task_cash<=$max";
            $session->set("sj",$min."-".$max);
        }
        $model=new Query();
        $data1 = $model->from(['wk_witkey_task','wk_witkey_model'])->where("wk_witkey_task.model_id=wk_witkey_model.model_id and $where order by end_time desc")->all();
        //print_r($_GET);//die;
        $total=$model->count();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>10]);
        $data1=$model->offset($pages->offset)->limit($pages->limit)->all();
        //print_r($data1);
        return $this->render('seller_list',['total'=>$total,'fenlei'=>$fenlei,'moshi'=>$moshi,'list'=>$data1,'pages' => $pages,'can'=>$can]);
   }
}
