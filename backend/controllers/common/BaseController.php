<?php
/**
 * Author: henry
 * Date:  data 
 * description: 后台都要继承的公共控制器，这里设置登录等权限操作
 */

namespace backend\controllers\common;

use Yii;
use yii\web\Controller;

class BaseController extends Controller{

	// 执行每个控制器都要执行这个函数
	public function beforeAction($action){
		//var_dump($action);
		return true;
	}
}

