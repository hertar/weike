<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_nav".
 *
 * @property integer $nav_id
 * @property string $nav_url
 * @property string $nav_title
 * @property string $nav_style
 * @property integer $listorder
 * @property integer $newwindow
 * @property integer $ishide
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_nav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listorder', 'newwindow', 'ishide'], 'integer'],
            [['nav_url'], 'string', 'max' => 200],
            [['nav_title', 'nav_style'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nav_id' => 'Nav ID',
            'nav_url' => 'Nav Url',
            'nav_title' => 'Nav Title',
            'nav_style' => 'Nav Style',
            'listorder' => 'Listorder',
            'newwindow' => 'Newwindow',
            'ishide' => 'Ishide',
        ];
    }
}
