<?php
use yii\grid\GridView;
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
     'columns' => [
         
         'goods_id',
          [
              'attribute'=>'goods_name',
              'label'=>'商品名',
          ],
        ['class' => 'yii\grid\ActionColumn','header'=>'操作'],
       
    ],
]);
