<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\WkWitkeyTask;
use app\models\WkWitkeyModel;
use app\models\Control;
use yii\db\ActiveRecord;

/**
 * Site controller
 */
class ModelController extends Controller
{
    public $enableCsrfValidation=false;
    /**
     * @inheritdoc
     */
    //单人悬赏
    
    //任务列表
    public function actionSingle_task_list(){
        if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where="model_id=1";
       if(!empty($_GET['search_id'])){
       $where.=" and task_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and task_title like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = WkWitkeyTask::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='model_id=1';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by task_id ".$_GET['ord']."";
            }
            $data = WkWitkeyTask::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' =>$page_size ]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('single_task_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]);
    }
    //删除操作
    public function actionDel_task(){
       $task_id=$_GET['id'];
       $count = WkWitkeyTask::findOne($task_id)->delete();
        if($count>0){
          $this->redirect("?r=model/single_task_list");
        }else{
           $this->redirect("?r=model/single_task_list");
        }
    }
    //编辑操作
    public function actionUp_task(){
       $task_id=$_GET['id'];
        $list=WkWitkeyTask::findOne($task_id); 
        return $this->renderPartial("single_task_up",[
             'list' => $list,
       ]);
    }
    //批量删除
    public function actionDel_tasks(){
         $id=$_GET['id'];
         $count = WkWitkeyTask::deleteAll("task_id in ($id)");
         if($count>0){
          $this->redirect("?r=model/single_task_list");
        }else{
           $this->redirect("?r=model/single_task_list");
        }
    }
    /*
    //任务配置(基本配置)
     * *
     */
    public function actionSingle_task_config(){
        $list=WkWitkeyModel::findOne(1); 
        return $this->renderPartial("single_task_config",[
             'list' => $list,
       ]);
    }
    //基本配置
    public function actionAdd_single_task(){
        $data=$_POST['fds'];
        //print_r($data);
        $data['indus_bid']=implode(',',$data['indus_bid']);
        $count= WkWitkeyModel::updateAll($data,['model_id'=>1]);
        if($count>0){
            $this->redirect("?r=model/single_task_config");
        }else{
            $this->redirect("?r=model/single_task_config");
        }
    }
     //流程配置
    public function actionSingle_task_control(){
             $list=Control::findOne(1); 
            return $this->renderPartial("single_task_control",[
                 'list' => $list,
           ]);
    }
     //流程配置
    public function actionAdd_single_control(){
        $data=$_POST['conf'];
        //print_r($data);
        $count= Control::updateAll($data,['model_id'=>1]);
        if($count>0){
            $this->redirect("?r=model/single_task_control");
        }else{
            $this->redirect("?r=model/single_task_control");
        }
    }
//权限配置
public function actionSingle_task_priv(){
    return $this->renderPartial("single_task_priv");
}

/*
 * 多人悬赏任务
 */
//任务管理
    public function actionMany_task_list(){
       if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where="model_id=2";
       if(!empty($_GET['search_id'])){
       $where.=" and task_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and task_title like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = WkWitkeyTask::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='model_id=2';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by task_id ".$_GET['ord']."";
            }
            $data = WkWitkeyTask::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' => $page_size]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('many_task_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]); 
    }
    //删除操作
    public function actionDel_manytask(){
       $task_id=$_GET['id'];
       $count = WkWitkeyTask::findOne($task_id)->delete();
        if($count>0){
          $this->redirect("?r=model/many_task_list");
        }else{
           $this->redirect("?r=model/many_task_list");
        }
    }
    //编辑操作
    public function actionUp_manytask(){
       $task_id=$_GET['id'];
        $list=WkWitkeyTask::findOne($task_id); 
        return $this->renderPartial("many_task_up",[
             'list' => $list,
       ]);
    }
    //批量删除
    public function actionDel_manytasks(){
         $id=$_GET['id'];
         $count = WkWitkeyTask::deleteAll("task_id in ($id)");
         if($count>0){
          $this->redirect("?r=model/many_task_list");
        }else{
           $this->redirect("?r=model/many_task_list");
        }
    }
    
    //任务配置（基本配置）
      public function actionMany_task_config(){
          $list=WkWitkeyModel::findOne(2); 
        return $this->renderPartial("many_task_config",[
             'list' => $list,
       ]);
    }
     //基本配置
    public function actionAdd_many_task(){
        $data=$_POST['fds'];
        //print_r($data);
        $data['indus_bid']=implode(',',$data['indus_bid']);
        $count= WkWitkeyModel::updateAll($data,['model_id'=>2]);
        if($count>0){
            $this->redirect("?r=model/many_task_config");
        }else{
            $this->redirect("?r=model/many_task_config");
        }
    }
     //流程配置
    public function actionMany_task_control(){
         $list=Control::findOne(2); 
            return $this->renderPartial("many_task_control",[
                 'list' => $list,
           ]);
    }
    //流程配置
    public function actionAdd_many_control(){
        $data=$_POST['conf'];
        print_r($data);
        $count= Control::updateAll($data,['model_id'=>2]);
        if($count>0){
            $this->redirect("?r=model/many_task_control");
        }else{
            $this->redirect("?r=model/many_task_control");
        }
    }
    //权限配置
    public function actionMany_task_priv(){
        return $this->renderPartial("many_task_priv");
    }
/*
 * 计件悬赏任务
 */
//任务管理
    public function actionJijian_task_list(){
        if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where="model_id=3";
       if(!empty($_GET['search_id'])){
       $where.=" and task_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and task_title like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = WkWitkeyTask::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='model_id=3';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by task_id ".$_GET['ord']."";
            }
            $data = WkWitkeyTask::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' => $page_size]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('jijian_task_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]);
    }
     //删除操作
    public function actionDel_jijiantask(){
       $task_id=$_GET['id'];
       $count = WkWitkeyTask::findOne($task_id)->delete();
        if($count>0){
          $this->redirect("?r=model/jijian_task_list");
        }else{
           $this->redirect("?r=model/jijian_task_list");
        }
    }
    //编辑操作
    public function actionUp_jijiantask(){
       $task_id=$_GET['id'];
        $list=WkWitkeyTask::findOne($task_id); 
        return $this->renderPartial("jijian_task_up",[
             'list' => $list,
       ]);
    }
    //批量删除
    public function actionDel_jijiantasks(){
         $id=$_GET['id'];
         $count = WkWitkeyTask::deleteAll("task_id in ($id)");
         if($count>0){
          $this->redirect("?r=model/jijian_task_list");
        }else{
           $this->redirect("?r=model/jijian_task_list");
        }
    }
    //任务配置（基本配置）
    
    //权限配置
    public function actionJijian_task_priv(){
        return $this->renderPartial("jijian_task_priv");
    }
     public function actionJijian_task_config(){
          $list=WkWitkeyModel::findOne(3); 
        return $this->renderPartial("jijian_task_config",[
             'list' => $list,
       ]);
    }
     //基本配置
    public function actionAdd_jijian_task(){
        $data=$_POST['fds'];
        //print_r($data);
        $data['indus_bid']=implode(',',$data['indus_bid']);
        $count= WkWitkeyModel::updateAll($data,['model_id'=>3]);
        if($count>0){
            $this->redirect("?r=model/jijian_task_config");
        }else{
            $this->redirect("?r=model/jijian_task_config");
        }
    }
     //流程配置
    public function actionJijian_task_control(){
         $list=Control::findOne(3); 
            return $this->renderPartial("jijian_task_control",[
                 'list' => $list,
           ]);
    }
    //流程配置
    public function actionAdd_jijian_control(){
        $data=$_POST['conf'];
        print_r($data);
        $count= Control::updateAll($data,['model_id'=>3]);
        if($count>0){
            $this->redirect("?r=model/jijian_task_control");
        }else{
            $this->redirect("?r=model/jijian_task_control");
        }
    }
    //普通招标
    //任务管理
    public function actionNormal_task_list(){
       if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where="model_id=4";
       if(!empty($_GET['search_id'])){
       $where.=" and task_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and task_title like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = WkWitkeyTask::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='model_id=4';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by task_id ".$_GET['ord']."";
            }
            $data = WkWitkeyTask::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' =>$page_size ]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('normal_task_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]);
    }
     //删除操作
    public function actionDel_normaltask(){
       $task_id=$_GET['id'];
       $count = WkWitkeyTask::findOne($task_id)->delete();
        if($count>0){
          $this->redirect("?r=model/normal_task_list");
        }else{
           $this->redirect("?r=model/normal_task_list");
        }
    }
    //批量删除
    public function actionDel_normaltasks(){
         $id=$_GET['id'];
         $count = WkWitkeyTask::deleteAll("task_id in ($id)");
         if($count>0){
          $this->redirect("?r=model/normal_task_list");
        }else{
           $this->redirect("?r=model/normal_task_list");
        }
    }
    //编辑操作
    public function actionUp_normaltask(){
       $task_id=$_GET['id'];
        $list=WkWitkeyTask::findOne($task_id); 
        return $this->renderPartial("normal_task_up",[
             'list' => $list,
       ]);
    }
    //任务配置（基本配置）
      public function actionNormal_task_config(){
          $list=WkWitkeyModel::findOne(4); 
        return $this->renderPartial("normal_task_config",[
             'list' => $list,
       ]);
    }
    public function actionAdd_normal_task(){
        $data=$_POST['fds'];
        //print_r($data);
        $data['indus_bid']=implode(',',$data['indus_bid']);
        $count= WkWitkeyModel::updateAll($data,['model_id'=>4]);
        if($count>0){
            $this->redirect("?r=model/normal_task_config");
        }else{
            $this->redirect("?r=model/normal_task_config");
        }
    }
     //流程配置
    public function actionNormal_task_control(){
         return $this->renderPartial("normal_task_control");
    }
    //权限配置
    public function actionNormal_task_priv(){
        return $this->renderPartial("normal_task_priv");
    }
    /*
    //订金招标
    */
        //任务管理
    public function actionDeposit_task_list(){
        if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where="model_id=5";
       if(!empty($_GET['search_id'])){
       $where.=" and task_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and task_title like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = WkWitkeyTask::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='model_id=5';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by task_id ".$_GET['ord']."";
            }
            $data = WkWitkeyTask::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' =>$page_size ]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('deposit_task_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]);
    }
     //删除操作
    public function actionDel_deposittask(){
       $task_id=$_GET['id'];
       $count = WkWitkeyTask::findOne($task_id)->delete();
        if($count>0){
          $this->redirect("?r=model/deposit_task_list");
        }else{
           $this->redirect("?r=model/deposit_task_list");
        }
    }
    //批量删除
    public function actionDel_deposittasks(){
         $id=$_GET['id'];
         $count = WkWitkeyTask::deleteAll("task_id in ($id)");
         if($count>0){
          $this->redirect("?r=model/deposit_task_list");
        }else{
           $this->redirect("?r=model/deposit_task_list");
        }
    }
     //编辑操作
    public function actionUp_deposittask(){
       $task_id=$_GET['id'];
        $list=WkWitkeyTask::findOne($task_id); 
        return $this->renderPartial("deposit_task_up",[
             'list' => $list,
       ]);
    }
    //任务配置（基本配置）
      public function actionDeposit_task_config(){
           $list=WkWitkeyModel::findOne(5); 
        return $this->renderPartial("deposit_task_config",[
             'list' => $list,
       ]);
    }
    public function actionAdd_deposit_task(){
        $data=$_POST['fds'];
        //print_r($data);
        $data['indus_bid']=implode(',',$data['indus_bid']);
        $count= WkWitkeyModel::updateAll($data,['model_id'=>5]);
        if($count>0){
            $this->redirect("?r=model/deposit_task_config");
        }else{
            $this->redirect("?r=model/deposit_task_config");
        }
    }
     //流程配置
    public function actionDeposit_task_control(){
         return $this->renderPartial("deposit_task_control");
    }
    //权限配置
    public function actionDeposit_task_priv(){
        return $this->renderPartial("deposit_task_priv");
    }
}
