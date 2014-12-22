<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wk_witkey_article".
 *
 * @property integer $art_id
 * @property integer $art_cat_id
 * @property integer $uid
 * @property string $username
 * @property string $art_title
 * @property string $cat_type
 * @property string $art_source
 * @property string $art_pic
 * @property string $content
 * @property integer $is_recommend
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_desc
 * @property integer $listorder
 * @property integer $is_show
 * @property integer $is_delineas
 * @property integer $pub_time
 * @property integer $views
 */
class article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wk_witkey_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['art_cat_id', 'uid', 'is_recommend', 'listorder', 'is_show', 'is_delineas', 'pub_time', 'views'], 'integer'],
            [['content'], 'string'],
            [['username'], 'string', 'max' => 50],
            [['art_title', 'art_source'], 'string', 'max' => 200],
            [['cat_type'], 'string', 'max' => 20],
            [['art_pic'], 'string', 'max' => 100],
            [['seo_title', 'seo_keyword', 'seo_desc'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'art_id' => 'Art ID',
            'art_cat_id' => 'Art Cat ID',
            'uid' => 'Uid',
            'username' => 'Username',
            'art_title' => 'Art Title',
            'cat_type' => 'Cat Type',
            'art_source' => 'Art Source',
            'art_pic' => 'Art Pic',
            'content' => 'Content',
            'is_recommend' => 'Is Recommend',
            'seo_title' => 'Seo Title',
            'seo_keyword' => 'Seo Keyword',
            'seo_desc' => 'Seo Desc',
            'listorder' => 'Listorder',
            'is_show' => 'Is Show',
            'is_delineas' => 'Is Delineas',
            'pub_time' => 'Pub Time',
            'views' => 'Views',
        ];
    }
    
    //无限极
    	function getAllCate(){
		$info=WkWitkeyArticleCategory::find()->andWhere("cat_type='article'")->all();
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
