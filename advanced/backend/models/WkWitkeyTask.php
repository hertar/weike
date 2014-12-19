<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_task".
 *
 * @property integer $task_id
 * @property string $model_id
 * @property integer $work_count
 * @property double $single_cash
 * @property integer $profit_rate
 * @property integer $task_fail_rate
 * @property integer $task_status
 * @property string $task_title
 * @property string $task_desc
 * @property string $task_file
 * @property string $task_pic
 * @property integer $indus_id
 * @property integer $indus_pid
 * @property integer $uid
 * @property string $username
 * @property integer $start_time
 * @property integer $sub_time
 * @property integer $end_time
 * @property integer $sp_end_time
 * @property string $city
 * @property string $task_cash
 * @property string $real_cash
 * @property integer $task_cash_coverage
 * @property string $cash_cost
 * @property string $credit_cost
 * @property integer $view_num
 * @property integer $work_num
 * @property integer $leave_num
 * @property integer $focus_num
 * @property integer $mark_num
 * @property integer $is_delineas
 * @property integer $kf_uid
 * @property string $pay_item
 * @property string $att_cash
 * @property string $contact
 * @property string $unique_num
 * @property integer $ext_time
 * @property string $ext_desc
 * @property integer $task_union
 * @property integer $alipay_trust
 * @property integer $is_delay
 * @property integer $r_task_id
 * @property integer $is_trust
 * @property string $trust_type
 * @property integer $is_top
 * @property integer $is_auto_bid
 * @property string $point
 * @property string $payitem_time
 * @property integer $age_requirement
 */
class WkWitkeyTask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_count', 'profit_rate', 'task_fail_rate', 'task_status', 'indus_id', 'indus_pid', 'uid', 'start_time', 'sub_time', 'end_time', 'sp_end_time', 'task_cash_coverage', 'view_num', 'work_num', 'leave_num', 'focus_num', 'mark_num', 'is_delineas', 'kf_uid', 'ext_time', 'task_union', 'alipay_trust', 'is_delay', 'r_task_id', 'is_trust', 'is_top', 'is_auto_bid', 'age_requirement'], 'integer'],
            [['single_cash', 'task_cash', 'real_cash', 'cash_cost', 'credit_cost', 'att_cash'], 'number'],
            [['task_desc', 'ext_desc'], 'string'],
            [['model_id'], 'string', 'max' => 10],
            [['task_title', 'task_file', 'task_pic', 'point'], 'string', 'max' => 100],
            [['username', 'pay_item'], 'string', 'max' => 50],
            [['city', 'trust_type'], 'string', 'max' => 20],
            [['contact'], 'string', 'max' => 255],
            [['unique_num'], 'string', 'max' => 8],
            [['payitem_time'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'model_id' => 'Model ID',
            'work_count' => 'Work Count',
            'single_cash' => 'Single Cash',
            'profit_rate' => 'Profit Rate',
            'task_fail_rate' => 'Task Fail Rate',
            'task_status' => 'Task Status',
            'task_title' => 'Task Title',
            'task_desc' => 'Task Desc',
            'task_file' => 'Task File',
            'task_pic' => 'Task Pic',
            'indus_id' => 'Indus ID',
            'indus_pid' => 'Indus Pid',
            'uid' => 'Uid',
            'username' => 'Username',
            'start_time' => 'Start Time',
            'sub_time' => 'Sub Time',
            'end_time' => 'End Time',
            'sp_end_time' => 'Sp End Time',
            'city' => 'City',
            'task_cash' => 'Task Cash',
            'real_cash' => 'Real Cash',
            'task_cash_coverage' => 'Task Cash Coverage',
            'cash_cost' => 'Cash Cost',
            'credit_cost' => 'Credit Cost',
            'view_num' => 'View Num',
            'work_num' => 'Work Num',
            'leave_num' => 'Leave Num',
            'focus_num' => 'Focus Num',
            'mark_num' => 'Mark Num',
            'is_delineas' => 'Is Delineas',
            'kf_uid' => 'Kf Uid',
            'pay_item' => 'Pay Item',
            'att_cash' => 'Att Cash',
            'contact' => 'Contact',
            'unique_num' => 'Unique Num',
            'ext_time' => 'Ext Time',
            'ext_desc' => 'Ext Desc',
            'task_union' => 'Task Union',
            'alipay_trust' => 'Alipay Trust',
            'is_delay' => 'Is Delay',
            'r_task_id' => 'R Task ID',
            'is_trust' => 'Is Trust',
            'trust_type' => 'Trust Type',
            'is_top' => 'Is Top',
            'is_auto_bid' => 'Is Auto Bid',
            'point' => 'Point',
            'payitem_time' => 'Payitem Time',
            'age_requirement' => 'Age Requirement',
        ];
    }
}
