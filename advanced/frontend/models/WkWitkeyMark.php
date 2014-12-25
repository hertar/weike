<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_mark".
 *
 * @property integer $mark_id
 * @property string $model_code
 * @property integer $origin_id
 * @property integer $obj_id
 * @property string $obj_cash
 * @property integer $mark_status
 * @property string $mark_content
 * @property integer $mark_time
 * @property integer $uid
 * @property string $username
 * @property integer $mark_max_time
 * @property integer $by_uid
 * @property string $by_username
 * @property string $aid
 * @property string $aid_star
 * @property string $mark_value
 * @property integer $mark_type
 * @property integer $mark_count
 */
class WkWitkeyMark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['origin_id', 'obj_id', 'mark_status', 'mark_time', 'uid', 'mark_max_time', 'by_uid', 'mark_type', 'mark_count'], 'integer'],
            [['obj_cash', 'mark_value'], 'number'],
            [['mark_content'], 'string'],
            [['model_code', 'username', 'by_username'], 'string', 'max' => 20],
            [['aid', 'aid_star'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mark_id' => 'Mark ID',
            'model_code' => 'Model Code',
            'origin_id' => 'Origin ID',
            'obj_id' => 'Obj ID',
            'obj_cash' => 'Obj Cash',
            'mark_status' => 'Mark Status',
            'mark_content' => 'Mark Content',
            'mark_time' => 'Mark Time',
            'uid' => 'Uid',
            'username' => 'Username',
            'mark_max_time' => 'Mark Max Time',
            'by_uid' => 'By Uid',
            'by_username' => 'By Username',
            'aid' => 'Aid',
            'aid_star' => 'Aid Star',
            'mark_value' => 'Mark Value',
            'mark_type' => 'Mark Type',
            'mark_count' => 'Mark Count',
        ];
    }
}
