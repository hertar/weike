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
}
