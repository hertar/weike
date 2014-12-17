<?php
namespace common\Goods;

use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return '{{%good}}';
    }
}