<?php
namespace frontend\controllers;
use yii\db\Query;
use yii\data\Pagination;
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
use app\models\WkWitkeyIndustry;
use app\models\WkWitkeyService;
use app\models\WkWitkeyComment;
use app\models\WkWitkeyOrder;
class ShopController extends Controller
{ public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法 
    public function actionShop_list(){
        $this->layout='@app/views/layouts/public.php'; 
        $indus_all=WkWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();
        $model=new Query(); 
        $data=$model->from(['wk_witkey_service','wk_witkey_industry'])->where("wk_witkey_service.indus_id=wk_witkey_industry.indus_id and service_status=1")->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all(); 
        foreach($data as $key=>$val){
            $indus_id=$val['indus_pid'];
            $arr=WkWitkeyIndustry::findOne($indus_id); 
            $data[$key]['tmp']=$arr['indus_name'];
        }
       return $this->renderPartial('shop_list',[
       'model' => $data,
       'pages' => $pages,
       'indus_all'=> $indus_all,   
       ]);  
   }
 //商品搜索
  public function actionShop_search(){
         $this->layout='@app/views/layouts/public.php';
      $where='1=1';
      $can=[];
      if(!empty($_GET['indus_pid'])){
        
           $where.=" and wk_witkey_service.indus_pid=".$_GET['indus_pid']."  ";
           $can=['indus_pid'=>$_GET['indus_pid']];
      }
      if($_GET['service_type']!=''){
          $where.=" and  service_type=".$_GET['service_type']."  ";
           $can=['service_type'=>$_GET['service_type']];
      }
         if($_GET['min']!=''){
               $can=['min'=>$_GET['min']];             
          $where.=" and ".$_GET['min']."< price ";
      }
      if($_GET['max']!=''){
            $can=['max'=>$_GET['max']];
            $where.="  and price<".$_GET['max']."";
      }
         if($_GET['on_time']!=''){
            $can=['on_time'=>$_GET['on_time']];
                    if($_GET['on_time']=='1'){
                      
                        $time=strtotime(" - 1 day");
                    }else if($_GET['on_time']=='3'){
                          
                       $time=strtotime(" - 3 day"); 
                    }else if($_GET['on_time']=='7'){
                          
                       $time=strtotime(" - 7 day"); 
                    }else if($_GET['on_time']=='30'){
                          
                       $time=strtotime(" - 30 day"); 
                    }
       
            $where.="  and wk_witkey_service.on_time>".$time."";
      }
   
      $indus_all=WkWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();
        $model=new Query(); 
        $data=$model->from(['wk_witkey_service','wk_witkey_industry'])->where("wk_witkey_service.indus_id=wk_witkey_industry.indus_id and $where")->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all(); 
         foreach($data as $key=>$val){
            $indus_id=$val['indus_pid'];
            $arr=WkWitkeyIndustry::findOne($indus_id); 
            $data[$key]['tmp']=$arr['indus_name'];
        }
       
       return $this->renderPartial('shop_list',[
       'model' => $data,
       'pages' => $pages,
       'indus_all'=> $indus_all,   
         'can'=>$can,
       ]);      
      
  }  
   //详情页
   public function actionShop_content(){ 
     
        $id=$_GET['id'];
        $h_conunt=WkWitkeyComment::find()->andWhere(['obj_id' =>$id])->count('comment_id');
        $t_list=WkWitkeyComment::find()->where(['obj_id' => $id])->all();  
        $arr=WkWitkeyService::findOne($id); 
        $indus_id=$arr['indus_id'];
        $indus_pid=$arr['indus_pid'];
        $indus_id=WkWitkeyIndustry::findOne($indus_id); 
        $arr['indus_id']=$indus_id['indus_name'];
        $indus_pid=WkWitkeyIndustry::findOne($indus_pid); 
        $arr['indus_pid']=$indus_ids['indus_name']; 
        $rows = (new \yii\db\Query())
              ->select('nav_title, nav_url')
              ->from('wk_witkey_nav')
              ->all(); 
         return $this->renderPartial('shop_content',['nav'=>$rows, 'arr'=>$arr,'h_conunt'=>$h_conunt,'t_list'=>$t_list]);   
   }
    //留言
   public function actionShop_comment(){
        $session=new \yii\web\Session();
        $service_id=$_GET['service_id']; 
        $username= $session->get("user_name");
        $uid=$session->get("u_id");
        $content=$_GET['content'];
         $model = new WkWitkeyComment();
        $model->obj_id =  $service_id;
        $model->uid =  $uid;
        $model->username =$username;
        $model->content = $content;
        $model->on_time = time();
        $model->insert();
        $list=WkWitkeyComment::find()->where(['obj_id' => $service_id])->all();  
        $str='';
        foreach($list as $key=>$val){
          $str.="<div class='ly1 mt_10 mb_10' id='p_4'>
                        <div class='top1 clearfix'>
                                        <a href='index.php?do=space&member_id=1' class='block fl_l'>
                                            <img src='http://www.weike1.com/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>
            <div class='operate po_ab hidden'> 
            <a href='javascript:;' onclick='comment_del()'><span class='icon16 trash'></span>删除</a>
            <a href='javascript:;' onclick='comment_reply()'><span class='icon16 spechbubble'></span>回复</a>
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
        $h_count=WkWitkeyComment::find()->andWhere(['obj_id' =>$service_id])->count('comment_id');  
        return $str.'@#@'.$h_count;
   }
   //交易记录
   public function actionShop_sale(){   
       $service_id=$_GET['id'];  
   }
  //购买商品
   public function actionShop_buy(){
        $this->layout='@app/views/layouts/public.php';
        $service_id=$_GET['service_id'];  
        $where="wk_witkey_service.service_id=".$service_id."";
        $model=new Query();
        $res=$model->from(['wk_witkey_service','wk_witkey_space'])->where("wk_witkey_service.uid=wk_witkey_space.uid and $where")->all();
        return $this->render('shop_buy',['arr'=>$res]);
   }
 //生成订单
   public function actionShop_order(){
        $this->layout='@app/views/layouts/public.php';
        $session=new \yii\web\Session();
        $service_id=$_GET['service_id']; 
        $where="service_id=".$service_id."";
        $username= $session->get("user_name");
        $uid=$session->get("u_id");
        $content=$_GET['content'];
        $model = new WkWitkeyComment();
        if($content){
        $model->obj_id =  $service_id;
        $model->uid =  $uid;
        $model->username =$username;
        $model->content = $content;
        $model->on_time = time();
        $model->insert(); 
        }
        $model=new Query();
        $res=$model->from(['wk_witkey_service','wk_witkey_space'])->where("wk_witkey_service.uid=wk_witkey_space.uid and $where")->all();
        $time=time();
        $model = new WkWitkeyOrder();
        $model->order_name =$res[0]['title'];
        $model->order_time =$time;
        $model->order_amount =$res[0]['price'];
      $model->order_status='0';
        $model->order_uid = $uid;
        $model->order_username = $username;
        $model->seller_uid =$res[0]['uid'];
        $model->seller_username =$res[0]['username'];
        $model->insert(); 
        $arr=WkWitkeyOrder::find()->where(['order_name' =>$res[0]['title'],'order_time'=>$time,'order_uid'=>$uid])->one(); 
        return $this->render('shop_order',['arr'=>$arr]); 
   }
   
   //取消订单
   public function actionShop_order_q(){
       $order_id=$_GET['order_id'];
       $a=WkWitkeyOrder::findOne($order_id)->delete(); 
        if($a){
           echo 1;
       }else{
           echo 0;   
       }
   }
//发布商品
   public  function actionShop_add(){
         $indus_all=WkWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();
         return $this->renderPartial('shop_add',['indus_all'=>$indus_all]); 
   }
  //分类二级
   public function actionShop_indus(){
         $indus_id=$_GET['indus_id'];
         $arr=WkWitkeyIndustry::find()->where(['indus_pid' => $indus_id])->all(); 
         $str="<option value=''>请选择子分类</option>";
         foreach($arr as $key=>$val){
         $str.="<option value=".$val['indus_id'].">".$val['indus_name']."</option>";        
         }
     echo $str;    
   }
   
   public function actionShop_add_pro(){    
       echo $_FILES['upload']['name'];
      
        $newpaths="../../public/data/uploads/".$_FILES['upload']['name'];
        $newpath="data/uploads/".$_FILES['upload']['name'];
     
        move_uploaded_file($_FILES['upload']['tmp_name'],$newpaths);
        return $this->renderPartial('shop_add_pro',['service'=>$_POST,'file'=>$_FILES,'newpath'=>$newpath]);       
   }
   
    public function actionShop_add_pros(){ 
        $session=new \yii\web\Session();
        $model = new WkWitkeyService();
        $model->username=$session->get("user_name");
        $model->uid=$session->get("u_id");
        $model->indus_pid=$_POST['indus_pid'];
        $model->indus_id=$_POST['indus_id'];
        $model->title=$_POST['txt_title'];
          $model->content=$_POST['tar_content'];
        $model->price=$_POST['txt_price'];
        $model->pic=$_POST['filename'];
        $model->service_status=0;
        $model->on_time=time();
        $model->insert();
        return $this->renderPartial('shop_add_pros');       
   }
}
