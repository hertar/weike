<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_pv".
 *
 * @property integer $id
 * @property string $day
 * @property integer $count
 */
class Pv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_pv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day'], 'safe'],
            [['count'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'count' => 'Count',
        ];
    }
}
