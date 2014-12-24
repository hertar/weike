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
class ShopController extends Controller
{
    public function actionShop_list(){
       $this->layout='@app/views/layouts/public.php';
       
       
        $model=new Query(); 
        $data=$model->from(['wk_witkey_service','wk_witkey_industry'])->where("wk_witkey_service.indus_id=wk_witkey_industry.indus_id")->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all(); 
         foreach($data as $key=>$val){
            $indus_id=$val['indus_pid'];
            $arr=WkWitkeyIndustry::findOne($indus_id); 
            $data[$key]['tmp']=$arr['indus_name'];
        }
       return $this->render('shop_list',[
       'model' => $data,
       'pages' => $pages,
      
   
       ]);  
   }
   
   //详情页
   public function actionShop_content(){
        $this->layout='@app/views/layouts/public.php';

        $id=$_GET['id'];
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
       
         return $this->render('shop_content',['nav'=>$rows,
                                 'arr'=>$arr,
       ]);   

          
    

   }
}
