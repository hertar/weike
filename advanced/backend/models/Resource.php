<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_resource".
 *
 * @property integer $resource_id
 * @property string $resource_name
 * @property string $resource_url
 * @property string $submenu_id
 * @property integer $listorder
 */
class Resource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_resource';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listorder'], 'integer'],
            [['resource_name', 'submenu_id'], 'string', 'max' => 20],
            [['resource_url'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resource_id' => 'Resource ID',
            'resource_name' => 'Resource Name',
            'resource_url' => 'Resource Url',
            'submenu_id' => 'Submenu ID',
            'listorder' => 'Listorder',
        ];
    }
}
