<?php
namespace frontend\controllers;
use yii\data\Pagination;
use yii\db\Query;
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
use app\models\WkWitkeyCase;
use app\models\WkWitkeyIndustry;
class CaseController extends Controller
{
     //public $nav=null ;
    
    //首页
     public function actionCase_list(){
        //加载布局文件
        $this->layout='@app/views/layouts/public.php';
          $rows = (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
        //$this->nav=$rows;
       $model=new Query();
       $data['nav']=$rows;
      $model=new Query(); 
        $date=$model->from(['wk_witkey_case','wk_witkey_service'])->where("wk_witkey_case.obj_id=wk_witkey_service.service_id")->all();
            foreach($date as $key=>$val){
                $indus_id=$val['indus_pid'];
                $arr=WkWitkeyIndustry::findOne($indus_id); 
                $date[$key]['tmp']=$arr['indus_name'];
        }  
           foreach($date as $key=>$val){
                $indus_id=$val['indus_id'];
                $arr=WkWitkeyIndustry::findOne($indus_id); 
                $date[$key]['tmps']=$arr['indus_name'];
        } 

        $data['date']=$date;
       return $this->renderPartial("case_list",$data);
    }
}
