<?php
/**
 * Project: xsc.
 * File: header.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:35 PM - 8/21/13
 * Website: www.xiao.vn
 */
include 'config.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"><!-- <![endif]-->
<head>
    <title>Xiao Server Management</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <!--[if IE]><!--><script src="<?php echo $admintemplate_path;?>asset/js/excanvas.js"></script><!--<![endif]-->
    <!--[if lt IE 8]><script src="../../common/theme/scripts/plugins/other/json2.js"></script><![endif]-->

    <!-- Bootstrap -->
    <link href="<?php echo $admintemplate_path;?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $admintemplate_path;?>asset/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $admintemplate_path;?>asset/css/glyphicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $admintemplate_path;?>asset/css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="../../common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="<?php echo $admintemplate_path;?>asset/css/uniform.default.css" rel="stylesheet" />

    <!-- PrettyPhoto -->
    <link href="<?php echo $admintemplate_path;?>asset/css/prettyPhoto.css" rel="stylesheet" />

    <!-- JQuery -->
    <script src="<?php echo $admintemplate_path;?>asset/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo $admintemplate_path;?>asset/js/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo $admintemplate_path;?>asset/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Bootstrap Extended -->
    <link href="<?php echo $admintemplate_path;?>asset/css/fileupload.css" rel="stylesheet">
    <link href="<?php echo $admintemplate_path;?>asset/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
    <link href="<?php echo $admintemplate_path;?>asset/css/bootstrap-select.css" rel="stylesheet" />
    <link href="<?php echo $admintemplate_path;?>asset/css/bootstrap-toggle-buttons.css" rel="stylesheet" />

    <!-- DateTimePicker Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/datetimepicker.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="<?php echo $admintemplate_path;?>asset/css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/jquery.miniColors.css" rel="stylesheet" />

    <!-- Notyfy Notifications Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/jquery.notyfy.css" rel="stylesheet" />
    <link href="<?php echo $admintemplate_path;?>asset/css/default.css" rel="stylesheet" />

    <!-- Gritter Notifications Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/jquery.gritter.css" rel="stylesheet" />

    <!-- Easy-pie Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/jquery.easy-pie-chart.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/prettify.css" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="<?php echo $admintemplate_path;?>asset/css/select2.css" rel="stylesheet" />

    <!-- Pageguide Guided Tour Plugin -->
    <!--[if gt IE 8]><!--><link media="screen" href="<?php echo $admintemplate_path;?>asset/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

	<!-- Farbtastic ColorPicker Plugin -->
	<link href="<?php echo $admintemplate_path;?>asset/css/farbtastic.css"  rel="stylesheet" />

	<!-- Multiselect Plugin -->
	<link href="<?php echo $admintemplate_path;?>asset/css/multi-select.css" rel="stylesheet" />

	<!-- bootstrap-timepicker -->
	<link href="<?php echo $admintemplate_path;?>asset/css/bootstrap-timepicker.min.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $admintemplate_path;?>asset/css/style-default.css" rel="stylesheet" type="text/css" />

    <!-- LESS.js Library -->
    <script src="<?php echo $admintemplate_path;?>asset/js/less.min.js"></script>
