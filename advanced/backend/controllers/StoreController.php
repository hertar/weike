<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

use app\models\Shop;
use yii\data\Pagination;
use app\models\Control;
use yii\db\ActiveRecord;



class StoreController extends Controller
{
    /**
     * @inheritdoc
     */
    //店铺管理
    //店铺列表
    public function actionStore_list(){

        if(!empty($_GET['search_id'])||!empty($_GET['search_title'])){
       $ord='asc';
       $id=$_GET['search_id'];
       $title=$_GET['search_title'];
       $where='';
       $where.='is_close=1';
       if(!empty($_GET['search_id'])){
       $where.=" and shop_id = ".$id."";
       }
        if(!empty($_GET['search_title'])){
       $where.=" and shop_name like '%".$title."%'";
        }
       $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
       $data = Shop::find()->where($where); 
       }else{
           $page_size=isset($_GET['pagesize'])?$_GET['pagesize']:10;
           $where='';
           $where.='is_close=1';
           $ord=isset($_GET['ord'])?$_GET['ord']:'asc';
            if(!empty($_GET['ord'])){
                $where.=" order by shop_id ".$_GET['ord']."";
            }
            $data = Shop::find()->where($where); 
       }
       $total=$data->count();
       $pages = new Pagination(['totalCount' =>$total, 'pageSize' =>$page_size ]);
       $list = $data->offset($pages->offset)->limit($pages->limit)->all();
       return $this->renderPartial('store_list',[
             'list' => $list,
             'pages' => $pages,
             'pagesize'=>$page_size,
             'ord'=>$ord,
       ]);
    }
    //修改状态
    public function actionUp_status(){
        $id=$_GET['id'];
        $stu=$_GET['stu'];
        //echo $id.$stu;
        $user = Shop::findone($id);
        $user->shop_status=$stu;
         if($user->save()) {
            $this->redirect("?r=store/store_list");
        }
    }
    //批量删除
    public function actionDel_shop(){
         $id=$_GET['id'];
         $count = Shop::deleteAll("shop_id in ($id)");
         if($count>0){
          $this->redirect("?r=store/store_list");
        }else{
           $this->redirect("?r=store/store_list");
        }
    }
    //编辑模式
    public function actionUp_shop(){
       $shop_id=$_GET['id'];
        $list=Shop::findOne($shop_id); 
        return $this->renderPartial("store_up",[
             'list' => $list,
       ]);
    }

    

    /*
     * 威客作品
     */
    
    //订单管理
    public function actionOrder(){
        return $this->renderPartial("order");
    }
    //作品管理
    public function actionWorks(){
        return $this->renderPartial("works");
    }
    
    //作品配置
    public function actionWorks_config(){
        return $this->renderPartial("works_config");
    }
    //流程配置
    public function actionWorks_control(){
        return $this->renderPartial("works_control");
    }
    
    //威客服务
    //订单管理
public function actionServer_order(){
    return $this->renderPartial("server_order");
}
//服务管理
    public function actionServer(){
        return $this->renderPartial("server");
    }
    //服务配置
    public function actionServer_config(){
        return $this->renderPartial("server_config");
    }
    //流程配置
    public function actionServer_control(){
        return $this->renderPartial("server_control");
    }
}
