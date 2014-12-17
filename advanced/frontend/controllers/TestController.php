<?php
namespace frontend\controllers;
use Yii;
use common\models\Node;
use common\models\Goods;
use common\models\GoodsFind;
use common\models\GoodsSearch;
use yii\web\Controller;
 
 use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class TestController extends Controller
{
   
    public function actionIndex()
    {
//       $customer= Goods::find()->joinWith('brand')->where('goods_id=2')->all();
//        //$model=$customer[0];
//       var_dump($customer[0]->brand->brand_name);die;
       


//增加数据
//       $customer = new Node();
//$customer->name = 'James';
//$customer->pid = 2;
//$customer->level = 1;
//var_dump($customer->save());die;

        //修改数据
//         $customer = new Node();
//         $list=Node::findOne(1);
//         $list->name='me';
//         $list->title='ddd';
//         var_dump($list->save());die;
        //删除数据
       // var_dump(Node::delete());die;
      // $a= Node::findone(1);
        //deleteAll('age > :age AND gender = :gender', [':age' => 20, ':gender' => 'M']);
       // var_dump(Node::deleteAll('id > :age',[':age' => 28]));die; 
      // var_dump(Node::deleteAll());die;
        //查询数据
//         $all=Node::findAll([1,8]);
//        var_dump($all);die;
//        $customer->name = 'Qiang';
//        $customer->save();
//        $list= Node::find()->asarray()->where(['status' =>1]) ->orderBy('id') ->all();
//        var_dump($list);die;
       $list= Node::find()->asarray()->all();
       //var_dump($list);die;
      // echo '<pre>';
      // var_dump( $list);
       return $this->render('index',['list'=>$list]);
        
        
    }

    
   //列表gird view
     public function actionList(){
        //需要传递1个模型
        $searchModel = new GoodsSearch();
        $dataProvider = $searchModel->search($_GET);
        
//        $dataProvider = new ActiveDataProvider([
//            //'query' => Goods::find(),
//            'pagination' => [
//            'pageSize' => 20,
//            ],
//        ]);
        return $this->render('list', [
         'searchModel' => $searchModel,  
         'dataProvider' => $dataProvider,
         
]);
     }
  //多表联查   
  public function actionJoin(){
      //select * from goods g join brand  b on g.brand_id=b.id;
      $list=Goods::find()->joinWith('brand')->orderBy('bw_goods.goods_id')->where('bw_goods.goods_id>10')->all();
      //var_dump( $list);
     }
//多条件搜索
 public function actionFind(){
    $searchModel = new GoodsFind();
    $dataProvider = $searchModel->search($_GET);

    return $this->render('myview', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
    ]);
 
    }
}
