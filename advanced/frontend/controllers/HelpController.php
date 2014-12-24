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


class HelpController extends Controller
{
    //威客服务
    public function actionIndex(){
        
       $this->layout='@app/views/layouts/public.php';
         
       return $this->renderPartial("index");
     
      
   }
   //商品规则
    public function actionRuler(){
        
       $this->layout='@app/views/layouts/public.php';
      
       return $this->renderPartial("ruler");
   }
   //威客作品
     public function actionWorks(){
        
       $this->layout='@app/views/layouts/public.php';
         
       return $this->renderPartial("works");    
   }
}
