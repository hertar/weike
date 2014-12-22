<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_resource_submenu".
 *
 * @property integer $submenu_id
 * @property string $submenu_name
 * @property string $menu_name
 * @property integer $listorder
 * @property integer $status
 */
class ResourceSubmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_resource_submenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listorder', 'status'], 'integer'],
            [['submenu_name'], 'string', 'max' => 20],
            [['menu_name'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'submenu_id' => 'Submenu ID',
            'submenu_name' => 'Submenu Name',
            'menu_name' => 'Menu Name',
            'listorder' => 'Listorder',
            'status' => 'Status',
        ];
    }
}
