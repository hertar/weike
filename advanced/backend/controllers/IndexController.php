<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\Member;
/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法

//主页
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    
    public function actionLogin(){
        
        return $this->renderPartial("login");
    }
 
    //判断登陆
    public function actionLogin_pro(){
       // print_r($_POST);die;
      
        $username=$_POST['username'];
        $password=$_POST['password'];
      
        $user=Member::find()
				->where(['id' => '1'])
				->all();
		print_r($user);
    }
    /*
       //验证码
    
  public function actions(){
        //$yzm="".substr(md5(time()),5,4);
        //$yzm= md5( rand(1000,9999));
      $arr=array('A','D','R','S','L','a','d','w','y',1,2,3,4,5,6,7,8,9);
        $str='';
        for($i=0;$i<4;$i++){
                $a=rand(0,10);
                $str=$str.$arr[$a];
        }
       // echo $str;
        $session=new \yii\web\Session();
        $session->set('captcha',$str);
 
        return [
                'captcha' => [
                    'class' => 'yii\captcha\CaptchaAction',
                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' :$str,
                ],
        ];
    }
*/
    public function actionMain(){
        return $this->renderPartial("main");
    }


}
