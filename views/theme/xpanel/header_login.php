<?php
/**
 * Project: xvn.
 * File: header_login.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
include "config.php"
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="front ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="front ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="front ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="front ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="front fluid top-full sticky-top"><!-- <![endif]-->
<head>
    <title><?php echo $app_name;?></title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Bootstrap -->
    <link href="<?php echo $template_path;?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_path;?>css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $template_path;?>css/glyphicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome-ie7.min.css" ><![endif]-->
    <!-- Uniform Pretty Checkboxes -->
    <link href="<?php echo $template_path;?>css/uniform.default.css" rel="stylesheet" />
    <!-- Bootstrap Extended -->
    <link href="<?php echo $template_path;?>css/bootstrap-select.css" rel="stylesheet" />
    <!-- JQueryUI -->
    <link href="<?php echo $template_path;?>css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?php echo $template_path;?>css/jquery.miniColors.css"  rel="stylesheet" />
    <!-- Google Code Prettify Plugin -->
    <link href="<?php echo $template_path;?>css/prettify.css"  rel="stylesheet" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $template_path;?>css/settings.css"  media="screen" />
    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $template_path;?>css/login.css" rel="stylesheet" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/chat/external.php?type=css" charset="utf-8" />
    <script type="text/javascript" src="/chat/includes/js/jquery.js"></script>
    <script type="text/javascript" src="/chat/includes/js/jquery-ui.js"></script>
    <!-- LESS.js Library -->
    <script src="<?php echo $template_path;?>js/less.min.js" ></script>
</head>
<body class="login">

<!-- Main Container Fluid -->
<div class="container-fluid">
