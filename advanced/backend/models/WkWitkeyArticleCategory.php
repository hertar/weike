<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_article_category".
 *
 * @property integer $art_cat_id
 * @property integer $art_cat_pid
 * @property string $cat_name
 * @property integer $listorder
 * @property integer $is_show
 * @property integer $on_time
 * @property string $cat_type
 * @property string $art_index
 */
class WkWitkeyArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['art_cat_pid', 'listorder', 'is_show', 'on_time'], 'integer'],
            [['cat_name', 'art_index'], 'string', 'max' => 100],
            [['cat_type'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'art_cat_id' => 'Art Cat ID',
            'art_cat_pid' => 'Art Cat Pid',
            'cat_name' => 'Cat Name',
            'listorder' => 'Listorder',
            'is_show' => 'Is Show',
            'on_time' => 'On Time',
            'cat_type' => 'Cat Type',
            'art_index' => 'Art Index',
        ];
    }
    
    //无限极
    	function getAllCate(){
		$info=WkWitkeyArticleCategory::find()->andWhere("cat_type='article'")->all();
		return $this->tree($info,0,"");
	}
        function getAllCates(){
		$info=WkWitkeyArticleCategory::find()->andWhere("cat_type='help'")->all();
		return $this->tree($info,0,"");
	}
	function tree($arr,$fid,$tmp){
		static $array;
		$tmp=$tmp."&nbsp;&nbsp;&nbsp;&nbsp;";
		foreach($arr as $key=>$val){
			if($arr[$key]["art_cat_pid"]==$fid){
				$arr[$key]["tmp"]=$tmp;
				$array[]=$arr[$key];
				$this->tree($arr,$arr[$key]["art_cat_id"],$tmp);
			}
		}
		return $array;
	}
}
