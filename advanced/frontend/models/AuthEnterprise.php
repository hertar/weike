<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_auth_enterprise".
 *
 * @property integer $enterprise_auth_id
 * @property integer $uid
 * @property string $username
 * @property string $company
 * @property string $licen_num
 * @property string $licen_pic
 * @property string $cash
 * @property integer $start_time
 * @property integer $end_time
 * @property integer $auth_status
 * @property string $legal
 * @property integer $staff_num
 * @property integer $run_years
 * @property string $url
 */
class AuthEnterprise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_auth_enterprise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'start_time', 'end_time', 'auth_status', 'staff_num', 'run_years'], 'integer'],
            [['cash'], 'number'],
            [['username', 'legal'], 'string', 'max' => 50],
            [['company', 'licen_num', 'licen_pic'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enterprise_auth_id' => 'Enterprise Auth ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'company' => 'Company',
            'licen_num' => 'Licen Num',
            'licen_pic' => 'Licen Pic',
            'cash' => 'Cash',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'auth_status' => 'Auth Status',
            'legal' => 'Legal',
            'staff_num' => 'Staff Num',
            'run_years' => 'Run Years',
            'url' => 'Url',
        ];
    }
}
