<?php
/**
 * Project: xvn.
 * File: model_base.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
class baseModel {
	private static $instance;
	
	function __construct() {
		
	}
   public static function getInstance() {
		if (!self::$instance)
		{	
			self::$instance = new baseModel();
		}
		return self::$instance;
	}
	public function get($name){
		$file = __SITE_PATH.'/model/'.str_replace("model","",strtolower($name))."Model.php";
		
		if(file_exists($file))
		{
			include ($file);
			$class = str_replace("model","",strtolower($name))."Model";
			return new $class;
		}		
		return NULL;
	}
	function __destruct() {
	}
}
