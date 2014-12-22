<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_shop".
 *
 * @property integer $shop_id
 * @property integer $uid
 * @property string $username
 * @property integer $shop_type
 * @property string $shop_name
 * @property string $service_range
 * @property string $shop_desc
 * @property string $work
 * @property integer $work_year
 * @property string $keyword
 * @property string $shop_background
 * @property string $logo
 * @property string $banner
 * @property string $shop_slogans
 * @property string $shop_skin
 * @property string $shop_backstyle
 * @property string $shop_font
 * @property string $shop_active
 * @property integer $is_close
 * @property integer $views
 * @property integer $focus_num
 * @property integer $on_time
 * @property string $homebanner
 * @property integer $on_sale
 * @property integer $shop_status
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'shop_type', 'work_year', 'is_close', 'views', 'focus_num', 'on_time', 'on_sale', 'shop_status'], 'integer'],
            [['shop_desc', 'banner', 'homebanner'], 'string'],
            [['username'], 'string', 'max' => 30],
            [['shop_name', 'work', 'keyword', 'shop_background', 'logo'], 'string', 'max' => 100],
            [['service_range'], 'string', 'max' => 50],
            [['shop_slogans', 'shop_backstyle'], 'string', 'max' => 255],
            [['shop_skin', 'shop_font', 'shop_active'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shop_id' => 'Shop ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'shop_type' => 'Shop Type',
            'shop_name' => 'Shop Name',
            'service_range' => 'Service Range',
            'shop_desc' => 'Shop Desc',
            'work' => 'Work',
            'work_year' => 'Work Year',
            'keyword' => 'Keyword',
            'shop_background' => 'Shop Background',
            'logo' => 'Logo',
            'banner' => 'Banner',
            'shop_slogans' => 'Shop Slogans',
            'shop_skin' => 'Shop Skin',
            'shop_backstyle' => 'Shop Backstyle',
            'shop_font' => 'Shop Font',
            'shop_active' => 'Shop Active',
            'is_close' => 'Is Close',
            'views' => 'Views',
            'focus_num' => 'Focus Num',
            'on_time' => 'On Time',
            'homebanner' => 'Homebanner',
            'on_sale' => 'On Sale',
            'shop_status' => 'Shop Status',
        ];
    }
}
