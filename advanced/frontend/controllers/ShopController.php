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
class ShopController extends Controller
{
    public function actionShop_list(){
        $this->layout='@app/views/layouts/public.php';
        
        
        $indus_all=WkWitkeyIndustry::find()->where(['indus_pid' => '0'])->all();
        $model=new Query(); 
        $data=$model->from(['wk_witkey_service','wk_witkey_industry'])->where("wk_witkey_service.indus_id=wk_witkey_industry.indus_id")->all();
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
            $time=strtotime("-".$_GET['on_time']." day");
            $where.="  and on_time>".$time."";
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
   
  
}
