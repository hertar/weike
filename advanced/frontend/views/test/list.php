
<h1>商品信息</h1>
<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
  
    'columns' => [
   
        [
             'attribute' => 'goods_id',
              'label'=>'ID'
         ] ,
        
        [
             'attribute' => 'goods_name',
              'label'=>'商品名'
         ] ,
        [
             'attribute' => 'goods_price',
              'label'=>'商品价格'
         ] ,
          [
             'attribute' => 'brand.brand_name',
              'label'=>'商品品牌'
         ] ,
        [
             'attribute' => 'goods_create_time',
             'label'=>'商品上线时间',
             'format' => ['date', 'Y-m-d H:i:s'],
            // 'options' => ['width' => '200']
         ] , 
       ['class' => 'yii\grid\ActionColumn','header' => '操作','headerOptions' => ['width' => '120']], // <-- here
  
      ]
        
    ]
    );
?>
