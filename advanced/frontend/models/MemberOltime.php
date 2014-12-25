<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_member_oltime".
 *
 * @property integer $oltime_id
 * @property integer $uid
 * @property string $username
 * @property integer $user_status
 * @property integer $last_op_time
 * @property integer $online_total_time
 */
class MemberOltime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_member_oltime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'user_status', 'last_op_time', 'online_total_time'], 'integer'],
            [['username'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'oltime_id' => 'Oltime ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'user_status' => 'User Status',
            'last_op_time' => 'Last Op Time',
            'online_total_time' => 'Online Total Time',
        ];
    }
}
