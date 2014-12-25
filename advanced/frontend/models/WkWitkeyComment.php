<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_comment".
 *
 * @property integer $comment_id
 * @property integer $obj_id
 * @property integer $origin_id
 * @property string $obj_type
 * @property integer $p_id
 * @property integer $uid
 * @property string $username
 * @property string $content
 * @property integer $on_time
 * @property integer $status
 */
class WkWitkeyComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj_id', 'origin_id', 'p_id', 'uid', 'on_time', 'status'], 'integer'],
            [['content'], 'string'],
            [['obj_type'], 'string', 'max' => 20],
            [['username'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'obj_id' => 'Obj ID',
            'origin_id' => 'Origin ID',
            'obj_type' => 'Obj Type',
            'p_id' => 'P ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'content' => 'Content',
            'on_time' => 'On Time',
            'status' => 'Status',
        ];
    }
}
