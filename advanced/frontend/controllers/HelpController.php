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
use app\models\ArticleCategory;
use app\models\Article;

class HelpController extends Controller
{
    //威客服务
    public function actionIndex(){
        
       $this->layout='@app/views/layouts/public.php';
       $fenlei=ArticleCategory::find()->where(['art_cat_pid'=>100])->all();
       $article=Article::find()->all();
       //print_r($article);die;
       $article_list = Article::find()->limit(5)->all();
       return $this->renderPartial("index",['fenlei'=>$fenlei,'article'=>$article,'article_list'=>$article_list,]);
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
   public function actionGetarticle(){
       $id=$_GET['id'];
       $list=Article::find()->where(['art_id'=> $id])->all();
       //print_r($list);
       $str=" <div class='all_content ws_break '>
            <a href='javascript:void(0);' class='question>
             <span class='icon16 br-down'></span>
            <strong class='q_title' size=16px>".$list[0]['art_title']."</strong>
             </a>
            <span size=12px><br>".htmlspecialchars_decode($list[0]['content'])."</span></div>
           ";
       return $str;
   }
}
