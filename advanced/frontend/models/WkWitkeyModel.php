<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_model".
 *
 * @property integer $model_id
 * @property string $model_code
 * @property string $model_name
 * @property string $model_dir
 * @property string $model_type
 * @property string $model_dev
 * @property integer $model_status
 * @property string $model_desc
 * @property integer $on_time
 * @property integer $hide_mode
 * @property integer $listorder
 * @property string $model_intro
 * @property string $indus_bid
 * @property string $config
 */
class WkWitkeyModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_status', 'on_time', 'hide_mode', 'listorder'], 'integer'],
            [['model_desc', 'indus_bid', 'config'], 'string'],
            [['model_code', 'model_name', 'model_dir', 'model_dev'], 'string', 'max' => 20],
            [['model_type'], 'string', 'max' => 10],
            [['model_intro'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'model_id' => 'Model ID',
            'model_code' => 'Model Code',
            'model_name' => 'Model Name',
            'model_dir' => 'Model Dir',
            'model_type' => 'Model Type',
            'model_dev' => 'Model Dev',
            'model_status' => 'Model Status',
            'model_desc' => 'Model Desc',
            'on_time' => 'On Time',
            'hide_mode' => 'Hide Mode',
            'listorder' => 'Listorder',
            'model_intro' => 'Model Intro',
            'indus_bid' => 'Indus Bid',
            'config' => 'Config',
        ];
    }
}
