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


class UserController extends Controller
{
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
     
    //用户中心
    public function actionIndex(){
        
        $this->layout='@app/views/layouts/user.php';
        $session=new \yii\web\Session();
        $name=$session->get("user_name");
        $arr=\app\models\Space::find()->where(["username"=>"$name"])->one();
        //print_r($arr);
        //print_r($arr["buyer_level"]);
        ///a:8:{s:8:"score_id";s:1:"1";s:5:"value";i:0;s:5:"title";s:12:"一级雇主";s:5:"level";i:1;s:8:"level_up";i:200;s:10:"level_name";s:6:"等级";s:10:"grade_rate";s:4:"0.00";s:3:"pic";s:157:"
        $regb="/<img .*title=\"(.*)\">/sU";
        preg_match_all($regb,$arr["buyer_level"],$resb);
        
        $regs="/<img .*title=\"(.*)\">/sU";
        preg_match_all($regs,$arr["seller_level"],$ress);
       
        $data["resb"]=$resb;
        $data["ress"]=$ress;
        $data["arr"]=$arr;
        return $this->render("index",$data);
   }
  
      //企业设置
   //基本设置、、基本资料
   public function actionSetting(){
       $this->layout='@app/views/layouts/user.php';
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $industry=  \app\models\Industry::find()->where(["indus_pid"=>0])->all();                     
       $arr=\app\models\Space::find()->where(["uid"=>"$uid"])->one();   
       if($arr["user_type"]==2){
       $com=  \app\models\AuthEnterprise::find()->where(["uid"=>"$uid"])->one(); 
       $data["com"]=$com;
       }
       $data["arr"]=$arr;
       $data["industry"]=$industry;
       return $this->render("setting",$data);
       
       
   }
   
    //子行业
   public function actionIndus(){
       //echo 1233;
       //print_r($_POST);
        $pid=$_GET["pid"];
        $industry=  \app\models\Industry::find()->where(["indus_pid"=>"$pid"])->all();
        $count=\app\models\Industry::find()->where(["indus_pid"=>"$pid"])->count();
        for($i=0;$i<$count;$i++){
            $arr[$industry[$i]["indus_id"]]=$industry[$i]["indus_name"];
       }
       $str=  json_encode($arr);
       $callback=$_GET["callback"];
       echo $callback."($str)";
 
   } 
//修改基本资料
    public function actionSetting_edit(){
        //print_r($_POST);
        //die;
        $pid=$_POST["conf"]["indus_pid"];
        $cid=$_POST["conf"]["indus_id"];
        $pindus=  \app\models\Industry::find()->where(["indus_id"=>"$pid"])->one();
        $cindus=  \app\models\Industry::find()->where(["indus_id"=>"$cid"])->one();
        //print_r($pindus);
        $indus=$pindus["indus_name"].",".$cindus["indus_name"];
       
        $session=new \yii\web\Session();
        $uid=$session->get("u_id");
        
        $user = \app\models\Space::findone($uid);
        $user->truename=$_POST["conf"]["truename"];
        $user->birthday=$_POST["conf"]["birthday"];
        $user->user_type=$_POST["conf"]["user_type"];
        $user->sex=$_POST["conf"]["sex"];
        $user->indus_pid=$pid;
        $user->indus_id=$cid;
        $user->skill_ids=$indus;
        $user->summary=$_POST["conf"]["summary"];
        $user->save();
   
             $this->redirect("index.php?r=user/setting");   
    }
    
    public function actionCom(){

          $pid=$_POST["conf"]["indus_pid"];
        $cid=$_POST["conf"]["indus_id"];
        $pindus=  \app\models\Industry::find()->where(["indus_id"=>"$pid"])->one();
        $cindus=  \app\models\Industry::find()->where(["indus_id"=>"$cid"])->one();
      
        $indus=$pindus["indus_name"].",".$cindus["indus_name"];
       
         $session=new \yii\web\Session();
        $uid=$session->get("u_id");
        $coms=\app\models\AuthEnterprise::find()->where(["uid"=>"$uid"])->one();

        if($coms){
           
            $com=\app\models\AuthEnterprise::findOne($coms["enterprise_auth_id"]);
            $com->username=$session->get("user_name");
            $com->uid=$uid;
            $com->company=$_POST["company"];
            $com->licen_num=$_POST["licen_num"];
            $com->legal=$_POST["legal"];
            $com->staff_num=$_POST["staff_num"];
            $com->run_years=$_POST["run_years"];
            $com->url=$_POST["url"];
            $user = \app\models\Space::findone($uid);
            $user->indus_pid=$pid;
            $user->indus_id=$cid;
            $user->skill_ids=$indus;
            $user->address=$_POST["address"];
            $user->save();
            $com->update();
        }else{
            $comp=new \app\models\AuthEnterprise();
            $comp->username=$session->get("user_name");
            $comp->uid=$uid;
            $comp->company=$_POST["company"];
            $comp->licen_num=$_POST["licen_num"];
            $comp->legal=$_POST["legal"];
            $comp->staff_num=$_POST["staff_num"];
            $comp->run_years=$_POST["run_years"];
            $comp->url=$_POST["url"];
            $user = \app\models\Space::findone($uid);
            $user->indus_pid=$pid;
            $user->indus_id=$cid;
            $user->skill_ids=$indus;
            $user->save();
            $comp->insert();
        }
         $this->redirect("index.php?r=user/setting");   
    }

    //联系方式
   public function actionSetting_contact(){
       $this->layout="@app/views/layouts/user.php";
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $arr=\app\models\Space::find()->where(["uid"=>"$uid"])->one();
       
       $region=  \app\models\Region::find()->where(["parent_id"=>1])->all();
       $data["region"]=$region;
       $data["arr"]=$arr;
       
       return $this->render("setting_contact",$data);
   }
   
   public function actionSetting_contact_pro(){
       //print_r($_POST);
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=\app\models\Space::findOne($uid);
       $user->email=$_POST["conf"]["email"];
       $user->phone=$_POST["conf"]["phone"];
       $user->mobile=$_POST["conf"]["mobile"];
       $user->qq=$_POST["conf"]["qq"];
       $user->msn=$_POST["conf"]["msn"];
       $user->residency="贵州省,毕节市,金沙县";
       $user->save();
       $this->redirect("index.php?r=user/setting");  
   }
   
   

   //威科技能
   public function actionSetting_skill(){
        $this->layout="@app/views/layouts/user.php";
       return $this->render("setting_skill");
   }
   
   //资质证书
   public function actionSetting_cert(){
        $this->layout="@app/views/layouts/user.php";
       return $this->render("setting_cert");
   }
   //头像设置
   
    public function actionSetting_pic(){
       $this->layout='@app/views/layouts/user.php';
       return $this->render("setting_pic");
   }
   
   public function actionSetting_pic_show(){
       //print_r($_POST);
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=\app\models\Space::findOne($uid);
       $img=$_POST["img"];
       $str=substr($img,strripos($img,"/"));
       
       $user->images=$str;
       if($user->save()){
          
           echo "ok";
       }
       
   }

   public function actionSetting_pic_up(){
       $this->layout='@app/views/layouts/user.php';
       return $this->render("setting_pic_up");
   }

      //安全设置
   //更改密码
   public function actionSetting_safe(){
         $this->layout='@app/views/layouts/user.php';
        
         return $this->render("setting_safe");
   }
   
   public function actionSetting_safe_old(){
      
         $session=new \yii\web\Session();
         $uid=$session->get("u_id");
         $arr=  \app\models\Member::findone($uid);
         if(md5($_GET["pwd"])==$arr["password"]){
             echo true;
         }else{
             echo "原密码输入错误";
         }
   }
   
   public function actionSetting_safe_change(){
       $pwd=$_POST["new_password"];
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=\app\models\Space::findOne($uid);
       $mem=  \app\models\Member::findone($uid);
       $user->password=md5($pwd);
       $mem->password=md5($pwd);
       if($user->save()&&$mem->save()){     
            $session->remove('user_name');
            $session->remove("u_id");
           echo "<script>alert('密码修改成功！请重新登陆');location.href='index.php?r=index/login'</script>";
       }
   }

      //更换安全密码
   public function actionSetting_sec_code(){
         $this->layout='@app/views/layouts/user.php';
         return $this->render("setting_sec_code");
   }
   
   public function actionSetting_sec_code_old(){
         
         $session=new \yii\web\Session();
         $uid=$session->get("u_id");
         $arr=  \app\models\Space::findone($uid);
         if(md5($_GET["pwd"])==$arr["sec_code"]){
             echo true;
         }else{
             echo "原安全密码输入错误";
         }
   }
   
    public function actionSetting_sec_change(){
 
       $pwd=$_POST["new_sec_code"];
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=\app\models\Space::findOne($uid);
       $user->sec_code=md5($pwd);    
       if($user->save()){     
            
           echo "<script>alert('安全码修改成功！');location.href='index.php?r=user/setting_sec_code'</script>";
       }
   }
   
   //店铺设置
   
   public function actionSetting_space(){
       $this->layout='@app/views/layouts/user.php';
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=  \app\models\Space::findone($uid);
       if($user['user_type']!=""){
           $this->redirect("index.php?r=user/setting_space_open");
       }
       $count=  \app\models\Shop::find()->count();
       $shop=\app\models\Shop::find()->where(["uid"=>"$uid"])->one();
       $data["shop"]=$shop;
       $data["count"]=$count;
       
       $data["user_type"]=$user["user_type"];
       return $this->render("setting_space",$data);
   }
   
   public function actionSetting_space_open(){
       $this->layout='@app/views/layouts/user.php';
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $shop=\app\models\Shop::find()->where(["uid"=>"$uid"])->one();
       $data["shop"]=$shop;
       return $this->render("setting_space_open",$data);
   }
   
   public function actionSetting_space_add(){
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $name=$session->get("user_name");
       $user=\app\models\Space::findone($uid);
       $user_type=$user["user_type"];
       $arr=\app\models\Shop::find()->where(["uid"=>"$uid"])->one();
       if($arr){
            $shop=\app\models\Shop::findone($arr["shop_id"]);
            $shop->uid=$uid;
            $shop->username=$name;
            $shop->shop_type=$user_type;
            $shop->shop_name=$_POST["shop_name"];
            $shop->shop_slogans=$_POST["shop_slogans"];
            $shop->on_time=time();
       }else{
            $shop=new \app\models\Shop();
            $shop->uid=$uid;
            $shop->username=$name;
            $shop->shop_type=$user_type;
            $shop->shop_name=$_POST["shop_name"];
            $shop->shop_slogans=$_POST["shop_slogans"];
            $shop->on_time=time();
       }
       if($shop->save()){
           $this->redirect("index.php?r=user/setting_space_open");
       }
   }
   
   //财务管理
   public function actionFinance(){
      $this->layout='@app/views/layouts/user.php';
       $session=new \yii\web\Session();
       $uid=$session->get("u_id");
       $user=\app\models\Space::find()->where(["uid"=>"$uid"])->one();
       $data["arr"]=$user;
       return $this->render("finance",$data);
   }
}
                                                                                                                                              