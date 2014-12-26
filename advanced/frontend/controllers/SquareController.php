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
use yii\db\Query;
use yii\data\Pagination; 
use app\models\WkWitkeyOrder;
use app\models\WkWitkeySpace;
use app\models\WkWitkeyService;
use app\models\WkWitkeyTask;
class SquareController extends Controller
{
    public function actionSquare_list(){
        $this->layout='@app/views/layouts/public.php'; 
      
    if($_GET['type']=='all' || empty($_GET['type'])){
        
    $model=new Query();
    $data = $model->from(['wk_witkey_service'])->where("1=1 order by service_id desc")->all();
    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
    $data=$model->offset($pages->offset)->limit($pages->limit)->all(); 
    foreach($data as $key=>$val){
        @$arr=WkWitkeyOrder::find()->where(['order_name' => $val['title']])->one();
        if(@$arr['order_username']){
            @$data[$key]['order_username']=$arr['order_username'];
        }
         @$arr=WkWitkeySpace::find()->where(['uid' => $val['uid']])->one();
        if(@$arr['images']){
            @$data[$key]['images']=$arr['images'];
        }
    }
    return $this->renderPartial("square_list",['model' =>$data,'pages' => $pages,]); 
     }else if($_GET['type']=='free_service'){
                   $model=new Query();
                    $data = $model->from(['wk_witkey_service'])->where("service_type='0'  order by service_id desc")->all();
                    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
                    $data=$model->offset($pages->offset)->limit($pages->limit)->all(); 
                    foreach($data as $key=>$val){
                   @$arr=WkWitkeyOrder::find()->where(['order_name' => $val['title']])->one();
        if(@$arr['order_username']){
            @$data[$key]['order_username']=$arr['order_username'];
        }
         @$arr=WkWitkeySpace::find()->where(['uid' => $val['uid']])->one();
        if(@$arr['images']){
            @$data[$key]['images']=$arr['images'];
        }
    }
    return $this->renderPartial("square_list",['model' =>$data,'pages' => $pages,]); 
   }
      
   }
   public function actionSquare_task(){
                     $this->layout='@app/views/layouts/public.php'; 
                    $model=new Query();
                    $data = $model->from(['wk_witkey_task'])->where("task_status='10'  order by task_id desc")->all();
                    $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
                    $datas=$model->offset($pages->offset)->limit($pages->limit)->all(); 
                    foreach($datas as $key=>$val){
                     @$arr=WkWitkeySpace::find()->where(['uid' => $val['uid']])->one();
                 if($arr['images']){
                     $datas[$key]['images']=$arr['images'];
               }
            }
                    return $this->renderPartial("square_task",['datas' =>$datas,'pages' => $pages,]);
 
     }
   //添加免费需求
   public function actionSquare_add(){
        $session=new \yii\web\Session();
        $xuqiu=$_GET['xuqiu'];
        $txt_title=$_GET['txt_title'];
        $tar_content=$_GET['tar_content'];   
        if($xuqiu=="免费服务"){
            $service = new WkWitkeyService();
            $service->username=$session->get("user_name");
            $service->uid=$session->get("u_id");
            $service->title=$txt_title;
            $service->content=$tar_content;
            $service->price='0';
            $service->service_type ="0";  
            $service->on_time=time(); 
            $a=$service->insert();
            if($a){
        $model=new Query();
         $data = $model->from(['wk_witkey_service'])->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->where("1=1 order by service_id desc")->all(); 
        foreach(@$data as $key=>$val){
        @$arr=WkWitkeyOrder::find()->where(['order_name' => $val['title']])->one();
        if($arr['order_username']){
            $data[$key]['order_username']=$arr['order_username'];
        }
         @$arr=WkWitkeySpace::find()->where(['uid' => $val['uid']])->one();
        if($arr['images']){
            $data[$key]['images']=$arr['images'];
        }
    }

    $str='';
   foreach($data as $key=>$val){
$str.="<li class='clearfix frame' >
<div class='info_van clearfix'>
<a href='index.php?do=space&member_id=2' target='_blank'>
<img src='/public/data/avatar/system/".$val['images']."' uid='2' class='pic_small'><p class='c999'>".$val['username']."</p>
</a>
</div>
<div class='info_body clearfix'>
<div>
<span class='sale mr_5'>出售 </span>
<a href='index.php?r=shop/shop_content&id=".$val['service_id']."  class='task_info' target='_blank'>".$val['title']."</a>

<span class='ml_5 mr_5 c999'>";
                                                            $startdate=date('Y-m-d H:i:s',time());
                                                            $enddate=date('Y-m-d H:i:s',$val['on_time']);
                                                            $hour=floor((strtotime($startdate)-strtotime($enddate))%86400/3600);
                                                            if($hour==0){
                                                  $str.="&nbsp;刚刚" ;   $str.="".$val['username']."";
                                                            }  else{
                                                                $str.="在".$hour."小时前";
                                                                $str.="".$val['username']."";
                                                            }
                                                             $str.="</a><span class='c999'>发布</span></span>
<a href='index.php?do=space&member_id=6' target='_blank'>                         ".@$val['order_name']."</a>    <span class='c999'>购买</span>
</div>
<div>售价：<span class='mr_5 org'>
￥".$val['price']."元</span>来自：<span>";
                                                            if($val['service_type']=='1'){
    $str.="威客服务";
}else if($val['service_type']=='0'){
     $str.="免费服务"; 
}$str.="</span>
</div>
<div class='info_talk clearfix'>
<a href='javascript:void(0);' class='border_r_c'><span>".$val['leave_num']."</span>留言</a>
<a href='javascript:void(0);' class='border_r_c'><span>0</span>收藏</a>
<a href='javascript:void(0)' class='border_r_c'><span>1</span>".$val['sale_num']."售出</a>
</div>
</div>
</li>";
 }
   echo $str;
              }else{
                echo 2;    
             } 
         }else{   
            $task = new WkWitkeyTask();
          $task->username=$session->get("user_name");
         $task->uid=$session->get("u_id");
            $task->task_title=$txt_title;
            $task->task_desc=$tar_content;
            $task->task_status =10;  
            $task->sub_time=time(); 
            $a= $task->insert();
           
           // echo $tar_content."++".$txt_title."++".$session->get("u_id");die;
            if($a){
                echo 3;
            }else{  
                echo 4;
            }
         }
   }
   
}
