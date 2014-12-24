<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_case".
 *
 * @property integer $case_id
 * @property integer $obj_id
 * @property string $obj_type
 * @property string $case_img
 * @property string $case_title
 * @property string $case_desc
 * @property string $case_price
 * @property string $case_auther
 * @property integer $on_time
 */
class WkWitkeyCase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj_id', 'on_time'], 'integer'],
            [['case_price'], 'number'],
            [['obj_type', 'case_auther'], 'string', 'max' => 20],
            [['case_img'], 'string', 'max' => 150],
            [['case_title'], 'string', 'max' => 50],
            [['case_desc'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_id' => 'Case ID',
            'obj_id' => 'Obj ID',
            'obj_type' => 'Obj Type',
            'case_img' => 'Case Img',
            'case_title' => 'Case Title',
            'case_desc' => 'Case Desc',
            'case_price' => 'Case Price',
            'case_auther' => 'Case Auther',
            'on_time' => 'On Time',
        ];
    }
}
