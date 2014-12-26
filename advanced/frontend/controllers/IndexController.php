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


class IndexController extends Controller
{
     //public $nav=null ;
     public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
     
     

     //首页
     public function actionIndex(){
        //加载布局文件
        $this->layout='@app/views/layouts/public.php'; 
        $arr=$this->actionIndus();
        $indus=  \app\models\Industry::find()->all();
        $data["indus"]=$indus;  
        $data["arr"]=$arr;
        
        $time=date("Y-m-d");
        $pv= \app\models\Pv::find()->where(["day"=>"$time"])->one();
        
        if($pv){
            $pv->count=$pv["count"]+1;
            $pv->save();
        }else{
            $row=new \app\models\Pv();
            $row->day=$time;
            $row->count=1;
            $row->insert();
        }
        
         //ip库
           require_once '/public/ip/ip.php';
            
            //载入qqwry.dat 
            $url='../../public/ip/qqwry.dat';
            $IpLocation = new \IpLocation($url);
            //获取ip对应信息。getip()
            //郑州ip:222.88.32.134
            //北京ip:222.128.176.179
            //福建福州：218.66.59.145
            //黑龙江哈尔滨：221.212.89.178
            $infoIP= $IpLocation->getlocation('222.128.176.179');
            $arrs= preg_split('/省|市/',iconv('gbk','utf-8',$infoIP['country']));
            //print_r($arrs);
            $pro=$arrs[0];
            $reg= \app\models\Region::find()->andWhere(["region_name"=>"$pro","parent_id"=>"1"])->one();
            //print_r($reg);
            $pro_id=$reg['region_id'];
            $ad=  \app\models\Ad::find()->where(["pro"=>"$pro_id"])->all();
            //print_r($ad);
            $data['ad']=$ad;
            
            $art=  \app\models\Article::find()->where(["art_cat_id"=>17])
                                                                ->orderBy("art_id desc")
                                                                ->limit( 4 )
                                                                ->all();
            $data["art"]=$art;
            return $this->render("index",$data);
        
    }
   //公告
   public function actionArt(){
      $this->layout='@app/views/layouts/public.php'; 
      $art_id=$_GET["art_id"];  
      $row=  \app\models\Article::findone($art_id);
      $row["views"]=$row["views"]+1;
      $row->save();
      $model=new \yii\db\Query();  
      $arr = $model->from(['wk_witkey_article','wk_witkey_article_category'])
                             ->orderBy("is_recommend desc")
                             ->where("wk_witkey_article.art_cat_id=wk_witkey_article_category.art_cat_id")
                             ->all();
       
       $key=md5($row["art_title"]);
        if(Yii::$app->cache->get($key)){
            echo "来自memcache";
            $res=Yii::$app->cache->get($key);
        }else{
            echo "来自数据库";
            $res = $model->from(['wk_witkey_article','wk_witkey_article_category'])                         
                             ->where("wk_witkey_article.art_cat_id=wk_witkey_article_category.art_cat_id and wk_witkey_article.art_id='".$art_id."'")
                             ->one();
            Yii::$app->cache->set($key, $res);
        }         
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
       return $this->render("art",$data);
   }


   //注册
    public function actionRegister(){
          $this->layout='@app/views/layouts/public.php';
       
       return $this->render("register");
    }
    //登陆
    public function actionLogin(){
         $this->layout='@app/views/layouts/public.php';
        
       return $this->render("login");
    }
    
    //判断登陆
    public function actionLogin_pro(){
        //print_r($_POST);die;
        $username=$_POST['txt_account'];
        $password=$_POST['pwd_password'];
      
        $user=  \app\models\Member::find()->where(['username' => "$username"])->one();
       
        if($user){
            //echo 12;
            //print_r($user['password']);
            if(md5($password)==$user['password']){
                 $session=new \yii\web\Session();
                 $session->set('user_name',$username);
                 $session->set('u_id',$user['uid']);
                $this->redirect("index.php?r=index/index");
            } else {
               echo "<script>alert('用户名与密码不匹配');location.href='index.php?r=index/login'</script>" ;
            }
        }else{
            echo "<script>alert('用户名与密码不匹配');location.href='index.php?r=index/login'</script>" ;
        }
    }
    
    //退出登录
    public function actionLogout(){
        $session=new \yii\web\Session;
        $session->remove('user_name');
        $session->remove("uid");
        $this->redirect("index.php?r=index/index");
    }
    
    public function actionCheck_name(){
       //print_r($_GET["name"]);
       $username=$_GET["name"];   
      // print_r($username);die;
        $arr=  \app\models\Member::find()->where(['username' => "$username"])->one();
        if($arr){
            echo "用户名已存在";
            //return true;
        }else{
            echo 1;
        }
    }
    //注册用户
    public function actionRegister_pro(){
        //print_R($_POST);
         $arr=array('A','D','R','S','L','a','d','w','y',1,2,3,4,5,6,7,8,9);
        $str='';
        for($i=0;$i<6;$i++){
                $a=rand(0,10);
                $str=$str.$arr[$a];
        }   
        $model=new  \app\models\Space();
        $model->username=$_POST['txt_account'];
        $model->password=md5($_POST['pwd_password']);
        $model->sec_code=md5($_POST['pwd_password']);
        $model->email=$_POST['txt_email'];
        $model->mobile=$_POST['txt_tel'];
        $model->reg_ip=$_SERVER["REMOTE_ADDR"];
        $model->buyer_level='a:8:{s:8:"score_id";s:1:"1";s:5:"value";i:0;s:5:"title";s:12:"一级雇主";s:5:"level";i:1;s:8:"level_up";i:200;s:10:"level_name";s:6:"等级";s:10:"grade_rate";s:4:"0.00";s:3:"pic";s:157:"<img src="/public/data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2881" align="absmiddle" title="头衔 ：一级雇主&#13;&#10;信誉值：0&#13;&#10;等级：1">";}';
        $model->seller_level='a:8:{s:8:"score_id";s:1:"1";s:5:"value";s:1:"0";s:5:"title";s:12:"一级威客";s:5:"level";i:1;s:8:"level_up";i:200;s:10:"level_name";s:6:"等级";s:10:"grade_rate";s:4:"0.00";s:3:"pic";s:157:"<img src="data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" align="absmiddle" title="头衔 ：一级威客&#13;&#10;能力值：0&#13;&#10;等级：1">";}';
        $model->reg_time= time();
        $mem=new \app\models\Member();
        $mem->username=$_POST['txt_account'];
        $mem->password=md5($_POST['pwd_password']);
        $mem->rand_code=$str;
        $mem->email=$_POST['txt_email'];
        $mem->phone=$_POST["txt_tel"];
        if( $model->insert()&&$mem->insert()){
            $username=$_POST['txt_account'];
                 $user=  \app\models\Member::find()->where(['username' => "$username"])->one();
                 
                 $session=new \yii\web\Session();
                 $session->set('user_name',$username);
                 
                 $session->set('u_id',$user['uid']);
              $this->redirect("index.php?r=index/index");
        }
    }
    
     public function actions(){
        $yzm="".substr(md5(time()),5,4);
        //$_SESSION['captcha']="".substr(md5(time()),5,4);
        $session=new \yii\web\Session();
        $session->set('yzm',$yzm);
        //$_SESSION['captcha']=$yzm;
        //$yzm='1234'.$a;
        return [
                'captcha' => [
                    'class' => 'yii\captcha\CaptchaAction',
                    'fixedVerifyCode' => YII_ENV_TEST ? 'testme' :$yzm,
                ],
        ];
    }
    
    //找回密码
    public function actionGet_password(){
        $this->layout='@app/views/layouts/public.php';
        return $this->render("get_password");
    }
    
    public function actionCheck_username(){
       //print_r($_GET["name"]);
       $username=$_GET["name"];   
      // print_r($username);die;
        $arr=  \app\models\Member::find()->where(['username' => "$username"])->one();
        if($arr){
            echo 1;
            //return true;
        }else{
            echo "用户名不存在";
        }
    }
    public function actionGet_step(){
         $this->layout='@app/views/layouts/public.php';
         //print_r($_POST);
         $name=$_POST["txt_account"];
         $arr=  \app\models\Member::find()->where(['username' => "$name"])->one();
         $id=$arr["uid"];
         $data["id"]=$id;
         $data["name"]=$name;
         return $this->render("get_step",$data);
    }
    
    //发送短信
    public function actionSends(){
        
        $str=$_GET["str"];
        $session=new \yii\web\Session();
        $session->set("get_yzm",$str);
        $tel=$_GET["tel"];       
        $tar_content="尊敬的用户，".$str."是您本次的短信验证码。如不是本人操作，请忽略此信息";        
        $ret = file_get_contents("http://quanapi.sinaapp.com/fetion.php?u=15712847913&p=liulong5656&to=$tel&m=$tar_content"); 
        $retArray = json_decode($ret, true); 
        print_R($retArray["message"]);
    }
    
    //判断验证码
    public function actionReceive(){
        $str=$_GET["get_str"];
        //echo $str;
       $session=new \yii\web\Session();
        if($str==str_replace($session->get("get_yzm"))){
            echo "ok";
        }else{
            echo "no";
        }
    }


    //重置密码
    public function actionRe_password(){
        $this->layout='@app/views/layouts/public.php';
        //print_r($_POST);
        $name=$_POST["user_name"];
        $uid=$_POST["user_id"];
        $data["name"]=$name;
        $data["uid"]=$uid;
        return $this->render("re_password",$data);
    }
    public function actionRe_pro(){
        //print_r($_POST);
         $user = \app\models\Space::findone($_POST['uid']);
        
        $user->password=  md5($_POST['pwd_password']);
        $model=  \app\models\Member::findOne($_POST['uid']);
       
        $model->password=  md5($_POST['pwd_password']);
        if($user->save()&&$model->save()) {
            $this->redirect("index.php?r=index/login");
        }
    }
    /*
    public function actionCheck_tel(){
          $tel=$_GET["tel"];   
      // print_r($username);die;
        $arr=  \app\models\Member::find()->where(['phone' => "$tel"])->one();
        print_r($arr);die;
        if($arr){
            echo 1;
            //return true;
        }else{
            echo "手机号必存在";
        }
    }*/
    
       //任务
       public function actionIndus(){
           $arr=  \app\models\Industry::find()->where(["indus_pid"=>0])->all();
           return $arr;
       }
}
