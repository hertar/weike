<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_order_detail".
 *
 * @property integer $detail_id
 * @property string $detail_name
 * @property integer $order_id
 * @property string $obj_type
 * @property integer $obj_id
 * @property integer $price
 * @property integer $num
 */
class WkWitkeyOrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'obj_id', 'price', 'num'], 'integer'],
            [['detail_name'], 'string', 'max' => 100],
            [['obj_type'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detail_id' => 'Detail ID',
            'detail_name' => 'Detail Name',
            'order_id' => 'Order ID',
            'obj_type' => 'Obj Type',
            'obj_id' => 'Obj ID',
            'price' => 'Price',
            'num' => 'Num',
        ];
    }
}
