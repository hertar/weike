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
use app\models\Task;
use app\models\Comment;
use app\models\Industry;
use app\models\Model;
use yii\db\ActiveRecord;
use yii\db\Query;

class TaskController extends Controller
{
    //任务大厅
    public function actionTask_list(){
        
        $this->layout='@app/views/layouts/public.php';

        $session=new \yii\web\Session();
        $fenlei=Industry::find()->where(['indus_pid'=>0])->all();
        $moshi= Model::find()->all();
        $can=[];
        $where='1=1';
        if(@$_GET['fl']){
            $can=['fl'=>$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $indus_id=$_GET['fl'];
            //echo $indus_id;die;
            $indus=Industry::findOne($indus_id);
            //print_r($indus['indus_name']);die;
             $session->set("fl",$indus['indus_name']);
             //echo $session->get('indus');die;
            $where.=" and indus_pid=$indus_id";
        }
        if(@$_GET['ms']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>@$_GET['min'],'max'=>@$_GET['max']];
            $model_id=$_GET['ms']; 
            $indus=Model::findOne($model_id);
             $session->set("ms",$indus['model_name']);
            $where.=" and wk_witkey_task.model_id=$model_id";
        }
        if(@$_GET['min'] && @$_GET['max']){
            $can=['fl'=>@$_GET['fl'],'ms'=>@$_GET['ms'],'min'=>$_GET['min'],'max'=>@$_GET['max']];
            $min=$_GET['min'];
             $max=$_GET['max'];
            //$where.=" ";
            $where.=" and real_cash>$min and task_cash<=$max";
            $session->set("sj",$min."-".$max);
        }
        $model=new Query();
        $data1 = $model->from(['wk_witkey_task','wk_witkey_model'])->where("wk_witkey_task.model_id=wk_witkey_model.model_id and $where order by end_time desc")->all();
        //print_r($_GET);//die;
        $total=$model->count();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>10]);
        $data1=$model->offset($pages->offset)->limit($pages->limit)->all();
        //print_r($data1);
        return $this->render('task_list',['total'=>$total,'fenlei'=>$fenlei,'moshi'=>$moshi,'list'=>$data1,'pages' => $pages,'can'=>$can]);
   }
   public function actionTask_up(){
        
        $this->layout='@app/views/layouts/public.php';
         
       $id=$_GET['id'];
       $list= Task::findone($id);
       $huifu_count=Comment::find()->andWhere(['p_id' =>$id])->count('comment_id');
       $t_list=Comment::find()->where(['p_id' => $id])->all();  
       return $this->render('task_up',[
             'list' => $list,
             'h_count'=>$huifu_count,
             't_list'=>$t_list,
       ]);

        
        return $this->render("task_list");

   }
   //添加留言
   public function actionComment_add(){
       $session=new \yii\web\Session();
        if(empty($session->get("user_name"))){
            return 1;
            $this->redirect("?r=index/login");
        }
        $task_id=$_GET['id'];
        if($_GET['key']==1){
        $t=$_GET['t'];
        $model = new Comment();
        $model->p_id = $task_id;
        $model->uid = $session->get("u_id");
        $model->username =$session->get("user_name");
        $model->content = $t;
        $model->on_time = time();
        $model->insert();
        }
        $list=Comment::find()->where(['p_id' => $task_id])->all();  
        $str='';
        foreach($list as $key=>$val){
          $str.="<div class='ly1 mt_10 mb_10' id='p_4'>
                        <div class='top1 clearfix'>
                                        <a href='index.php?do=space&member_id=1' class='block fl_l'>
                                            <img src='http://www.weike1.com/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>
            <div class='operate po_ab hidden'>";
          if($val['uid']== $session->get("u_id")){
            $str.="<a onclick=del_comment(".$val['comment_id'].",".$val['p_id'].") ><span class='icon16 trash'></span>删除</a>";
          }
            $str.="<a href='javascript:;' onclick='comment_reply()'><span class='icon16 spechbubble'></span>回复</a>
                                        </div>
            <div class='comment_detail'>
            <a href='index.php?do=space&member_id=1'>".$val['username']."</a>
                                        <span>".date("Y-m-d H:i:s",$val['on_time'])."</span>
                                         <p class='font14 ws_prewrap ws_break'>".$val['content']."</p> 
                                    </div>
            </div>
            <div class='cc pl_30 mt_10' id='p_reply_4'>
            </div>
            </div>";
        }
        $h_count=Comment::find()->andWhere(['p_id' =>$task_id])->count('comment_id');  
        return $str.'@#@'.$h_count;
    }
    //删除回复
    public function actionDel_comment(){
         $session=new \yii\web\Session(); 
        $comment_id = $_GET['comment_id'];
        Comment::findOne($comment_id)->delete();
        $task_id=$_GET['id'];
        $list=Comment::find()->where(['p_id' => $task_id])->all();  
        $str='';
        foreach($list as $key=>$val){
          $str.="<div class='ly1 mt_10 mb_10' id='p_4'>
                        <div class='top1 clearfix'>
                                        <a href='index.php?do=space&member_id=1' class='block fl_l'>
                                            <img src='http://www.weike1.com/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>
            <div class='operate po_ab hidden'>";
          if($val['uid']== $session->get("u_id")){
            $str.="<a onclick=del_comment(".$val['comment_id'].",".$val['p_id'].") onclick='comment_del()'><span class='icon16 trash'></span>删除</a>";
          }
            $str.="<a href='javascript:;' onclick='comment_reply()'><span class='icon16 spechbubble'></span>回复</a>
                                        </div>
            <div class='comment_detail'>
            <a href='index.php?do=space&member_id=1'>".$val['username']."</a>
                                        <span>".date("Y-m-d H:i:s",$val['on_time'])."</span>
                                         <p class='font14 ws_prewrap ws_break'>".$val['content']."</p> 
                                    </div>
            </div>
            <div class='cc pl_30 mt_10' id='p_reply_4'>
            </div>
            </div>";
        }
        $h_count=Comment::find()->andWhere(['p_id' =>$task_id])->count('comment_id');  
        return $str.'@#@'.$h_count;
    }
}
