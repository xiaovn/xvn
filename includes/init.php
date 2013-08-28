<?php
/**
 * Project: xvn.
 * File: init.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
 /*** include the model class ***/
 include __SITE_PATH . '/application/' . 'model_base.class.php';
 /*** include the controller class ***/
 include __SITE_PATH . '/application/' . 'controller_base.class.php';
 
 /*** include the template class ***/
 include __SITE_PATH . '/application/' . 'view_base.class.php';

/*** include the template class ***/
include __SITE_PATH . '/application/' . 'redirect_base.class.php';


/*** include the mail class ***/
include __SITE_PATH . '/application/' . 'mail_base.class.php';


/*** include the member class ***/
include __SITE_PATH . '/application/' . 'member.class.php';
include __SITE_PATH . '/application/' . 'book.class.php';


 /*** include the registry class ***/
 include __SITE_PATH . '/application/' . 'registry.class.php';

 /*** include the router class ***/
 include __SITE_PATH . '/application/' . 'router.class.php';
 
 /*** include the template class ***/
 include __SITE_PATH . '/application/' . 'database.class.php';


 /*** a new registry object ***/
 $registry = new registry;

 /*** create the database registry object ***/
 $db = &Database::getInstance();