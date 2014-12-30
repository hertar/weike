<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_apiuser".
 *
 * @property integer $id
 * @property string $username
 * @property string $keys
 */
class WkWitkeyApiuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_apiuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'keys'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'keys' => 'Keys',
        ];
    }
}
