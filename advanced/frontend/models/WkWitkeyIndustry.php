<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_industry".
 *
 * @property integer $indus_id
 * @property integer $indus_pid
 * @property string $indus_name
 * @property integer $is_recommend
 * @property integer $indus_type
 * @property integer $listorder
 * @property integer $on_time
 * @property string $list_type
 * @property string $list_tpl
 * @property string $indus_intro
 * @property string $list_desc
 */
class WkWitkeyIndustry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_industry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indus_pid', 'is_recommend', 'indus_type', 'listorder', 'on_time'], 'integer'],
            [['list_desc'], 'string'],
            [['indus_name'], 'string', 'max' => 100],
            [['list_type', 'list_tpl'], 'string', 'max' => 20],
            [['indus_intro'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'indus_id' => 'Indus ID',
            'indus_pid' => 'Indus Pid',
            'indus_name' => 'Indus Name',
            'is_recommend' => 'Is Recommend',
            'indus_type' => 'Indus Type',
            'listorder' => 'Listorder',
            'on_time' => 'On Time',
            'list_type' => 'List Type',
            'list_tpl' => 'List Tpl',
            'indus_intro' => 'Indus Intro',
            'list_desc' => 'List Desc',
        ];
    }
}
