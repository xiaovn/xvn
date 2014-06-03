<?php
/**
 * Project: xvn.
 * File: indexController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class indexController Extends baseController {
	public function index() {
	$_SESSION['current_menu'] = "home";
		/*** set a template variable ***/
			$this->view->data['welcome'] = 'Hello Developerssss!';
		/*** load the index template ***/
			$this->view->show('index');
	}

}

?>
