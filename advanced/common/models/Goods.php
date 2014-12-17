<?php
namespace common\models;

use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }
    public function getBrand()
    {
        // Customer has_many Order via Order.customer_id -> id
        return $this->hasOne(Brand::className(), ['brand_id' => 'goods_brand_id']);
    }
}