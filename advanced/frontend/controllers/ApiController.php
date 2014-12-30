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
use app\models\WkWitkeyApiuser;
class ApiController extends Controller
{
    public function actionShop_list(){
        @$username=$_GET['username'];
        @$tmpStr=$_GET['tmpStr'];
        $arr=WkWitkeyApiuser::find()->where(['username'=>$username])->one(); 
        $keys=$arr['keys'];
        $tmpArr = array($username,$keys);
        sort($tmpArr, SORT_STRING);
        $tmpStrs = implode( '|',$tmpArr);
        $tmpStrs = sha1($tmpStrs);    
        if($tmpStrs==$tmpStr){
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
             exit(json_encode($data));
        }else{
             $data="非法操作";  
             exit(json_encode($data));
        }  
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
 
}
