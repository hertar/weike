<?php
namespace common\models;

use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return '{{%brand}}';
    }
    public function getGoods()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasMany(Goods::className(), ['goods_brand_id' => 'brand_id']);
    }
}