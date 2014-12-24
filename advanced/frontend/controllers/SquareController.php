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


class SquareController extends Controller
{
    public function actionSquare_list(){
        
       $this->layout='@app/views/layouts/public.php';
          
       return $this->renderPartial("square_list");
      // return $this->render("square_list",$data);
      
   }
}
