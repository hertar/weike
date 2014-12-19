<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_basic_config".
 *
 * @property integer $config_id
 * @property string $k
 * @property string $v
 * @property string $type
 * @property string $desc
 * @property integer $listorder
 */
class BasicConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_basic_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['v', 'desc'], 'string'],
            [['listorder'], 'integer'],
            [['k', 'type'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'config_id' => 'Config ID',
            'k' => 'K',
            'v' => 'V',
            'type' => 'Type',
            'desc' => 'Desc',
            'listorder' => 'Listorder',
        ];
    }
}
