<?php

	
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination; 
/**
 * Site controller
 */
class ToolController extends Controller
{
    /**
     * @inheritdoc
     */
 public $enableCsrfValidation=false;//加上这句代码,前台可以使用普通的form表单语法
 
//清缓存
    public function actionCache()
    {
        return $this->renderPartial('cache');
    }
    public function actionQing(){
       Yii::$app->cache->flush();
        if(Yii::$app->cache->flush()){
            return $this->renderPartial('cache');
        }
    }

//pv统计
    public function actionPv(){
        
        
        require_once '/public/src/jpgraph.php';
        require_once '/public/src/jpgraph_line.php';
        require_once '/public/src/jpgraph_bar.php';
        require_once ("public/src/jpgraph_pie.php");
        require_once ("public/src/jpgraph_pie3d.php");   //引用3D饼图PiePlot3D对象所在的类文件
        $arr=  \app\models\Pv::find()->all();
        for($i=0;$i<count($arr);$i++){
            $y[]=$arr[$i]["count"];
        }
          
        $graph = new \Graph(1000,500,"auto"); 
        $graph->SetScale("textlin");
        $graph->yaxis->scale->SetGrace(20);

        //创建画布阴影
        $graph->SetShadow();

        //设置显示区左、右、上、下距边线的距离，单位为像素
        $graph->img->SetMargin(40,30,30,40);

        //创建一个矩形的对象
        $bplot = new \BarPlot($y);

        //设置柱形图的颜色
        $bplot->SetFillColor('orange'); 
        //设置显示数字 
        $bplot->value->Show();
        //在柱形图中显示格式化的图书销量
        $bplot->value->SetFormat('%d');
        //将柱形图添加到图像中
        $graph->Add($bplot);

        //设置画布背景色为淡蓝色
        $graph->SetMarginColor("lightblue");

        //创建标题
        $graph->title->Set("我的网站统计");
        for($i=0;$i<count($arr);$i++){
            $x[]=$arr[$i]["day"];
        }
        //设置X坐标轴文字
   
        $graph->xaxis->SetTickLabels($x);

        //设置字体
        $graph->title->SetFont(FF_SIMSUN);
        $graph->xaxis->SetFont(FF_SIMSUN);

        //输出矩形图表
        $graph->Stroke();
         return $this->renderPartial('pv');
    }
    

//广告列表
    public function actionAd_list(){
        $this->layout='@app/views/layouts/publics.php';
        $model=new \yii\db\Query;
        $list=  $model->from("wk_witkey_ad")->all();
        $pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>10]);
        $list=$model->offset($pages->offset)->limit($pages->limit)->all();
        $data["list"]=$list;
        $data["pages"]=$pages;
        return $this->render("ad_list",$data);
    }
    //删除
    public function actionAd_del(){
        $arr=\app\models\Ad::findOne($_GET['ad_id'])->delete();
        if($arr){
            $this->redirect("index.php?r=tool/ad_list");
        }
    }
    //添加表单
    public function actionAd_add(){
         $arr=\app\models\Region::find()->where(["parent_id"=>1])->all();
         //print_r($arr);
         $data["arr"]=$arr;
         return $this->renderPartial("ad_add",$data);
    }
    public function actionRegion(){
        $pid=$_GET["pid"];
        
        $industry=  \app\models\Region::find()->where(["parent_id"=>"$pid"])->all();
        $count=\app\models\Region::find()->where(["parent_id"=>"$pid"])->count();
        for($i=0;$i<$count;$i++){
            $arr[$industry[$i]["region_id"]]=$industry[$i]["region_name"];
       }
       //print_r($arr);die;
       $str=  json_encode($arr);
       $callback=$_GET["callback"];
       echo $callback."($str)";
    }
    /*
     * 
     * Array ( [ad_name] => 首页 
     *            [ad_type] => image 
     *            [ad_type_image_url] => www.baidu.com 
     *            [pro] => 2 
     *            [city] => 52 
     *            
     *            [listorder] => 1 
     *            [rdn_is_allow] => 1 
     *            [sbt_action] => 提交 
     * ) 
     * Array ( 
     *      [ad_type_image_file] => Array ( 
     *                                              [name] => 516973.jpg 
     *                                              [type] => image/jpeg 
     *                                              [tmp_name] => F:\xampp\tmp\php8E7F.tmp 
     *                                              [error] => 0 [size] => 1047195 ) 
     *                                             
     * ) ) 
     */
    public function actionAd_add_pro(){
        //print_r($_POST);
       // print_r($_FILES);
        $arr=new \app\models\Ad();
        $path="../../public/data/uploads/sys/ad/".$_FILES['ad_type_image_file']['name'];
        $up = move_uploaded_file($_FILES['ad_type_image_file']['tmp_name'],$path);
        $arr->ad_name=$_POST["ad_name"];
        $arr->ad_type=$_POST["ad_type"];
        $arr->ad_url=$_POST["ad_type_image_url"];
        $arr->pro=$_POST["pro"];
        $arr->city=$_POST['city'];
        $arr->ad_file=$_FILES['ad_type_image_file']['name'];
        $arr->on_time=time();
        $arr->listorder=$_POST["listorder"];
        $arr->is_allow=$_POST["rdn_is_allow"];
        if($arr->insert()){
             $this->redirect("index.php?r=tool/ad_list");
        }     
    }
    
    
}
