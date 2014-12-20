<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_member_group".
 *
 * @property integer $group_id
 * @property string $groupname
 * @property string $group_roles
 * @property integer $on_time
 */
class MemberGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_member_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_roles'], 'string'],
            [['on_time'], 'integer'],
            [['groupname'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'group_id' => 'Group ID',
            'groupname' => 'Groupname',
            'group_roles' => 'Group Roles',
            'on_time' => 'On Time',
        ];
    }
}
