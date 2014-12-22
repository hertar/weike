<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_finance".
 *
 * @property integer $fina_id
 * @property string $fina_type
 * @property string $fina_action
 * @property integer $order_id
 * @property integer $uid
 * @property string $username
 * @property string $obj_type
 * @property integer $obj_id
 * @property string $fina_cash
 * @property string $user_balance
 * @property string $fina_credit
 * @property string $user_credit
 * @property string $fina_source
 * @property integer $fina_time
 * @property string $recharge_cash
 * @property string $site_profit
 * @property string $fina_mem
 * @property integer $is_trust
 * @property string $trust_type
 */
class WkWitkeyFinance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_finance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'uid', 'obj_id', 'fina_time', 'is_trust'], 'integer'],
            [['fina_cash', 'user_balance', 'fina_credit', 'user_credit', 'recharge_cash', 'site_profit'], 'number'],
            [['fina_type'], 'string', 'max' => 10],
            [['fina_action', 'obj_type', 'fina_source', 'trust_type'], 'string', 'max' => 20],
            [['username'], 'string', 'max' => 50],
            [['fina_mem'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fina_id' => 'Fina ID',
            'fina_type' => 'Fina Type',
            'fina_action' => 'Fina Action',
            'order_id' => 'Order ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'obj_type' => 'Obj Type',
            'obj_id' => 'Obj ID',
            'fina_cash' => 'Fina Cash',
            'user_balance' => 'User Balance',
            'fina_credit' => 'Fina Credit',
            'user_credit' => 'User Credit',
            'fina_source' => 'Fina Source',
            'fina_time' => 'Fina Time',
            'recharge_cash' => 'Recharge Cash',
            'site_profit' => 'Site Profit',
            'fina_mem' => 'Fina Mem',
            'is_trust' => 'Is Trust',
            'trust_type' => 'Trust Type',
        ];
    }
}
