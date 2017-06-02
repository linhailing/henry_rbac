<?php
/**
 * Author: henry
 * Date:  data 
 * description: 默认控制器
 */

namespace backend\controllers;
use Yii;
use backend\controllers\common\BaseController;

class DefaultController extends BaseController{
	// list
	public function actionIndex(){
		return $this->render('index');
	}
}
