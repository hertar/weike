<?php
namespace common\models;
use Yii;
use yii\base\Model;
use common\models\Goods;
use yii\data\ActiveDataProvider;

class GoodsFind extends Goods

{
    public function rules()
    {
        // only fields in rules() are searchable
        return [
            [['goods_id'], 'integer'],
            [['goods_name', 'goods_price'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Goods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // load the seach form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $query->andFilterWhere(['goods_id' => $this->goods_id]);
        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
              ->andFilterWhere(['>', 'goods_price', $this->goods_price]);

        return $dataProvider;
    }
}