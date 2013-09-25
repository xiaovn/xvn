<?php
/**
 * Project: xvn.
 * File: config.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
session_start();
//=============== Custom configuration ==================//
define('DB_NAME', 'xiaovn_xem'); //database name
define('DB_USER', 'root'); //database user
define('DB_PASSWORD', ''); //database password
define('DB_HOST', 'localhost'); //sql server

/*** define Theme ***/
define('ThemeMaster', 'xpanel'); //Replace xpanel by your theme's name

/*** define site path ***/
define('XC_URL','http://localhost/xvn2');
//Replace http://localhost/xvn by your site URL on server
// Note: url start with http:// and not end with /

/*** template path ***/
$template_path = XC_URL.'/views/theme/'.ThemeMaster.'/'; //Warning: Don't change here

/*** Set Application Name ***/
$app_name = 'X.E.M - Xiao Education Management';
?>
