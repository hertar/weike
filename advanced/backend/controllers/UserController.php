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
class UserController extends Controller
{
       public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
    /**
     * @inheritdoc
     */
//用户管理
    //用户列表
    public function actionUser_list(){
      
        $model=new \yii\db\Query();
        $rows = $model->from(['wk_witkey_space','wk_witkey_member_group'])->orderBy("uid desc")->where("wk_witkey_space.group_id=wk_witkey_member_group.group_id")->all();

        $data['row']=$rows;
        return $this->renderPartial("user_list",$data);
    }
    //添加用户
    public function actionUser_add(){
        $group = (new \yii\db\Query())
                ->select('group_id, groupname')
                ->from('wk_witkey_member_group')
                ->all();
        //print_r($group);
        $data['group']=$group;
        return $this->renderPartial("user_add",$data);
    }
    //判断用户名
    public function actionUser_checkname(){
        //print_r($_GET);
        $name=$_GET['name'];

        $user= \app\models\Space::find()->where(['username' => "$name"])->one();
     
       if($user){
           echo "用户名已存在";
        }else{
            echo "<span id='txt_username_msg' class='msg msg_ok'><i></i></span>";
        }
    }
    //添加判断
    public function actionUser_add_pro(){
        //print_r($_POST);
        $arr=array('A','D','R','S','L','a','d','w','y',1,2,3,4,5,6,7,8,9);
        $str='';
        for($i=0;$i<6;$i++){
                $a=rand(0,10);
                $str=$str.$arr[$a];
        }
      
      
        $model=new  \app\models\Space();
        $model->username=$_POST['username'];
        $model->password=md5($_POST['passsword']);
        $model->sec_code=  md5(time());
        $model->email=$_POST['email'];
        $model->group_id=$_POST['group_id'];
        $model->reg_ip=$_SERVER["REMOTE_ADDR"];
        $model->reg_time= time();
        $mem=new \app\models\Member();
        $mem->username=$_POST['username'];
        $mem->password=md5($_POST['passsword']);
        $mem->rand_code=$str;
        $mem->email=$_POST['email'];
        if( $model->insert()&&$mem->insert()){
              $this->redirect("index.php?r=user/user_list");
        }
    }
    /*
      * 手动充值
      */
     public function actionCharge(){
         return $this->renderPartial("charge");
     }
     
     //用户组
     public function actionCustom_list(){
        $model=new \yii\db\Query();
        $rows = $model->from(['wk_witkey_space','wk_witkey_member_group'])->orderBy("uid desc")->where("wk_witkey_space.group_id=wk_witkey_member_group.group_id")->all();

        $data['row']=$rows;
         return $this->renderPartial("custom_list",$data);
     }
   //添加用户组
   public function actionCustom_add(){
       return $this->renderPartial("custom_add");
   }
//系统组管理
    public function actionGroup_list(){
        return $this->renderPartial("group_list");
    }
    //系统组添加
    public function actionGroup_add(){
        return $this->renderPartial("group_add");
    }
    //建议投诉
    public function actionSuggest(){
        return $this->renderPartial("suggest");
    }
}
