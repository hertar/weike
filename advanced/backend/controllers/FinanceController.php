<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\CookieCollection;
use app\views\layouts\publics;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\web\Session;
use app\models\WkWitkeyFinance;
/**
 * Site controller
 */
class FinanceController extends Controller
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
     /*
      * 财务概况
      */
     public function actionRevenue(){
         return $this->renderPartial("revenue");
     }
    /*
      * 财务明细
      */
     public function actionDetail(){
        $this->layout='@app/views/layouts/publics.php';
        $model=new Query();
        $data = $model->from(['wk_witkey_finance'])->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>9]);
        $data=$model->offset($pages->offset)->limit($pages->limit)->all();     
        return $this->render('detail',[
        'model' => $data,
        'pages' => $pages,
        ]);
     }
     public function actionDetail_search(){
    $this->layout='@app/views/layouts/publics.php';
    $session=new session();
    $fina_id=@$_POST['w']['fina_id'];
    $username=@$_POST['w']['username'];
    $fina_action=@$_POST['w']['fina_action'];
    $paixu=@$_POST['paixu'];
    $fina_type=@$_POST['w']['fina_type'];
    $zengjian=@$_POST['zengjian'];
    $page_size=@$_POST['w']['page_size'];
    $where="1";   
if(!empty($bulletin)&&empty($fina_id)&&empty($username)
        &&empty($fina_action)&&empty($paixu)&&empty($page_size)
        &&empty($zengjian)&&empty($fina_type)){
$session->set('bulletin',$session->get('bulletin'));
}else{
        if(!empty($fina_action)){
                $where.=" and fina_action like '%$fina_action%'";
        }
        
          if(!empty($fina_type)){
                $where.=" and fina_type like '%$fina_type%'";
        }
           if(!empty($username)){
                $where.=" and username like '%$username%'";
        }
          if(!empty($fina_id)){
                $where.=" and fina_id like '%$fina_id%'";
        }
            if(!empty($fina_type)){
                $where.=" and fina_type like '%$fina_type%'";
        }
        
        if(!empty($paixu)&&$paixu=="fina_id"){
                if($zengjian=="desc"){
                        $where.=" order by fina_id desc";
                }else{
                        $where.=" order by fina_id asc ";
                }
        }
        if(!empty($paixu)&&$paixu=="fina_time"){
                if($zengjian=="desc"){
                        $where.=" order by pub_time desc";
                }else{
                        $where.=" order by pub_time asc";
                }
        }  
         $session->set('bulletin',$where);
}
    $a=$session->get('bulletin');
    $data=WkWitkeyFinance::find()->andWhere($a);	
    $pages =new Pagination(['totalCount'=>$data->count(),'pageSize'=>$page_size]);	
    $model = $data->offset($pages->offset)->limit($pages->limit)->all();
    return $this->renderPartial('detail',['model'=>$model,'pages'=>$pages]);
}
     //财务明细删除
     public function actionFinance_delall(){
        $id=$_GET['id'];
        $a=WkWitkeyFinance::findOne($id)->delete(); 
       if($a){
           echo 1;
       }else{
           echo 0;   
       }
     }
     //财务明细批量删除
     public function actionDetail_delall(){
         $id=$_GET['id'];
         $count = WkWitkeyFinance::deleteAll("fina_id in ($id)");
         if($count>0){
         echo 1;
        }else{
         echo 0;
        }
     }
    /*
      * 财务分析
      */
     public function actionReport(){
         return $this->renderPartial("report");
     }
    /*
      * 充值审核
      */
     public function actionRecharge(){
         return $this->renderPartial("recharge");
     }
    /*
      * 提现审核
      */
     public function actionWithdraw(){
         return $this->renderPartial("withdraw");
     }
    
}
