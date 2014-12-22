<?php
namespace backend\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\WkWitkeyArticleCategory;
use app\models\article;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\CookieCollection;
use app\views\layouts\publics;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\web\Session;
use app\models\tree;
/**
 * Site controller
 */

class ArticleController extends Controller
{
  // $this->layout='@app/views/layouts/publics.php';
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
   
    /**
     * @inheritdoc
     */
////////////////////////////网站公告//////////////////////////////
//网站公告
    //公告列表
 public function actionBulletin(){  
        $this->layout='@app/views/layouts/publics.php';
       $model=new Query();
       $data = $model->from(['wk_witkey_article'])->orderby("listorder asc")->where("art_cat_id=17")->all();
       $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
       $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
       return $this->render('bulletin',[
       'model' => $data,
       'pages' => $pages,
       ]); 
       
    }
//公告搜索
public function actionBulletin_search(){
 $this->layout='@app/views/layouts/publics.php';
$session=new session();
$art_title=@$_POST['w']['art_title'];
$username=@$_POST['w']['username'];
$paixu=@$_POST['paixu'];
$zengjian=@$_POST['zengjian'];
$page_size=@$_POST['page_size'];
$where="1";
$where.=" and art_cat_id='17'";
if(!empty($bulletin)&&empty($art_title)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)){
$session->set('bulletin',$session->get('bulletin'));
}else{
        if(!empty($art_title)){
                $where.=" and art_title like '%$art_title%'";
        }
        if(!empty($username)){
                $where.=" and username like '%$username%'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_id desc";
                }else{
                        $where.=" order by art_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by pub_time desc";
                }else{
                        $where.=" order by pub_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=Article::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('bulletin',['model'=>$model,'pages'=>$pages]);

}    
//公告添加
public function actionBullentin_edit(){
    return $this->renderPartial("bullentin_edit");
}
//公告添加处理
public function actionBullentin_edit_pro(){
    $time=time();
    $article = new Article();
    $article->art_cat_id=17;
    $article->art_title=$_POST['fields']['art_title'];
    $article->cat_type=$_POST['fields']['type'];
    $article->is_show='1';
    $article->pub_time =$time;  
    $article->listorder=$_POST['fields']['listorder']; 
    $article->is_recommend=$_POST['fields']['is_recommend']; 
      $article->username=$_POST['fields']['username']; 
    $article->content=$_POST['fields']['content']; 
    $article->seo_title=$_POST['fields']['seo_title']; 
    $article->seo_keyword=$_POST['fields']['seo_keyword']; 
    $article->seo_desc=$_POST['fields']['seo_desc']; 
    $article->art_source=$_POST['fields']['art_source']; 
    $a=$article->insert();
    if($a){
       $this->redirect("./index.php?r=article/bulletin");      
    }else{
       $this->redirect("./index.php?r=article/bulletin");      
    }
}
//网站公告删除
  public  function actionBulletin_del(){
        $id=$_GET['art_id'];
       $a=article::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
  }
  //查询要修改网站公告内容
  public function actionBulletin_update(){
      $id=$_GET['id'];
     $arr=article::findOne($id); 
    return $this->renderPartial("bulletin_update",['arr'=>$arr]);
  }
  //执行网站公告修改
  public function actionBullentin_update_pro(){
        $time=time();
        $model=new Article();
        $a=$update=$model->updateall(['art_cat_id'=>17,
        'art_title'=>$_POST['fields']['art_title'],
        'cat_type'=>$_POST['fields']['type'],
        'is_show'=>'1',
        'pub_time' =>$time, 
        'listorder'=>$_POST['fields']['listorder'], 
        'is_recommend'=>$_POST['fields']['is_recommend'],
        'content'=>$_POST['fields']['content'], 
        'seo_title'=>$_POST['fields']['seo_title'],
        'seo_keyword'=>$_POST['fields']['seo_keyword'],
        'seo_desc'=>$_POST['fields']['seo_desc'], 
        'art_source'=>$_POST['fields']['art_source'] ],['art_id'=>$_POST['pk']['art_id']]);
        if($a){
        $this->redirect("./index.php?r=article/bulletin");      
        }else{
        $this->redirect("./index.php?r=article/bulletin");      
        }
  }
 //网站公告批量删除
  public function actionBulletin_delall(){
         $id=$_GET['id'];
         $count = article::deleteAll("art_id in ($id)");
         if($count>0){
         echo 1;
        }else{
         echo 0;
        }

  }
  ////////////////////////////网站介绍////////////////////////////////////
//网站介绍列表
public function actionAbout(){
     $this->layout='@app/views/layouts/publics.php';
    $model=new Query();
    $data = $model->from(['wk_witkey_article'])->orderby("listorder asc")->where("art_cat_id=202")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
    return $this->render('about',[
    'model' => $data,
    'pages' => $pages,
    ]); 
}
//网站介绍搜索
public function actionAbout_search(){
 $this->layout='@app/views/layouts/publics.php';
$session=new session();
$art_title=@$_POST['w']['art_title'];
$username=@$_POST['w']['username'];
$paixu=@$_POST['paixu'];
$zengjian=@$_POST['zengjian'];
$page_size=@$_POST['page_size'];
$where="1";
$where.=" and art_cat_id='202'";
if(!empty($bulletin)&&empty($art_title)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)){
$session->set('bulletin',$session->get('bulletin'));
}else{
        if(!empty($art_title)){
                $where.=" and art_title like '%$art_title%'";
        }
        if(!empty($username)){
                $where.=" and username like '%$username%'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_id desc";
                }else{
                        $where.=" order by art_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by pub_time desc";
                }else{
                        $where.=" order by pub_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=Article::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('about',['model'=>$model,'pages'=>$pages]);

}    
//网站添加
public function actionAbout_edit(){
    return $this->renderPartial("about_edit");
}
//关于网站添加处理
public function actionAbout_editpro(){
    $time=time();
    $article = new Article();
    $article->art_cat_id=202;
    $article->art_title=$_POST['fields']['art_title'];
    $article->cat_type=$_POST['fields']['type'];
    $article->is_show='1';
    $article->pub_time =$time;  
    $article->listorder=$_POST['fields']['listorder']; 
    $article->is_recommend=$_POST['fields']['is_recommend']; 
    $article->content=$_POST['fields']['content']; 
    $article->seo_title=$_POST['fields']['seo_title']; 
    $article->seo_keyword=$_POST['fields']['seo_keyword']; 
    $article->seo_desc=$_POST['fields']['seo_desc']; 
    $article->art_source=$_POST['fields']['art_source']; 
        $a=$article->insert();
        if($a){
           $this->redirect("./index.php?r=article/about");      
        }else{
    $this->redirect("./index.php?r=article/about");      
    }
  }
  //网站公告删除
  public  function actionAbout_del(){
        $id=$_GET['art_id'];
       $a=article::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
  }
  //查询要修改网站公告内容
  public function actionAbout_update(){
      $id=$_GET['id'];
     $arr=article::findOne($id); 
    return $this->renderPartial("about_update",['arr'=>$arr]);
  }
  //执行网站公告修改
  public function actionAbout_update_pro(){
        $time=time();
        $model=new Article();
        $a=$update=$model->updateall(['art_cat_id'=>202,
        'art_title'=>$_POST['fields']['art_title'],
        'cat_type'=>$_POST['fields']['type'],
        'is_show'=>'1',
        'pub_time' =>$time, 
        'listorder'=>$_POST['fields']['listorder'], 
        'is_recommend'=>$_POST['fields']['is_recommend'],
        'content'=>$_POST['fields']['content'], 
        'seo_title'=>$_POST['fields']['seo_title'],
        'seo_keyword'=>$_POST['fields']['seo_keyword'],
        'seo_desc'=>$_POST['fields']['seo_desc'], 
        'art_source'=>$_POST['fields']['art_source'] ],['art_id'=>$_POST['pk']['art_id']]);
        if($a){
        $this->redirect("./index.php?r=article/about");      
        }else{
        $this->redirect("./index.php?r=article/about");      
        }
  }
  //关于网站批量删除  
  public function actionAbout_delall(){
         $id=$_GET['id'];
         $count = article::deleteAll("art_id in ($id)");
         if($count>0){
         echo 1;
        }else{
         echo 0;
        }

  }
  /////////////////////文章模块/////////////////////////////////////////////
  //文章模块
        //文章列表
  public function actionArt_list(){
      $models=new WkWitkeyArticleCategory();
        $arrs=$models->getAllCate($arr,0,' ');
    $this->layout='@app/views/layouts/publics.php';
    $model=new Query();
    $data = $model->from(['wk_witkey_article'])->orderby("listorder asc")->where("cat_type='article'")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all();   
   
    return $this->render('art_list',[
    'model' => $data,
    'pages' => $pages,
         'arr' => $arrs,
    ]); 
  }
  //文章搜索
  public  function actionArt_seartch(){
$models=new WkWitkeyArticleCategory();
 $arrs=$models->getAllCate($arr,0,' ');
$this->layout='@app/views/layouts/publics.php';
$session=new session();
$art_title=@$_POST['w']['art_title'];
$username=@$_POST['w']['username'];
$paixu=@$_POST['paixu'];
$zengjian=@$_POST['zengjian'];
$page_size=@$_POST['page_size'];
$art_cat_id=@$_POST['w']['art_cat_id'];
$where="1";
$where.=" and cat_type='article'";
if(!empty($bulletin)&&empty($art_cat_id)&&empty($art_title)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)){
$session->set('bulletin',$session->get('bulletin'));
}else{
        if(!empty($art_title)){
                $where.=" and art_title like '%$art_title%'";
        }
        if(!empty($username)){
                $where.=" and username like '%$username%'";
        }
        if(!empty($art_cat_id)){
                $where.=" and art_cat_id = '$art_cat_id'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_id desc";
                }else{
                        $where.=" order by art_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by pub_time desc";
                }else{
                        $where.=" order by pub_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=Article::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('art_list',['model'=>$model,'pages'=>$pages,'arr'=>$arrs]);
  }
  //文章添加
  public function actionArt_edit(){
        $models=new WkWitkeyArticleCategory();
        $arrs=$models->getAllCate($arr,0,' ');
      return $this->renderPartial("art_edit",['arr'=>$arrs]);
  }
//文章添加处理
public function actionArt_add_pro(){
    $newpath="../../public/upload/".$_FILES['art_pic']['name'];
  if(move_uploaded_file($_FILES['art_pic']['tmp_name'],$newpath)) {
$time=time();
$article = new Article();
$article->art_cat_id=$_POST['fields']['art_cat_id'];
$article->art_pic=$_FILES['art_pic']['name'];
$article->art_title=$_POST['fields']['art_title'];
$article->cat_type="article";
$article->username=$_POST['fields']['username'];
$article->is_show='1';
$article->pub_time =$time;  
$article->listorder=$_POST['fields']['listorder']; 
$article->is_recommend=$_POST['fields']['is_recommend']; 
$article->content=$_POST['fields']['content']; 
$article->seo_title=$_POST['fields']['seo_title']; 
$article->seo_keyword=$_POST['fields']['seo_keyword'];  
$article->seo_desc=$_POST['fields']['seo_desc']; 
$article->art_source=$_POST['fields']['art_source']; 
$a=$article->insert();
        if($a){
           $this->redirect("./index.php?r=article/art_list");      
        }else{
             $this->redirect("./index.php?r=article/art_edit");      
        }
    }else{
      echo "上传失败";  
    }
}
//文章删除
  public  function actionArt_del(){
        $id=$_GET['art_id'];
       $a=article::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
 }
 //查询要修改网站公告内容
  public function actionArt_update(){
      $id=$_GET['id'];
     $arr=article::findOne($id); 
    return $this->renderPartial("art_update",['arr'=>$arr]);
  }
  //执行文章修改
  public function actionArt_update_pro(){
        $time=time();
        $model=new Article();
        $a=$update=$model->updateall(['art_cat_id'=>201,
        'art_title'=>$_POST['fields']['art_title'],
        'cat_type'=>"article",
        'is_show'=>'1',
        'pub_time' =>$time, 
        'listorder'=>$_POST['fields']['listorder'], 
        'is_recommend'=>$_POST['fields']['is_recommend'],
        'content'=>$_POST['fields']['content'], 
        'seo_title'=>$_POST['fields']['seo_title'],
        'seo_keyword'=>$_POST['fields']['seo_keyword'],
        'seo_desc'=>$_POST['fields']['seo_desc'], 
        'art_source'=>$_POST['fields']['art_source'] ],['art_id'=>$_POST['aa']]);
        if($a){
        $this->redirect("./index.php?r=article/art_list");      
        }else{
        echo 123;     
        }
  }
//文章批量删除
    public function actionArt_delall(){
         $id=$_GET['id'];
         $count = article::deleteAll("art_id in ($id)");
         if($count>0){
         echo 1;
        }else{
         echo 0;
        }

  }
 ////////////////////文章分类//////////////////////////////////////////////////
  //分类管理
  public function actionCat_list(){
    $models=new WkWitkeyArticleCategory();
    $arrs=$models->getAllCate($arr,0,' ');
    $this->layout='@app/views/layouts/publics.php';
    $model=new Query();
    $data = $model->from(['wk_witkey_article_category'])->orderby("listorder asc")->where("cat_type='article'")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
    return $this->render('cat_list',[
    'model' => $data,
    'pages' => $pages,
         'arr' => $arrs,
    ]); 
  }
  //文章分类搜索
  public  function actionCat_search(){
$models=new WkWitkeyArticleCategory();
$arrs=$models->getAllCate($arr,0,' ');
$this->layout='@app/views/layouts/publics.php';
$session=new session();
$username=@$_POST['w']['cat_name'];
$paixu=@$_POST['paixu'];
$zengjian=@$_POST['zengjian'];
$page_size=@$_POST['page_size'];
$art_cat_pid=@$_POST['w']['art_cat_pid'];
$where="1";
$where.=" and cat_type='article'";
if(!empty($bulletin)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)&&empty($art_cat_pid)){
$session->set('bulletin',$session->get('bulletin'));
}else{
      
        if(!empty($username)){
                $where.=" and cat_name like '%$username%'";
        }
          if(!empty($art_cat_pid)){
                $where.=" and art_cat_pid = '$art_cat_pid'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_cat_id desc";
                }else{
                        $where.=" order by art_cat_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by on_time desc";
                }else{
                        $where.=" order by on_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=WkWitkeyArticleCategory::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('cat_list',['model'=>$model,'pages'=>$pages ,'arr' => $arrs]);
  }
  //文章分类添加
  public function  actionCat_add_pro(){
    $time=time();
    $article_category = new WkWitkeyArticleCategory();
    $article_category->art_cat_pid=$_POST['slt_cat_id'];
    $article_category->cat_name=$_POST['txt_cat_name'];
    $article_category->listorder=$_POST['txt_listorder'];
    $article_category->is_show='1';
    $article_category->on_time =$time;  
    $article_category->cat_type=$_POST['do'];
    $article_category->art_index='{123}'; 
    $a=$article_category->insert();
    if($a){
       $this->redirect("./index.php?r=article/cat_list");      
    }else{
       $this->redirect("./index.php?r=article/cat_add");      
    }
  
  }
  
  //文章分类删除
  public  function actionCategory_del(){
        $id=$_GET['art_cat_id'];
       $a=WkWitkeyArticleCategory::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
  }
  //查询要修改分类内容
  public function actionCategory_update(){
      $id=$_GET['id'];
     $arr=WkWitkeyArticleCategory::findOne($id); 
    return $this->renderPartial("cat_edit",['arr'=>$arr]);
  }
   //分类添加
  public function actionCat_add(){
        $model=new WkWitkeyArticleCategory();
        $arrs=$model->getAllCate($arr,0,' ');
      
        return $this->renderPartial("cat_add",['arr'=>$arrs]);
  }
  public function actionCategory_update_pro(){
$time=time();
$model=new WkWitkeyArticleCategory();
$a=$update=$model->updateall(['art_cat_pid'=>$_POST['slt_cat_id'],
'cat_name'=>$_POST['txt_cat_name'],
'listorder'=>$_POST['txt_listorder'],
'is_show'=>'1',
'on_time' =>$time,
'cat_type'=>$_POST['do'],
'art_index'=>'{123}'],["art_cat_id"=>$_POST['art_cat_id']]);
  if($a){
      $this->redirect("./index.php?r=article/cat_list");      
    }else{
     $this->redirect("./index.php?r=article/cat_add");      
    }
  }
  //动态修改排序
  public function actionCategory_listorder(){
    $time=time();
    $model=new WkWitkeyArticleCategory();
    $a=$update=$model->updateall([
'listorder'=>$_GET['v']
],["art_cat_id"=>$_GET['iid']]);
  if($a){
      echo 1;      
    }else{
   echo 0;     
    }   
  }
  
    //动态修改分类名字
  public function actionCategory_cat_name(){
    $time=time();
    $model=new WkWitkeyArticleCategory();
    $a=$update=$model->updateall([
'cat_name'=>$_GET['v']
],["art_cat_id"=>$_GET['iid']]);
  if($a){
      echo 1;      
    }else{
   echo 0;     
    }   
  }
  ///////////////////////////帮助分类/////////////////////////////////////////////////////////
//帮助管理
 
  //分类添加
  public function actionCat_help_add(){
      $model=new WkWitkeyArticleCategory();
      $arrs=$model->getAllCates($arr,0,' ');
      return $this->renderPartial("cat_help_add",['arr'=>$arrs]);
  }  
 //帮助分类了列表
  public function actionCat_help(){
        $model=new WkWitkeyArticleCategory();
      $arrs=$model->getAllCates($arr,0,' ');
  $this->layout='@app/views/layouts/publics.php';
  $model=new Query();
    $data = $model->from(['wk_witkey_article_category'])->orderby("listorder asc")->where("cat_type='help'")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
    return $this->render('cat_help',[
    'model' => $data,
    'pages' => $pages,
    'arr'=>$arrs,
    ]); 
  }
  //帮助分类列表搜索
  public function actionCat_help_search(){
         $model=new WkWitkeyArticleCategory();
      $arrs=$model->getAllCates($arr,0,' ');
     $this->layout='@app/views/layouts/publics.php';
$session=new session();
$username=@$_POST['w']['cat_name'];
$paixu=@$_POST['paixu'];
$zengjian=@$_POST['zengjian'];
$page_size=@$_POST['page_size'];
$where="1";
$art_cat_pid=@$_POST['w']['art_cat_pid'];
$where.=" and cat_type='help'";
if(!empty($bulletin)&&empty($art_cat_pid)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)){
$session->set('bulletin',$session->get('bulletin'));
}else{
      if(!empty($art_cat_pid)){
                $where.=" and art_cat_pid = '$art_cat_pid'";
        }
        if(!empty($username)){
                $where.=" and cat_name like '%$username%'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_cat_id desc";
                }else{
                        $where.=" order by art_cat_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by on_time desc";
                }else{
                        $where.=" order by on_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=WkWitkeyArticleCategory::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('cat_help',['model'=>$model,'pages'=>$pages,'arr'=>$arrs,]); 
      
  }
//分类帮助添加
  public function  actionCat_helpadd_pro(){
    $time=time();
    $article_category = new WkWitkeyArticleCategory();
    $article_category->art_cat_pid=$_POST['slt_cat_id'];
    $article_category->cat_name=$_POST['txt_cat_name'];
    $article_category->listorder=$_POST['txt_listorder'];
    $article_category->is_show='1';
    $article_category->on_time =$time;  
    $article_category->cat_type=$_POST['do'];
    $article_category->art_index='{123}'; 
    $a=$article_category->insert();
    if($a){
       $this->redirect("./index.php?r=article/cat_help");      
    }else{
       $this->redirect("./index.php?r=article/cat_help_add");      
    }
  
  }
  //帮助分类删除
  public  function actionCat_help_dell(){
        $id=$_GET['art_cat_id'];
        $a=WkWitkeyArticleCategory::findOne($id)->delete(); 
        if($a){
           echo 1;
        }else{
           echo 0;   
        }
  }
  //查询要修改分类内容
  public function actionCat_help_update(){
      $id=$_GET['id'];
      $arr=WkWitkeyArticleCategory::findOne($id); 
      return $this->renderPartial("cat_help_edit",['arr'=>$arr]);
  }
  
 
  public function actionCat_help_update_pro(){
$time=time();
 $model=new WkWitkeyArticleCategory();
$a=$update=$model->updateall(['art_cat_pid'=>2,
'cat_name'=>$_POST['txt_cat_name'],
'listorder'=>$_POST['txt_listorder'],
'is_show'=>'1',
'on_time' =>$time,
'cat_type'=>$_POST['do'],
  'art_index'=>'{123}'],["art_cat_id"=>$_POST['art_cat_id']]);
  if($a){
      $this->redirect("./index.php?r=article/cat_help");      
    }else{
     $this->redirect("./index.php?r=article/cat_help");      
    }
  }
  //动态修改排序
  public function actionCat_help_listorder(){
    $time=time();
    $model=new WkWitkeyArticleCategory();
    $a=$update=$model->updateall([
    'listorder'=>$_GET['v']
    ],["art_cat_id"=>$_GET['iid']]);
      if($a){
          echo 1;      
        }else{
       echo 0;     
        }   
      }
    //动态修改分类名字
  public function actionCat_helpcat_name(){
    $time=time();
    $model=new WkWitkeyArticleCategory();
    $a=$update=$model->updateall([
'cat_name'=>$_GET['v']
],["art_cat_id"=>$_GET['iid']]);
  if($a){
      echo 1;      
    }else{
   echo 0;     
    }   
  }
  
  ///////////////////////////帮助管理/
 
  //帮助管理列表
  public function actionHelp_list(){
    $this->layout='@app/views/layouts/publics.php';
    $model=new WkWitkeyArticleCategory();
    $arrs=$model->getAllCates($arr,0,' ');
    $model=new Query();
    $data = $model->from(['wk_witkey_article'])->orderby("listorder asc")->where("cat_type='help'")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
    return $this->render('help_list',[
    'model' => $data,
    'pages' => $pages,
    'arr'=>$arrs,
    ]); 
     
  }
  //帮助管理搜索
  public function actionHelp_search(){
    $model=new WkWitkeyArticleCategory();
    $arrs=$model->getAllCates($arr,0,' ');
    $this->layout='@app/views/layouts/publics.php';
    $session=new session();
    $art_title=@$_POST['w']['art_title'];
    $username=@$_POST['w']['username'];
    $paixu=@$_POST['paixu'];
    $zengjian=@$_POST['zengjian'];
    $page_size=@$_POST['page_size'];
    $where="1";  
    $art_cat_id=@$_POST['w']['art_cat_id'];
    $where.=" and cat_type='help'";
if(!empty($bulletin)&&empty($art_title)&&empty($art_cat_id)&&empty($username)&&empty($page_size)&&empty($paixu)&&empty($zengjian)){
$session->set('bulletin',$session->get('bulletin'));
}else{
        if(!empty($art_title)){
                $where.=" and art_title like '%$art_title%'";
        }
        if(!empty($art_cat_id)){
                $where.=" and art_cat_id = '$art_cat_id'";
        }
        if(!empty($username)){
                $where.=" and username like '%$username%'";
        }
        if(!empty($paixu)&&$paixu=="art_id"){
                if($zengjian=="desc"){
                        $where.=" order by art_id desc";
                }else{
                        $where.=" order by art_id";
                }
        }
        if(!empty($paixu)&&$paixu=="pub_time"){
                if($zengjian=="desc"){
                        $where.=" order by pub_time desc";
                }else{
                        $where.=" order by pub_time";
                }
        }
         $session->set('bulletin',$where);
}
$a=$session->get('bulletin');
$data=Article::find()->andWhere($a);	
$pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
$model = $data->offset($pages->offset)->limit($pages->limit)->all();
return $this->renderPartial('help_list',['model'=>$model,'pages'=>$pages,'arr'=>$arrs,
]);
      
  }
  //添加帮助
  public function actionHelp_edit(){
      $model=new WkWitkeyArticleCategory();
      $arrs=$model->getAllCates($arr,0,' ');
      return $this->renderPartial("help_edit",['arr'=>$arrs]);
  }
 //帮助管理添加 
public function actionHelp_add_pro(){
    $time=time();
    $article = new Article();
    $article->art_cat_id=$_POST['fields']['art_cat_id'];
    $article->art_title=$_POST['fields']['art_title'];
    $article->cat_type='help';
    $article->username=$_POST['fields']['username'];
    $article->is_show='1';
    $article->pub_time =$time;  
    $article->listorder=$_POST['fields']['listorder']; 
    $article->is_recommend=$_POST['fields']['is_recommend']; 
    $article->content=$_POST['fields']['content']; 
    $article->seo_title=$_POST['fields']['seo_title']; 
    $article->seo_keyword=$_POST['fields']['seo_keyword']; 
    $article->seo_desc=$_POST['fields']['seo_desc']; 
    $article->art_source=$_POST['fields']['art_source']; 
        $a=$article->insert();
        if($a){
           $this->redirect("./index.php?r=article/help_list");      
        }else{
           $this->redirect("./index.php?r=article/help_edit");      
    }
}
//帮助管理删除
  public  function actionHelp_del(){
        $id=$_GET['art_id'];
       $a=article::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
 }
 //查询要修改网站公告内容
  public function actionHelp_update(){
      $id=$_GET['id'];
     $arr=article::findOne($id); 
    return $this->renderPartial("help_update",['arr'=>$arr]);
  }
  //执行文章修改
  public function actionHelp_update_pro(){
        $time=time();
        $model=new Article();
        $a=$update=$model->updateall(['art_cat_id'=>200,
        'art_title'=>$_POST['fields']['art_title'],
        'cat_type'=>$_POST['pk']['type'],
        'is_show'=>'1',
        'pub_time' =>$time, 
        'listorder'=>$_POST['fields']['listorder'], 
        'is_recommend'=>$_POST['fields']['is_recommend'],
        'content'=>$_POST['fields']['content'], 
        'seo_title'=>$_POST['fields']['seo_title'],
        'seo_keyword'=>$_POST['fields']['seo_keyword'],
        'seo_desc'=>$_POST['fields']['seo_desc'], 
        'art_source'=>$_POST['fields']['art_source'] ],['art_id'=>$_POST['aa']]);
        if($a){
        $this->redirect("./index.php?r=article/help_list");      
        }else{
        echo 失败;     
        }
  }
//文章批量删除
    public function actionHelp_delall(){
         $id=$_GET['id'];
         $count = article::deleteAll("art_id in ($id)");
         if($count>0){
         echo 1;
        }else{
         echo 0;
        }

  } 
  //成功案例(列表)
  public function actionCase_list(){
      return $this->renderPartial("case_list");
  }
  //添加案例
  public function actionCase_add(){
      return $this->renderPartial("case_add");
  }
  //案例添加处理
  public function actionCase_add_pro(){
      echo "<pre>";
      var_dump($_FILES);
      echo "<pre>";
      var_dump($_POST);
  }

   
}
