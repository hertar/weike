<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    /**
     * @inheritdoc
     */

//网站公告
    //公告列表
    public function actionBulletin()
    {
        return $this->renderPartial('bulletin');
    }

//公告添加
public function actionBullentin_edit(){
    return $this->renderPartial("bullentin_edit");
}
    //网站介绍列表
    public function actionAbout(){
                return $this->renderPartial('about');
        }
        //网站添加
        public function actionAbout_edit(){
            return $this->renderPartial("about_edit");
        }
        
        
  //文章模块
        //文章列表
  public function actionArt_list(){
      return $this->renderPartial("art_list");
  }
  //文章添加
  public function actionArt_edit(){
      return $this->renderPartial("art_edit");
  }

  //分类管理
  public function actionCat_list(){
      return $this->renderPartial("cat_list");
  }

   //分类添加
  public function actionCat_add(){
      return $this->renderPartial("cat_add");
  }
  
//帮助管理
  //帮助分类了列表
  public function actionCat_help(){
      return $this->renderPartial("cat_help");
  }
  //分类添加
  public function actionCat_edit(){
      return $this->renderPartial("cat_edit");
  }
  //帮助管理列表
  public function actionHelp_list(){
      return $this->renderPartial("help_list");
  }
  //添加帮助
  public function actionHelp_edit(){
      return $this->renderPartial("help_edit");
  }
  //成功案例(列表)
  public function actionCase_list(){
      return $this->renderPartial("case_list");
  }
  //添加案例
  public function actionCase_add(){
      return $this->renderPartial("case_add");
  }
}
