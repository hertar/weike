<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_ad".
 *
 * @property integer $ad_id
 * @property integer $target_id
 * @property string $ad_type
 * @property string $ad_position
 * @property string $ad_name
 * @property string $ad_file
 * @property string $ad_content
 * @property string $ad_url
 * @property integer $start_time
 * @property integer $end_time
 * @property integer $uid
 * @property string $username
 * @property integer $listorder
 * @property string $width
 * @property string $height
 * @property string $tpl_type
 * @property integer $is_allow
 * @property integer $on_time
 * @property string $pro
 * @property string $city
 * @property string $dis
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['target_id', 'start_time', 'end_time', 'uid', 'listorder', 'is_allow', 'on_time'], 'integer'],
            [['ad_content'], 'string'],
            [['ad_type', 'ad_position', 'tpl_type'], 'string', 'max' => 20],
            [['ad_name', 'ad_file'], 'string', 'max' => 300],
            [['ad_url', 'username'], 'string', 'max' => 100],
            [['width', 'height'], 'string', 'max' => 15],
            [['pro', 'city', 'dis'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_id' => 'Ad ID',
            'target_id' => 'Target ID',
            'ad_type' => 'Ad Type',
            'ad_position' => 'Ad Position',
            'ad_name' => 'Ad Name',
            'ad_file' => 'Ad File',
            'ad_content' => 'Ad Content',
            'ad_url' => 'Ad Url',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'uid' => 'Uid',
            'username' => 'Username',
            'listorder' => 'Listorder',
            'width' => 'Width',
            'height' => 'Height',
            'tpl_type' => 'Tpl Type',
            'is_allow' => 'Is Allow',
            'on_time' => 'On Time',
            'pro' => 'Pro',
            'city' => 'City',
            'dis' => 'Dis',
        ];
    }
}
