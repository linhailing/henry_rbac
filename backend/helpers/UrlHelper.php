<?php
/**
 * Author: henry
 * Date: 2017年06月02日13:55:39
 * description: 创建同意的url格式
 */
namespace backend\helpers;

use Yii;
use yii\helpers\Url;

class UrlHelper{
	/***
	 * 创建url
	 * @return [string] [url]
	 */
    public static function buildUrl( $url, $params = []){
		return Url::toRoute( array_merge( [ $url ] , $params ));
	}

	/***
	 * 创建空url
	 * @return[""] [url]
	 */
	public static function buildNullUrl(){
		return "javascript:void(0);";
	} 
}
