<?php
namespace common\models;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

class GoodsSearch extends Goods
{
   public function attributes()
{
    // add related fields to searchable attributes
    return array_merge(parent::attributes(), ['brand.brand_name']);
}
    public function rules()
    {
        // only fields in rules() are searchable
        return [
            [['goods_id'], 'integer'],
            [['goods_name', 'goods_price','brand.brand_name'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    //----------------------------多条件搜索------------------------------------
    public function search($params)
    {
       
        $query = Goods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
    $query->joinWith(['brand' => function($query) { $query->from(['brand' => 'bw_brand']); }]);
    
    //------------------------开启品牌名排序------------------------------------------
    $dataProvider->sort->attributes['brand.brand_name'] = [
    'asc' => ['brand.brand_name' => SORT_ASC],
    'desc' => ['brand.brand_name' => SORT_DESC],
];
    
         //load the seach form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $query->andFilterWhere(['goods_id' => $this->goods_id]);
        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
              ->andFilterWhere(['>', 'goods_price', $this->goods_price])->
                andFilterWhere(['like', 'brand.brand_name', $this->getAttribute('brand.brand_name')]);

        return $dataProvider;
    }
  
}

