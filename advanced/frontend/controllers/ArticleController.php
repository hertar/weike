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
use yii\data\Pagination; 

class ArticleController extends Controller
{
    public function actionArticle_list(){
        $model=new \yii\db\Query();
        $res = $model->from(['wk_witkey_article','wk_witkey_article_category'])
                             ->orderBy("is_recommend desc")
                             ->where("wk_witkey_article.art_cat_id=wk_witkey_article_category.art_cat_id")
                             ->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>3]);
        $res=$model->offset($pages->offset)->limit($pages->limit)->all();
        
        $cat=  \app\models\ArticleCategory::find()->where(["art_cat_pid"=>1])->limit(10)->all();
        
        $data["cat"]=$cat;
        $data["res"]=$res;
        $data["pages"]=$pages;
        return $this->renderPartial("article_list",$data);
   }
   public function actionArticle_info(){
       
       $art_id=$_GET["art_id"];  
       $model=new \yii\db\Query();
       $res = $model->from(['wk_witkey_article','wk_witkey_article_category'])                         
                             ->where("wk_witkey_article.art_cat_id=wk_witkey_article_category.art_cat_id and wk_witkey_article.art_id='".$art_id."'")
                             ->one();
       
       $arr = $model->from(['wk_witkey_article','wk_witkey_article_category'])
                             ->orderBy("is_recommend desc")
                             ->where("wk_witkey_article.art_cat_id=wk_witkey_article_category.art_cat_id")
                             ->all();
         
      foreach ($arr as $key=>$val) {
          $brr[][$val["art_id"]]=$val["art_title"];
      }
      for($i=0;$i<count($brr);$i++){
            foreach ($brr[$i] as $key=>$v){
                if($i-1>=0&&$i+1<=count($brr)){
                  
                    if($art_id==$key){
                        $last=$brr[$i-1];
                        $next=$brr[$i+1];
                        
                    }
                }
                if($i-1<0){
                    if($art_id==$key){
                       
                        $next=$brr[$i+1];
                        
                    }
                }
                if(i+1>count($brr)){
                    if($art_id==$key){
                        $last=$brr[$i-1];                   
                    }
                }
            }
       }
            $data["last"]=$last;
            $data["next"]=$next;
       
       $data["res"]=$res;
         return $this->renderPartial("article_info",$data);
   }
}
