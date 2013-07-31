<?php
/**
 * Project: xvn.
 * File: controller_base.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Abstract Class baseController {

/*
 * @registry object
 */
protected $registry;
protected $model;
protected $view;
protected $redirect;

function __construct($registry) {
	$this->registry = $registry;
	$this->model = &baseModel::getInstance();
	$this->view  = &baseView::getInstance();
    $this->redirect = &baseRedirect::getInstance();
}


/**
 * @all controllers must contain an index method
 */
abstract function index();
}

?>
