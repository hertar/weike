<?php

namespace app\models;
use Yii;
use app\models\Industry;

/**
 * This is the model class for table "wk_witkey_skill".
 *
 * @property integer $skill_id
 * @property integer $indus_id
 * @property string $skill_name
 * @property integer $listorder
 * @property integer $on_time
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indus_id', 'listorder', 'on_time'], 'integer'],
            [['skill_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'skill_id' => 'Skill ID',
            'indus_id' => 'Indus ID',
            'skill_name' => 'Skill Name',
            'listorder' => 'Listorder',
            'on_time' => 'On Time',
        ];
    }

	/**
     * @join rules
     */
    public function getJoin()
    {
		return $this->hasOne(Industry::className(), ['indus_id' => 'indus_id']);
	}
}
