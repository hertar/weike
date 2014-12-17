<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * @inheritdoc
     */

//主页
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    
    public function actionLogin(){
        return $this->renderPartial("login");
    }
    
	public function actionMain(){
        return $this->renderPartial("main");
    }


}
