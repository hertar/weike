<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_order".
 *
 * @property integer $order_id
 * @property string $order_name
 * @property integer $order_time
 * @property string $order_amount
 * @property string $order_status
 * @property string $order_body
 * @property integer $order_uid
 * @property string $order_username
 * @property integer $seller_uid
 * @property string $seller_username
 * @property integer $model_id
 * @property string $to_seller_message
 * @property integer $ys_end_time
 */
class WkWitkeyOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_time', 'order_uid', 'seller_uid', 'model_id', 'ys_end_time'], 'integer'],
            [['order_amount'], 'number'],
            [['order_name'], 'string', 'max' => 150],
            [['order_status', 'order_username'], 'string', 'max' => 20],
            [['order_body'], 'string', 'max' => 200],
            [['seller_username'], 'string', 'max' => 30],
            [['to_seller_message'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_name' => 'Order Name',
            'order_time' => 'Order Time',
            'order_amount' => 'Order Amount',
            'order_status' => 'Order Status',
            'order_body' => 'Order Body',
            'order_uid' => 'Order Uid',
            'order_username' => 'Order Username',
            'seller_uid' => 'Seller Uid',
            'seller_username' => 'Seller Username',
            'model_id' => 'Model ID',
            'to_seller_message' => 'To Seller Message',
            'ys_end_time' => 'Ys End Time',
        ];
    }
}
