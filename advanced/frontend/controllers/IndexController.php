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


class IndexController extends Controller
{
     //public $nav=null ;
    
    //首页
     public function actionIndex(){
        //加载布局文件
        $this->layout='@app/views/layouts/public.php';
          $rows = (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
        //$this->nav=$rows;
       $data['nav']=$rows;
       return $this->render("index",$data);
    }
    //注册
    public function actionRegister(){
          $this->layout='@app/views/layouts/public.php';
          $rows = (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
        //$this->nav=$rows;
       $data['nav']=$rows;
       return $this->render("register",$data);
    }
    //登陆
    public function actionLogin(){
         $this->layout='@app/views/layouts/public.php';
          $rows = (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
        //$this->nav=$rows;
       $data['nav']=$rows;
       return $this->render("login",$data);
    }
}
