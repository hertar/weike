<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_service".
 *
 * @property integer $service_id
 * @property integer $model_id
 * @property integer $service_type
 * @property integer $shop_id
 * @property integer $uid
 * @property string $username
 * @property integer $profit_rate
 * @property integer $indus_id
 * @property integer $indus_pid
 * @property string $indus_path
 * @property integer $cus_cate_id
 * @property string $title
 * @property string $price
 * @property string $unite_price
 * @property integer $service_time
 * @property string $unit_time
 * @property string $obj_name
 * @property string $pic
 * @property string $ad_pic
 * @property string $area_range
 * @property string $key_word
 * @property string $submit_method
 * @property string $file_path
 * @property string $content
 * @property integer $on_time
 * @property integer $is_stop
 * @property integer $sale_num
 * @property integer $focus_num
 * @property integer $mark_num
 * @property integer $leave_num
 * @property integer $views
 * @property string $pay_item
 * @property string $att_cash
 * @property integer $refresh_time
 * @property string $unique_num
 * @property string $total_sale
 * @property integer $service_status
 * @property integer $is_top
 * @property string $point
 * @property string $city
 * @property string $payitem_time
 * @property integer $exist_time
 * @property integer $confirm_max
 */
class WkWitkeyService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'service_type', 'shop_id', 'uid', 'profit_rate', 'indus_id', 'indus_pid', 'cus_cate_id', 'service_time', 'on_time', 'is_stop', 'sale_num', 'focus_num', 'mark_num', 'leave_num', 'views', 'refresh_time', 'service_status', 'is_top', 'exist_time', 'confirm_max'], 'integer'],
            [['price', 'att_cash', 'total_sale'], 'number'],
            [['pic', 'content'], 'string'],
            [['username', 'submit_method', 'pay_item', 'point', 'city'], 'string', 'max' => 20],
            [['indus_path', 'obj_name', 'area_range'], 'string', 'max' => 100],
            [['title', 'unite_price', 'unit_time', 'key_word'], 'string', 'max' => 50],
            [['ad_pic', 'payitem_time'], 'string', 'max' => 200],
            [['file_path'], 'string', 'max' => 255],
            [['unique_num'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'model_id' => 'Model ID',
            'service_type' => 'Service Type',
            'shop_id' => 'Shop ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'profit_rate' => 'Profit Rate',
            'indus_id' => 'Indus ID',
            'indus_pid' => 'Indus Pid',
            'indus_path' => 'Indus Path',
            'cus_cate_id' => 'Cus Cate ID',
            'title' => 'Title',
            'price' => 'Price',
            'unite_price' => 'Unite Price',
            'service_time' => 'Service Time',
            'unit_time' => 'Unit Time',
            'obj_name' => 'Obj Name',
            'pic' => 'Pic',
            'ad_pic' => 'Ad Pic',
            'area_range' => 'Area Range',
            'key_word' => 'Key Word',
            'submit_method' => 'Submit Method',
            'file_path' => 'File Path',
            'content' => 'Content',
            'on_time' => 'On Time',
            'is_stop' => 'Is Stop',
            'sale_num' => 'Sale Num',
            'focus_num' => 'Focus Num',
            'mark_num' => 'Mark Num',
            'leave_num' => 'Leave Num',
            'views' => 'Views',
            'pay_item' => 'Pay Item',
            'att_cash' => 'Att Cash',
            'refresh_time' => 'Refresh Time',
            'unique_num' => 'Unique Num',
            'total_sale' => 'Total Sale',
            'service_status' => 'Service Status',
            'is_top' => 'Is Top',
            'point' => 'Point',
            'city' => 'City',
            'payitem_time' => 'Payitem Time',
            'exist_time' => 'Exist Time',
            'confirm_max' => 'Confirm Max',
        ];
    }
}
