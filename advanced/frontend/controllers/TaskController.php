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


class TaskController extends Controller
{
    //任务大厅
    public function actionTask_list(){
        
        $this->layout='@app/views/layouts/public.php';
          $rows = (new \yii\db\Query())
                ->select('nav_title, nav_url')
                ->from('wk_witkey_nav')
                ->all();
        
        $data['nav']=$rows;
        return $this->render("task_list",$data);
   }
}
