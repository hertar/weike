<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_task_control".
 *
 * @property integer $audit_id
 * @property integer $audit_cash
 * @property integer $min_cash
 * @property integer $task_rate
 * @property integer $task_fail_rate
 * @property integer $notice_period
 * @property integer $min_day
 * @property integer $vote_period
 * @property integer $reg_vote_limit
 * @property integer $choose_time
 * @property integer $agree_complete_time
 * @property integer $agree_sign_time
 * @property integer $min_delay_cash
 * @property integer $max_delay
 * @property string $open_select
 * @property string $end_action
 * @property string $witkey_num
 * @property string $auto_choose_rule
 * @property integer $model_id
 */
class Control extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_task_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['audit_cash', 'min_cash', 'task_rate', 'task_fail_rate', 'notice_period', 'min_day', 'vote_period', 'reg_vote_limit', 'choose_time', 'agree_complete_time', 'agree_sign_time', 'min_delay_cash', 'max_delay', 'model_id'], 'integer'],
            [['open_select', 'end_action', 'witkey_num', 'auto_choose_rule'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'audit_id' => 'Audit ID',
            'audit_cash' => 'Audit Cash',
            'min_cash' => 'Min Cash',
            'task_rate' => 'Task Rate',
            'task_fail_rate' => 'Task Fail Rate',
            'notice_period' => 'Notice Period',
            'min_day' => 'Min Day',
            'vote_period' => 'Vote Period',
            'reg_vote_limit' => 'Reg Vote Limit',
            'choose_time' => 'Choose Time',
            'agree_complete_time' => 'Agree Complete Time',
            'agree_sign_time' => 'Agree Sign Time',
            'min_delay_cash' => 'Min Delay Cash',
            'max_delay' => 'Max Delay',
            'open_select' => 'Open Select',
            'end_action' => 'End Action',
            'witkey_num' => 'Witkey Num',
            'auto_choose_rule' => 'Auto Choose Rule',
            'model_id' => 'Model ID',
        ];
    }
}
