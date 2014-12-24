<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_member".
 *
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $rand_code
 * @property string $email
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'string', 'max' => 50],
            [['rand_code'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'rand_code' => 'Rand Code',
            'email' => 'Email',
        ];
    }
}
