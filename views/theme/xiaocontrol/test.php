<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top sidebar sidebar-full sticky-sidebar"><!-- <![endif]-->
<head>
    <title>Quick Admin Template (v1.4.0)</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../asset/css/responsive.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="../asset/css/glyphicons.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="font-awesome.min.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/fonts/font-awesome/css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="font-awesome-ie7.min.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="../asset/css/uniform.default.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />

    <!-- PrettyPhoto -->
    <link href="../asset/css/prettyPhoto.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />

    <!-- JQuery -->
    <script src="../asset/js/jquery-1.10.1.min.js" tppabs="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../asset/js/jquery-migrate-1.2.1.min.js" tppabs="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../asset/js/html5shiv.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/html5shiv.js"></script>
    <![endif]-->

    <!-- Bootstrap Extended -->
    <link href="../asset/css/fileupload.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/jasny-fileupload/css/fileupload.css" rel="stylesheet">
    <link href="../asset/css/bootstrap-wysihtml5-0.0.2.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
    <link href="../asset/css/bootstrap-select.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-select/bootstrap-select.css" rel="stylesheet" />
    <link href="../asset/css/bootstrap-toggle-buttons.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" rel="stylesheet" />

    <!-- DateTimePicker Plugin -->
    <link href="../asset/css/datetimepicker.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="../asset/css/jquery-ui-1.9.2.custom.min.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="../asset/css/jquery.miniColors.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css" rel="stylesheet" />

    <!-- Notyfy Notifications Plugin -->
    <link href="../asset/css/jquery.notyfy.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css" rel="stylesheet" />
    <link href="../asset/css/default.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/notifications/notyfy/themes/default.css" rel="stylesheet" />

    <!-- Gritter Notifications Plugin -->
    <link href="../asset/css/jquery.gritter.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css" rel="stylesheet" />

    <!-- Easy-pie Plugin -->
    <link href="../asset/css/jquery.easy-pie-chart.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="../asset/css/prettify.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/google-code-prettify/prettify.css" rel="stylesheet" />

    <!-- Select2 Plugin -->
    <link href="../asset/css/select2.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/select2/select2.css" rel="stylesheet" />

    <!-- Pageguide Guided Tour Plugin -->
    <!--[if gt IE 8]><!--><link media="screen" href="pageguide.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/pageguide/css/pageguide.css" rel="stylesheet" /><!--<![endif]-->

    <!-- Farbtastic ColorPicker Plugin -->
    <link href="../asset/css/farbtastic.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/color/farbtastic/farbtastic.css" rel="stylesheet" />

    <!-- Multiselect Plugin -->
    <link href="../asset/css/multi-select.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/multiselect/css/multi-select.css" rel="stylesheet" />

    <!-- bootstrap-timepicker -->
    <link href="../asset/css/bootstrap-timepicker.min.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="../asset/css/style-default.css-1373690407.css" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/css/style-default.css?1373690407" rel="stylesheet" type="text/css" />




    <!-- FireBug Lite -->
    <!-- <script src="../asset/js/https://getfirebug.com/firebug-lite-debug.js"></script> -->

    <!-- LESS.js Library -->
    <script src="../asset/js/less.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="">

<!-- Main Container Fluid -->
<div class="container-fluid fluid menu-left">

<!-- Sidebar menu & content wrapper -->
<div id="wrapper">

<!-- Sidebar Menu -->
<div id="menu" class="hidden-phone hidden-print">

    <!-- Brand -->
    <a href="index.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/index.html?lang=en" class="appbrand">Quick Admin</a>

    <!-- Scrollable menu wrapper with Maximum height -->
    <div class="slim-scroll" data-scroll-height="800px">

        <!-- Sidebar Profile -->
			<span class="profile center">
				<a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en"><img src="avatar-36x36.jpg" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/avatar-36x36.jpg" alt="Avatar" /></a>
			</span>
        <!-- // Sidebar Profile END -->

        <!-- Regular Size Menu -->
        <ul>


            <!-- Not blank page -->

            <!-- Quick Sidebar Style -->
            <!-- // Quick Sidebar Style END -->

            <!-- Full Sidebar Style -->
            <li><a href="index.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/index.html?lang=en" class="glyphicons dashboard"><i></i> Dashboard</a></li>
            <li class="dropdown dd-1 active">
                <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Components <span class="icon-chevron-right"></span></a>
                <ul class="dropdown-menu pull-left">

                    <!-- Components Submenu Level 2 -->
                    <li class="dropdown submenu active">
                        <a data-toggle="dropdown" class="dropdown-toggle">Forms</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="form_wizards.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_wizards.html?lang=en">Form Wizards</a></li>
                            <li class=" active"><a href="form_elements.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?lang=en">Form Elements</a></li>
                            <li class=""><a href="form_validator.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_validator.html?lang=en">Form Validator</a></li>
                            <li class=""><a href="file_managers.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/file_managers.html?lang=en">File Managers</a></li>
                        </ul>
                    </li>
                    <!-- // Components Submenu Level 2 END -->

                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle">Tables</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="tables.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tables.html?lang=en">Tables</a></li>
                            <li class=""><a href="tables_responsive.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tables_responsive.html?lang=en">Responsive Tables</a></li>
                            <li class=""><a href="pricing_tables.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/pricing_tables.html?lang=en">Pricing tables</a></li>
                        </ul>
                    </li>

                    <!-- Components Submenu Regular Items -->
                    <li class=""><a href="ui.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/ui.html?lang=en">UI Elements</a></li>
                    <li class=""><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en">Icons</a></li>
                    <li class=""><a href="widgets.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/widgets.html?lang=en">Widgets</a></li>
                    <li class=""><a href="tabs.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tabs.html?lang=en">Tabs</a></li>
                    <li class=""><a href="sliders.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/sliders.html?lang=en">Sliders</a></li>
                    <li class=""><a href="charts.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/charts.html?lang=en">Charts</a></li>
                    <li class=""><a href="grid.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/grid.html?lang=en">Grid system</a></li>
                    <li class=""><a href="notifications.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/notifications.html?lang=en">Notifications</span></a></li>
                    <li class=""><a href="modals.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/modals.html?lang=en">Modals</a></li>
                    <li class=""><a href="thumbnails.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/thumbnails.html?lang=en">Thumbnails</a></li>
                    <li class=""><a href="carousels.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/carousels.html?lang=en">Carousels</a></li>
                    <li class=""><a href="image_crop.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/image_crop.html?lang=en">Image Cropping</a></li>
                    <li class=""><a href="tour.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tour.html?lang=en">Page Tour</a></li>

                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle">APIs</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="twitter.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/twitter.html?lang=en">Twitter API</a></li>
                            <li class=""><a href="google_analytics.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/google_analytics.html?lang=en">Google Analytics API</a></li>
                        </ul>
                    </li>

                    <li class=""><a href="infinite_scroll.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/infinite_scroll.html?lang=en">Infinite Scroll</a></li>
                    <!-- // Components Submenu Regular Items END -->

                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle glyphicons circle_info"><i></i>4 Level Menu</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class="dropdown submenu">
                                <a data-toggle="dropdown" href="#" class="dropdown-toggle">Menu item</a>
                                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                                    <li><a href="#">Menu item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown dd-1">
                <a href="" data-toggle="dropdown" class="glyphicons notes"><i></i>Pages <span class="icon-chevron-right"></span></a>
                <ul class="dropdown-menu pull-left">

                    <li><a href="timeline.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/timeline.html?lang=en" class="glyphicons history"><i></i>Timeline</a></li>
                    <li><a href="employees.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/employees.html?lang=en" class="glyphicons group"><i></i>Employees</a></li>

                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Front</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en">Revolution Slider Fixed</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en">Revolution Slider Wide</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en">Home page #1</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en">Home page #2</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en">About us</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en">Pricing</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en">Blog</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en">Blog Timeline</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en">Shop Catalog</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en">Shop Product</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en">Shopping Cart</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en">Contact</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en">Login</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en">Sign up</a></li>
                            <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en">Error page</a></li>
                        </ul>
                    </li>

                    <li><a href="invoice.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/invoice.html?lang=en" class="glyphicons credit_card"><i></i>Invoice</a></li>
                    <li><a href="faq.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/faq.html?lang=en" class="glyphicons circle_question_mark"><i></i>FAQ</a></li>
                    <li><a href="search.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/search.html?lang=en" class="glyphicons search"><i></i>Search</a></li>
                    <li><a href="ratings.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/ratings.html?lang=en" class="glyphicons star"><i></i>Ratings</a></li>

                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Account</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en">Advanced profile</a></li>
                            <li class=""><a href="my_account.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account.html?lang=en">My Account</a></li>
                            <li><a href="login.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/login.html?lang=en"><i></i>Login</a></li>
                            <li><a href="signup.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/signup.html?lang=en"><i></i>Register</a></li>
                        </ul>
                    </li>
                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle glyphicons google_maps"><i></i>Maps</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="maps_vector.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/maps_vector.html?lang=en">Vector maps</a></li>
                            <li class=""><a href="maps_google.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/maps_google.html?lang=en">Google maps</a></li>
                        </ul>
                    </li>
                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" class="dropdown-toggle glyphicons shopping_cart"><i></i>Online Shop</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li class=""><a href="shop_products.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_products.html?lang=en">Products</a></li>
                            <li class=""><a href="shop_edit_product.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_edit_product.html?lang=en">Add product</a></li>
                            <li class=""><a href="shop_orders_timeline.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_orders_timeline.html?lang=en">Orders Timeline</a></li>
                        </ul>
                    </li>
                    <li><a href="typography.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/typography.html?lang=en" class="glyphicons font"><i></i>Typography</a></li>
                    <li><a href="gallery.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/gallery.html?lang=en" class="glyphicons picture"><i></i>Photo Gallery</a></li>
                    <li><a href="calendar.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/calendar.html?lang=en" class="glyphicons calendar"><i></i>Calendar</a></li>
                    <li><a href="bookings.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/bookings.html?lang=en" class="glyphicons user_add"><i></i>Bookings</a></li>
                    <li><a href="finances.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/finances.html?lang=en" class="glyphicons coins"><i></i>Finances</a></li>
                    <li><a href="error.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/error.html?lang=en" class="glyphicons warning_sign"><i></i>Error page</a></li>
                    <li><a href="blank.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/blank.html?lang=en" class="glyphicons magic"><i></i>Blank page</a></li>
                </ul>
            </li>
            <li class="glyphs">
                <ul>
                    <li class="active"><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons heart"><i></i></a></li>
                    <li><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons home"><i></i></a></li>
                    <li><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons bin"><i></i></a></li>
                    <li><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons user"><i></i></a></li>
                </ul>
            </li>
            <li class="search open">
                <form autocomplete="off" class="dropdown dd-1">
                    <input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
                    <button type="button" class="glyphicons search"><i></i></button>
                </form>
            </li>
            <!-- // Full Sidebar Style END -->

            <!-- // Not blank page END -->

        </ul>
        <div class="clearfix"></div>
        <!-- // Regular Size Menu END -->

        <div class="alert alert-primary">
            <a class="close" data-dismiss="alert">&times;</a>
            <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.</p>
        </div>

    </div>
    <!-- // Scrollable Menu wrapper with Maximum Height END -->

</div>
<!-- // Sidebar Menu END -->

<!-- Content -->
<div id="content">

<!-- Top navbar -->
<div class="navbar main">

<!-- Menu Toggle Button -->
<button type="button" class="btn btn-navbar pull-left">
    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
</button>
<!-- // Menu Toggle Button END -->

<!-- Not Blank page -->

<!-- Full Top Style -->
<ul class="topnav pull-left">
    <li><a href="index.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/index.html?lang=en" class="glyphicons dashboard"><i></i> Dashboard</a></li>
    <li class="dropdown dd-1 active">
        <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Components <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <!-- Components Submenu Level 2 -->
            <li class="dropdown submenu active">
                <a data-toggle="dropdown" class="dropdown-toggle">Forms</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="form_wizards.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_wizards.html?lang=en">Form Wizards</a></li>
                    <li class=" active"><a href="form_elements.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?lang=en">Form Elements</a></li>
                    <li class=""><a href="form_validator.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_validator.html?lang=en">Form Validator</a></li>
                    <li class=""><a href="file_managers.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/file_managers.html?lang=en">File Managers</a></li>
                </ul>
            </li>
            <!-- // Components Submenu Level 2 END -->

            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Tables</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="tables.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tables.html?lang=en">Tables</a></li>
                    <li class=""><a href="tables_responsive.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tables_responsive.html?lang=en">Responsive Tables</a></li>
                    <li class=""><a href="pricing_tables.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/pricing_tables.html?lang=en">Pricing tables</a></li>
                </ul>
            </li>

            <!-- Components Submenu Regular Items -->
            <li class=""><a href="ui.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/ui.html?lang=en">UI Elements</a></li>
            <li class=""><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en">Icons</a></li>
            <li class=""><a href="widgets.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/widgets.html?lang=en">Widgets</a></li>
            <li class=""><a href="tabs.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tabs.html?lang=en">Tabs</a></li>
            <li class=""><a href="sliders.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/sliders.html?lang=en">Sliders</a></li>
            <li class=""><a href="charts.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/charts.html?lang=en">Charts</a></li>
            <li class=""><a href="grid.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/grid.html?lang=en">Grid system</a></li>
            <li class=""><a href="notifications.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/notifications.html?lang=en">Notifications</span></a></li>
            <li class=""><a href="modals.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/modals.html?lang=en">Modals</a></li>
            <li class=""><a href="thumbnails.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/thumbnails.html?lang=en">Thumbnails</a></li>
            <li class=""><a href="carousels.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/carousels.html?lang=en">Carousels</a></li>
            <li class=""><a href="image_crop.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/image_crop.html?lang=en">Image Cropping</a></li>
            <li class=""><a href="tour.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/tour.html?lang=en">Page Tour</a></li>

            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">APIs</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="twitter.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/twitter.html?lang=en">Twitter API</a></li>
                    <li class=""><a href="google_analytics.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/google_analytics.html?lang=en">Google Analytics API</a></li>
                </ul>
            </li>

            <li class=""><a href="infinite_scroll.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/infinite_scroll.html?lang=en">Infinite Scroll</a></li>
            <!-- // Components Submenu Regular Items END -->

            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicons circle_info"><i></i>4 Level Menu</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class="dropdown submenu">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">Menu item</a>
                        <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                            <li><a href="#">Menu item</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="dropdown dd-1">
        <a href="" data-toggle="dropdown" class="glyphicons notes"><i></i>Pages <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <li><a href="timeline.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/timeline.html?lang=en" class="glyphicons history"><i></i>Timeline</a></li>
            <li><a href="employees.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/employees.html?lang=en" class="glyphicons group"><i></i>Employees</a></li>

            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Front</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_slider.html?lang=en">Revolution Slider Fixed</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_slider_fullwidth.html?lang=en">Revolution Slider Wide</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index.html?lang=en">Home page #1</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/index_2.html?lang=en">Home page #2</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/about.html?lang=en">About us</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/pricing.html?lang=en">Pricing</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/blog.html?lang=en">Blog</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/blog_timeline.html?lang=en">Blog Timeline</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop.html?lang=en">Shop Catalog</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop_product.html?lang=en">Shop Product</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/shop_cart.html?lang=en">Shopping Cart</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/contact.html?lang=en">Contact</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/login.html?lang=en">Login</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/signup.html?lang=en">Sign up</a></li>
                    <li><a href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en%27" tppabs="http://demo.mosaicpro.biz/quickadmin/php/front/error.html?lang=en">Error page</a></li>
                </ul>
            </li>

            <li><a href="invoice.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/invoice.html?lang=en" class="glyphicons credit_card"><i></i>Invoice</a></li>
            <li><a href="faq.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/faq.html?lang=en" class="glyphicons circle_question_mark"><i></i>FAQ</a></li>
            <li><a href="search.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/search.html?lang=en" class="glyphicons search"><i></i>Search</a></li>
            <li><a href="ratings.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/ratings.html?lang=en" class="glyphicons star"><i></i>Ratings</a></li>

            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicons user"><i></i>Account</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en">Advanced profile</a></li>
                    <li class=""><a href="my_account.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account.html?lang=en">My Account</a></li>
                    <li><a href="login.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/login.html?lang=en"><i></i>Login</a></li>
                    <li><a href="signup.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/signup.html?lang=en"><i></i>Register</a></li>
                </ul>
            </li>
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicons google_maps"><i></i>Maps</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="maps_vector.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/maps_vector.html?lang=en">Vector maps</a></li>
                    <li class=""><a href="maps_google.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/maps_google.html?lang=en">Google maps</a></li>
                </ul>
            </li>
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle glyphicons shopping_cart"><i></i>Online Shop</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="shop_products.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_products.html?lang=en">Products</a></li>
                    <li class=""><a href="shop_edit_product.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_edit_product.html?lang=en">Add product</a></li>
                    <li class=""><a href="shop_orders_timeline.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/shop_orders_timeline.html?lang=en">Orders Timeline</a></li>
                </ul>
            </li>
            <li><a href="typography.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/typography.html?lang=en" class="glyphicons font"><i></i>Typography</a></li>
            <li><a href="gallery.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/gallery.html?lang=en" class="glyphicons picture"><i></i>Photo Gallery</a></li>
            <li><a href="calendar.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/calendar.html?lang=en" class="glyphicons calendar"><i></i>Calendar</a></li>
            <li><a href="bookings.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/bookings.html?lang=en" class="glyphicons user_add"><i></i>Bookings</a></li>
            <li><a href="finances.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/finances.html?lang=en" class="glyphicons coins"><i></i>Finances</a></li>
            <li><a href="error.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/error.html?lang=en" class="glyphicons warning_sign"><i></i>Error page</a></li>
            <li><a href="blank.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/blank.html?lang=en" class="glyphicons magic"><i></i>Blank page</a></li>
        </ul>
    </li>
    <li class="glyphs hidden-tablet hidden-phone" data-toggle="tooltip" data-title="Click to see all the 400+ PREMIUM icons that you can use!" data-placement="bottom">
        <ul>
            <li class="active"><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons heart"><i></i></a></li>
            <li><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons home"><i></i></a></li>
            <li><a href="icons.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/icons.html?lang=en" class="glyphicons bin"><i></i></a></li>
        </ul>
    </li>
    <li class="search open hidden-phone hidden-tablet">
        <form autocomplete="off" class="dropdown dd-1">
            <input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
            <button type="button" class="glyphicons search"><i></i></button>
        </form>
    </li>
</ul>
<!-- // Full Top Style END -->


<!-- // Not Blank Page END -->


<!-- Top Menu Right -->
<ul class="topnav pull-right hidden-phone hidden-tablet hidden-desktop-1">

    <!-- Themer -->
    <li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
    <!-- // Themer END -->

    <!-- Language menu -->
    <li class="hidden-tablet hidden-phone hidden-desktop-1 dropdown dd-1 dd-flags" id="lang_nav">
        <a href="#" data-toggle="dropdown"><img src="en.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/en.png" alt="en" /></a>
        <ul class="dropdown-menu pull-left">
            <li class="active"><a href="form_elements.html-module=admin&page=form_elements&url_rewrite=&lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?module=admin&page=form_elements&url_rewrite=&lang=en" title="English"><img src="en.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/en.png" alt="English"> English</a></li>
            <li><a href="form_elements.html-module=admin&page=form_elements&url_rewrite=&lang=ro.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?module=admin&page=form_elements&url_rewrite=&lang=ro" title="Romanian"><img src="ro.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
            <li><a href="form_elements.html-module=admin&page=form_elements&url_rewrite=&lang=it.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?module=admin&page=form_elements&url_rewrite=&lang=it" title="Italian"><img src="it.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
            <li><a href="form_elements.html-module=admin&page=form_elements&url_rewrite=&lang=fr.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?module=admin&page=form_elements&url_rewrite=&lang=fr" title="French"><img src="fr.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/fr.png" alt="French"> French</a></li>
            <li><a href="form_elements.html-module=admin&page=form_elements&url_rewrite=&lang=pl.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/form_elements.html?module=admin&page=form_elements&url_rewrite=&lang=pl" title="Polish"><img src="pl.png" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
        </ul>
    </li>
    <!-- // Language menu END -->

    <!-- Profile / Logout menu -->
    <li class="account dropdown dd-1">
        <a data-toggle="dropdown" href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1">mosaicpro</span><i></i></a>
        <ul class="dropdown-menu pull-right">
            <li><a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en" class="glyphicons cogwheel">Settings<i></i></a></li>
            <li><a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en" class="glyphicons camera">My Photos<i></i></a></li>
            <li class="profile">
							<span>
								<span class="heading">Profile <a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="my_account_advanced.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/my_account_advanced.html?lang=en">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
            </li>
            <li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="login.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/login.html?lang=en">Sign Out</a>
							</span>
            </li>
        </ul>
    </li>
    <!-- // Profile / Logout menu END -->

</ul>
<!-- // Top Menu Right END -->
<div class="clearfix"></div>

</div>
<!-- Top navbar END -->

<ul class="breadcrumb">
    <li>You are here</li>
    <li><a href="index.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/index.html?lang=en" class="glyphicons dashboard"><i></i> Quick Admin</a></li>
    <li class="divider"></li>
    <li>Components</li>
    <li class="divider"></li>
    <li>Form Elements</li>
</ul>

<h3>Form Elements</h3>
<div class="innerLR">

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">
    <div class="widget-body">
        <p>There are various form elements contained in Quick Admin, custom select controls, custom checkbox &amp; radio controls, custom input controls with &amp; without appended / prepended elements (icons, dropdowns, dropups, groups), toggle (on/off) buttons, icons &amp; many more.</p>
    </div>
</div>
<!-- // Widget END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Toggle buttons</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body center">
        <div class="toggle-button" data-toggleButton-height="30" data-toggleButton-width="90">
            <input type="checkbox" checked="checked" />
        </div>
        <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="primary" data-toggleButton-height="30">
            <input type="checkbox" checked="checked" />
        </div>
        <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="warning" data-toggleButton-height="30">
            <input type="checkbox" checked="checked" />
        </div>
        <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="danger" data-toggleButton-height="30">
            <input type="checkbox" checked="checked" />
        </div>
        <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="success" data-toggleButton-height="30">
            <input type="checkbox" checked="checked" />
        </div>
        <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="inverse" data-toggleButton-height="30">
            <input type="checkbox" checked="checked" />
        </div>
    </div>
</div>
<!-- // Widget END -->

<h3>Input controls</h3>

<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Default</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body">
                <div class="row-fluid" data-toggle="source-code">
                    <input type="text" placeholder="Text input" class="span10" />
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Extended</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-prepend">
                    <span class="add-on">@</span>
                    <input id="prependedInput" class="span12" type="text" placeholder="Username" />
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Combined</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-prepend input-append">
                    <span class="add-on">$</span>
                    <input class="span12" id="appendedPrependedInput" type="text" placeholder="100,000,000" />
                    <span class="add-on">.00</span>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Checkbox</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body uniformjs">
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" />
                    Option 1 - Sexy checkbox
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" checked="checked" />
                    Option 2 - Checked
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" value="1" disabled="disabled" />
                    Option 3 - Disabled checkbox
                </label>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Buttons</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input class="span6" id="appendedInputButtons" type="text" placeholder="Placeholder .." />
                    <button class="btn btn-default" type="button"><i class="icon-search"></i></button>
                    <button class="btn btn-default" type="button">Options</button>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Dropdown / Dropup</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input class="span8" id="appendedDropdownButton" type="text" />
                    <div class="btn-group dropup">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget row-fluid widget-heading-simple widget-body-white" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Segmented Groups</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body" data-toggle="source-code">
                <div class="input-append">
                    <input type="text" class="span7" />
                    <div class="btn-group dropup">
                        <button class="btn btn-default" tabindex="-1">Action</button>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Radio</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body uniformjs">
                <label class="radio">
                    <input type="radio" class="radio" name="radio" value="1" /> Option 1 - Sexy radio
                </label><br/>
                <label class="radio">
                    <input type="radio" class="radio" name="radio" value="1" checked="checked" /> Option 2 - Checked
                </label><br/>
                <label class="radio">
                    <input type="radio" class="radio disabled" name="radio" value="1" disabled="disabled" /> Option 3 - Disabled radio
                </label>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

</div>
<!-- // Row END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">File controls</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body">
        <div class="row-fluid">
            <div class="span6">
                <h4 class="separator bottom">File upload widget</h4>
                <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                    <div class="input-append">
                        <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
            </div>
            <div class="span6">
                <h4 class="separator bottom">File upload button</h4>
                <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                    <span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">&times;</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Widget END -->

<!-- Widget -->
<div class="widget row-fluid widget-heading-simple widget-body-gray">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">WYSIHTML5 Editor</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body">
        <textarea id="mustHaveId" class="wysihtml5 span12" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
    </div>
</div>
<!-- // Widget END -->

<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Loading button</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body center" data-toggle="source-code">
                <button type="button" id="btn-loading" class="btn btn-primary" data-loading-text="Custom Loading Text ...">Click for Loading state</button>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-white">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Toggle button</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body center" data-toggle="source-code">
                <button type="button" class="btn btn-primary" data-toggle="button">Single Toggle</button>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Toggle checkbox style</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body center" data-toggle="source-code">
                <div class="btn-group" data-toggle="buttons-checkbox">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-white">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Toggle radio style</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body center" data-toggle="source-code">
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

</div>
<!-- // Row END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Select controls</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body">
        <div class="row-fluid">
            <div class="span3">
                <h5>Default</h5>
                <div class="row-fluid">
                    <select class="span12">
                        <optgroup label="Picnic">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Camping">
                            <option>Tent</option>
                            <option>Flashlight</option>
                            <option>Toilet Paper</option>
                        </optgroup>
                    </select>
                </div>
                <h5>Extended</h5>
                <div class="row-fluid">
                    <select class="selectpicker span12">
                        <optgroup label="Picnic">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Camping">
                            <option>Tent</option>
                            <option>Flashlight</option>
                            <option>Toilet Paper</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="span5">
                <h5>Styles</h5>
                <div class="row-fluid">
                    <select class="selectpicker span6" data-style="btn-primary">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span6" data-style="btn-default">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="row-fluid">
                    <select class="selectpicker span6" data-style="btn-info">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span6" data-style="btn-success">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="row-fluid">
                    <select class="selectpicker span6" data-style="btn-warning">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span6" data-style="btn-inverse">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
            </div>
            <div class="span4">
                <h5>Grid</h5>
                <div class="row-fluid">
                    <select class="selectpicker span3">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span9">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="row-fluid">
                    <select class="selectpicker span4">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span8">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
                <div class="row-fluid">
                    <select class="selectpicker span6">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                    <select class="selectpicker span6">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                    </select>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- // Widget END -->

<div class="widget widget-heading-simple widget-body-white">
<div class="widget-head">
    <h4 class="heading">Advanced Select controls</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
<div class="span6">
<h5>Basics</h5>
<div class="row-fluid">
    <select style="width: 100%;" id="select2_1">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
</div>
<div class="separator bottom"></div>
<h5>Multi-Value Select Boxes</h5>
<div class="row-fluid">
    <select multiple="multiple" style="width: 100%;" id="select2_2">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
</div>
<div class="separator bottom"></div>
<h5>Placeholders</h5>
<div class="row-fluid">
    <select style="width: 100%;" id="select2_3">
        <option></option>
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
    <div class="separator bottom"></div>
    <select multiple="multiple" style="width: 100%;" id="select2_4">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
</div>
</div>
<div class="span6">
    <h5>Tagging Support</h5>
    <input type="hidden" id="select2_5" style="width: 100%;" value="brown,red,green" />
    <div class="separator bottom"></div>
    <h5>Disabled Mode</h5>
    <select disabled="disabled" id="select2_6_1" style="width:100%">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
    <div class="separator bottom"></div>
    <select disabled="disabled" id="select2_6_2" multiple style="width:100%">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option><option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
            <option value="VT">Vermont</option><option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
    <div class="separator bottom"></div>
    <input type="button" id="select2_6_enable" class="btn btn-primary" value="Enable"/>
    <input type="button" id="select2_6_disable" class="btn btn-warning" value="Disable"/>
    <div class="separator bottom"></div>
    <h5>Templating</h5>
    <select style="width: 100%;" id="select2_7">
        <optgroup label="Alaskan/Hawaiian Time Zone">
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
        </optgroup>
        <optgroup label="Pacific Time Zone">
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
        </optgroup>
        <optgroup label="Mountain Time Zone">
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
        </optgroup>
        <optgroup label="Central Time Zone">
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
        </optgroup>
        <optgroup label="Eastern Time Zone">
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </optgroup>
    </select>
</div>
</div>
</div>
</div>

<div class="widget widget-heading-simple widget-body-white">
<div class="widget-head">
    <h4 class="heading">Multiselect</h4>
</div>
<div class="widget-body padding-none">
<div class="row-fluid row-merge">
<div class="span4">
    <div class="innerAll">
        <h5 class="strong text-uppercase">With selected options</h5>
        <select multiple id="pre-selected-options" class="multiselect" name="pre-selected-options[]">
            <option value="elem_1" selected>elem 1</option>
            <option value="elem_2">elem 2</option>
            <option value="elem_3">elem 3</option>
            <option value="elem_4">elem 4</option>
            <option value="elem_5">elem 5</option>
            <option value="elem_6">elem 6</option>
            <option value="elem_7">elem 7</option>
            <option value="elem_8">elem 8</option>
            <option value="elem_9">elem 9</option>
            <option value="elem_10">elem 10</option>
            <option value="elem_11">elem 11</option>
            <option value="elem_12">elem 12</option>
            <option value="elem_13">elem 13</option>
            <option value="elem_14">elem 14</option>
            <option value="elem_15">elem 15</option>
            <option value="elem_16">elem 16</option>
            <option value="elem_17">elem 17</option>
            <option value="elem_18">elem 18</option>
            <option value="elem_19">elem 19</option>
            <option value="elem_20">elem 20</option>
            <option value="elem_21">elem 21</option>
            <option value="elem_22">elem 22</option>
            <option value="elem_23">elem 23</option>
            <option value="elem_24">elem 24</option>
            <option value="elem_25">elem 25</option>
            <option value="elem_26">elem 26</option>
            <option value="elem_27">elem 27</option>
            <option value="elem_28">elem 28</option>
            <option value="elem_29">elem 29</option>
            <option value="elem_30">elem 30</option>
            <option value="elem_31">elem 31</option>
            <option value="elem_32">elem 32</option>
            <option value="elem_33">elem 33</option>
            <option value="elem_34">elem 34</option>
            <option value="elem_35">elem 35</option>
            <option value="elem_36">elem 36</option>
            <option value="elem_37">elem 37</option>
            <option value="elem_38">elem 38</option>
            <option value="elem_39">elem 39</option>
            <option value="elem_40">elem 40</option>
            <option value="elem_41">elem 41</option>
            <option value="elem_42" selected>elem 42</option>
            <option value="elem_43">elem 43</option>
            <option value="elem_44">elem 44</option>
            <option value="elem_45">elem 45</option>
            <option value="elem_46">elem 46</option>
            <option value="elem_47">elem 47</option>
            <option value="elem_48">elem 48</option>
            <option value="elem_49">elem 49</option>
            <option value="elem_50">elem 50</option>
            <option value="elem_51">elem 51</option>
            <option value="elem_52">elem 52</option>
            <option value="elem_53">elem 53</option>
            <option value="elem_54">elem 54</option>
            <option value="elem_55">elem 55</option>
            <option value="elem_56">elem 56</option>
            <option value="elem_57">elem 57</option>
            <option value="elem_58">elem 58</option>
            <option value="elem_59">elem 59</option>
            <option value="elem_60">elem 60</option>
            <option value="elem_61">elem 61</option>
            <option value="elem_62">elem 62</option>
            <option value="elem_63">elem 63</option>
            <option value="elem_64">elem 64</option>
            <option value="elem_65">elem 65</option>
            <option value="elem_66">elem 66</option>
            <option value="elem_67">elem 67</option>
            <option value="elem_68">elem 68</option>
            <option value="elem_69">elem 69</option>
            <option value="elem_70">elem 70</option>
            <option value="elem_71">elem 71</option>
            <option value="elem_72">elem 72</option>
            <option value="elem_73">elem 73</option>
            <option value="elem_74">elem 74</option>
            <option value="elem_75">elem 75</option>
            <option value="elem_76">elem 76</option>
            <option value="elem_77">elem 77</option>
            <option value="elem_78">elem 78</option>
            <option value="elem_79">elem 79</option>
            <option value="elem_80">elem 80</option>
            <option value="elem_81">elem 81</option>
            <option value="elem_82">elem 82</option>
            <option value="elem_83">elem 83</option>
            <option value="elem_84">elem 84</option>
            <option value="elem_85">elem 85</option>
            <option value="elem_86">elem 86</option>
            <option value="elem_87">elem 87</option>
            <option value="elem_88">elem 88</option>
            <option value="elem_89">elem 89</option>
            <option value="elem_90">elem 90</option>
            <option value="elem_91">elem 91</option>
            <option value="elem_92">elem 92</option>
            <option value="elem_93">elem 93</option>
            <option value="elem_94">elem 94</option>
            <option value="elem_95">elem 95</option>
            <option value="elem_96">elem 96</option>
            <option value="elem_97">elem 97</option>
            <option value="elem_98">elem 98</option>
            <option value="elem_99">elem 99</option>
            <option value="elem_100">elem 100</option>
        </select>
    </div>
</div>
<div class="span4">
    <div class="innerAll">
        <h5 class="strong text-uppercase">Groups</h5>
        <select id="multiselect-optgroup" multiple="multiple">
            <optgroup label="Friends">
                <option value="1">Yoda</option>
                <option value="2">Obiwan</option>
            </optgroup>
            <optgroup label="Enemies">
                <option value="3">Palpatine</option>
                <option value="4">Darth Vader</option>
            </optgroup>
        </select>
    </div>
</div>
<div class="span4">
    <div class="innerAll">
        <h5 class="strong text-uppercase">Custom header &amp; footer</h5>
        <select multiple id="multiselect-custom" class="multiselect" name="multiselect-custom[]">
            <option value="elem_1" selected>elem 1</option>
            <option value="elem_2">elem 2</option>
            <option value="elem_3">elem 3</option>
            <option value="elem_4">elem 4</option>
            <option value="elem_5">elem 5</option>
            <option value="elem_6">elem 6</option>
            <option value="elem_7">elem 7</option>
            <option value="elem_8">elem 8</option>
            <option value="elem_9">elem 9</option>
            <option value="elem_10">elem 10</option>
            <option value="elem_11">elem 11</option>
            <option value="elem_12">elem 12</option>
            <option value="elem_13">elem 13</option>
            <option value="elem_14">elem 14</option>
            <option value="elem_15">elem 15</option>
            <option value="elem_16">elem 16</option>
            <option value="elem_17">elem 17</option>
            <option value="elem_18">elem 18</option>
            <option value="elem_19">elem 19</option>
            <option value="elem_20">elem 20</option>
            <option value="elem_21">elem 21</option>
            <option value="elem_22">elem 22</option>
            <option value="elem_23">elem 23</option>
            <option value="elem_24">elem 24</option>
            <option value="elem_25">elem 25</option>
            <option value="elem_26">elem 26</option>
            <option value="elem_27">elem 27</option>
            <option value="elem_28">elem 28</option>
            <option value="elem_29">elem 29</option>
            <option value="elem_30">elem 30</option>
            <option value="elem_31">elem 31</option>
            <option value="elem_32">elem 32</option>
            <option value="elem_33">elem 33</option>
            <option value="elem_34">elem 34</option>
            <option value="elem_35">elem 35</option>
            <option value="elem_36">elem 36</option>
            <option value="elem_37">elem 37</option>
            <option value="elem_38">elem 38</option>
            <option value="elem_39">elem 39</option>
            <option value="elem_40">elem 40</option>
            <option value="elem_41">elem 41</option>
            <option value="elem_42" selected>elem 42</option>
            <option value="elem_43">elem 43</option>
            <option value="elem_44">elem 44</option>
            <option value="elem_45">elem 45</option>
            <option value="elem_46">elem 46</option>
            <option value="elem_47">elem 47</option>
            <option value="elem_48">elem 48</option>
            <option value="elem_49">elem 49</option>
            <option value="elem_50">elem 50</option>
            <option value="elem_51">elem 51</option>
            <option value="elem_52">elem 52</option>
            <option value="elem_53">elem 53</option>
            <option value="elem_54">elem 54</option>
            <option value="elem_55">elem 55</option>
            <option value="elem_56">elem 56</option>
            <option value="elem_57">elem 57</option>
            <option value="elem_58">elem 58</option>
            <option value="elem_59">elem 59</option>
            <option value="elem_60">elem 60</option>
            <option value="elem_61">elem 61</option>
            <option value="elem_62">elem 62</option>
            <option value="elem_63">elem 63</option>
            <option value="elem_64">elem 64</option>
            <option value="elem_65">elem 65</option>
            <option value="elem_66">elem 66</option>
            <option value="elem_67">elem 67</option>
            <option value="elem_68">elem 68</option>
            <option value="elem_69">elem 69</option>
            <option value="elem_70">elem 70</option>
            <option value="elem_71">elem 71</option>
            <option value="elem_72">elem 72</option>
            <option value="elem_73">elem 73</option>
            <option value="elem_74">elem 74</option>
            <option value="elem_75">elem 75</option>
            <option value="elem_76">elem 76</option>
            <option value="elem_77">elem 77</option>
            <option value="elem_78">elem 78</option>
            <option value="elem_79">elem 79</option>
            <option value="elem_80">elem 80</option>
            <option value="elem_81">elem 81</option>
            <option value="elem_82">elem 82</option>
            <option value="elem_83">elem 83</option>
            <option value="elem_84">elem 84</option>
            <option value="elem_85">elem 85</option>
            <option value="elem_86">elem 86</option>
            <option value="elem_87">elem 87</option>
            <option value="elem_88">elem 88</option>
            <option value="elem_89">elem 89</option>
            <option value="elem_90">elem 90</option>
            <option value="elem_91">elem 91</option>
            <option value="elem_92">elem 92</option>
            <option value="elem_93">elem 93</option>
            <option value="elem_94">elem 94</option>
            <option value="elem_95">elem 95</option>
            <option value="elem_96">elem 96</option>
            <option value="elem_97">elem 97</option>
            <option value="elem_98">elem 98</option>
            <option value="elem_99">elem 99</option>
            <option value="elem_100">elem 100</option>
        </select>
    </div>
</div>
</div>
</div>
</div>

<div class="widget widget-heading-simple widget-body-white">
    <div class="widget-head">
        <h4 class="heading">Input Masks</h4>
    </div>
    <div class="widget-body padding-none">
        <div class="row-fluid row-merge">
            <div class="span6">
                <div class="innerAll">
                    <label class="strong">Date #1</label>
                    <input type="text" id="inputmask-date" class="span8" placeholder="__/__/____" />
                    <span class="help-inline">d/m/y mask</span>
                    <div class="separator bottom"></div>

                    <label class="strong">Date #2</label>
                    <input type="text" id="inputmask-date-1" class="span8" placeholder="**/**/****" />
                    <span class="help-inline">Changing placeholder</span>
                    <div class="separator bottom"></div>

                    <label class="strong">Date #3</label>
                    <input type="text" id="inputmask-date-2" class="span8" placeholder="dd/mm/yyyy" />
                    <span class="help-inline">Multi-char placeholder</span>
                    <div class="separator bottom"></div>

                    <label class="strong">Currency</label>
                    <input type="text" id="inputmask-currency" class="span8" placeholder="&euro; 999.999.999,99" />
                    <span class="help-inline">&euro; 999.999.999,99</span>
                </div>
            </div>
            <div class="span6">
                <div class="innerAll">
                    <label class="strong">Phone Number</label>
                    <input type="text" id="inputmask-phone" class="span8" placeholder="(123) 456-7890" />
                    <span class="help-inline">(999) 999-9999</span>
                    <div class="separator bottom"></div>

                    <label class="strong">VAT Number</label>
                    <input type="text" id="inputmask-tax" class="span8" placeholder="12-3456789" />
                    <span class="help-inline">Multi-char placeholder</span>
                    <div class="separator bottom"></div>

                    <label class="strong">Decimal</label>
                    <input type="text" id="inputmask-decimal" class="span8" placeholder="123.01" />
                    <span class="help-inline">Allow numbers &amp; decimals</span>
                    <div class="separator bottom"></div>

                    <label class="strong">SSN</label>
                    <input type="text" id="inputmask-ssn" class="span8" placeholder="999-99-9999" />
                    <span class="help-inline">999-99-9999</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget widget-heading-simple widget-body-simple margin-none">
    <div class="widget-head"><h4 class="heading">Date/Time Picker</h4></div>
    <div class="widget-body">

        <div class="row-fluid">
            <div class="span4">
                <div class="well">
                    <h4>Default input</h4>
                    <input class="span12" size="16" type="text" value="2013-02-14 10:00" id="datetimepicker1" />
                </div>
            </div>
            <div class="span4">
                <div class="well">
                    <h4>Default component</h4>
                    <div class="input-append date" id="datetimepicker2">
                        <input class="span12" size="16" type="text" value="14 February 2013 - 10:00" />
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="well">
                    <h4>Positioning</h4>
                    <div class="input-append date" id="datetimepicker3">
                        <input class="span10" type="text" value="14 February 2013 - 10:00" />
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="well">
                    <h4>Advanced</h4>
                    <div class="input-append date" id="datetimepicker4">
                        <input type="text" value="14 February 2013 - 10:00" />
                        <span class="add-on"><i class="icon-remove"></i></span>
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="well">
                    <h4>Meridian format</h4>
                    <div class="input-append date" id="datetimepicker5">
                        <input type="text" value="14 February 2013 - 10:00" />
                        <span class="add-on"><i class="icon-remove"></i></span>
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="well">
                    <h4>Only Date Picker</h4>
                    <div class="input-append date" id="datetimepicker6">
                        <input type="text" value="18 June 2013 - 10:00" />
                        <span class="add-on"><i class="icon-th"></i></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="widget widget-heading-simple widget-body-white">
    <div class="widget-head">
        <h4 class="heading">Time Pickers</h4>
    </div>
    <div class="widget-body padding-none">
        <div class="row-fluid row-merge">
            <div class="span6">
                <div class="innerAll">
                    <p>Default timepicker.</p>
                    <div class="input-append bootstrap-timepicker">
                        <input id="timepicker1" type="text" class="input-small"><span class="add-on"><i class="icon-time"></i></span>
                    </div>
                    <p>Without component markup and keyboard input disabled.</p>
                    <div class="bootstrap-timepicker">
                        <input id="timepicker3" type="text" class="input-small">
                    </div>
                    <p>Without a template.</p>
                    <div class="bootstrap-timepicker">
                        <input id="timepicker5" type="text" class="input-small">
                        <i class="icon-time"></i>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="innerAll">
                    <p>Inside a modal with 24hr mode and seconds enabled.</p>
                    <div class="input-append bootstrap-timepicker">
                        <input id="timepicker2" type="text" class="input-small">
				            <span class="add-on">
				                <i class="icon-time"></i>
				            </span>
                    </div>
                    <p>Inside a modal with backdrop enabled, inputs disabled and with a preset value.</p>
                    <div id="timepicker4Modal" class="modal hide fade">
                        <div class="modal-header"><h3>A Timepicker Inside A Modal</h3></div>
                        <div class="modal-body" style="min-height: 150px; overflow: visible;">
								 <span class="bootstrap-timepicker" style="vertical-align: middle;">
									 <input id="timepicker4" class="input-small" value="10:35 AM" type="text" />
									 <i class="icon-time"></i>
								 </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="#timepicker4Modal" data-toggle="modal">Open Modal</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Color picker</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body center">

                <label class="control-label">Color picker</label>
                <input type="text" id="colorpickerColor" value="#5a6a87" />
                <div id="colorpicker"></div>

            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span6">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">JQueryUI Date picker</h4>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body">

                <label>Date picker input</label>
                <input type="text" id="datepicker" value="" />

                <label>Inline Date picker</label>
                <div id="datepicker-inline"></div>

            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

</div>
<!-- // Row END -->

</div>


</div>
<!-- // Content END -->

</div>
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<div id="footer" class="hidden-print">

    <!--  Copyright Line -->
    <div class="copy">&copy; 2012 - 2013 - <a href="javascript:if(confirm(%27http://www.mosaicpro.biz/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.mosaicpro.biz/%27" tppabs="http://www.mosaicpro.biz/">MosaicPro</a> - All Rights Reserved. <a href="javascript:if(confirm(%27http://themeforest.net/item/quick-admin-template/4940725?ref=mosaicpro  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://themeforest.net/item/quick-admin-template/4940725?ref=mosaicpro%27" tppabs="http://themeforest.net/item/quick-admin-template/4940725?ref=mosaicpro" target="_blank">Purchase Quick Admin on ThemeForest</a> - Current version: v1.4.0 / <a target="_blank" href="javascript:if(confirm(%27http://demo.mosaicpro.biz/quickadmin/CHANGELOG  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo.mosaicpro.biz/quickadmin/CHANGELOG%27" tppabs="http://demo.mosaicpro.biz/quickadmin/CHANGELOG">changelog</a></div>
    <!--  End Copyright Line -->

</div>
<!-- // Footer END -->

</div>
<!-- // Main Container Fluid END -->


<!-- Themer -->
<div id="themer" class="collapse">
    <div class="wrapper">
        <span class="close2">&times; close</span>
        <h4>Themer <span>color options</span></h4>
        <ul>
            <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
            <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
            <li>
                <span class="link" id="themer-custom-reset">reset theme</span>
                <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
            </li>
        </ul>
        <div id="themer-getcode" class="hide">
            <hr class="separator" />
            <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
            <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Themer END -->


<!-- Code Beautify -->
<script src="../asset/js/beautify.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
<script src="../asset/js/beautify-html.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>

<!-- PrettyPhoto -->
<script src="../asset/js/jquery.prettyPhoto.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '../../common/';
</script>

<!-- JQueryUI -->
<script src="../asset/js/jquery-ui-1.9.2.custom.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="../asset/js/jquery.ui.touch-punch.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>


<!-- Modernizr -->
<script src="../asset/js/modernizr.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/modernizr.js"></script>

<!-- Bootstrap -->
<script src="../asset/js/bootstrap.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll Plugin -->
<script src="../asset/js/jquery.slimscroll.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>

<!-- Common Demo Script -->
<script src="../asset/js/common.js-1373690407.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/demo/common.js?1373690407"></script>

<!-- Holder Plugin -->
<script src="../asset/js/holder.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/holder/holder.js"></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="../asset/js/jquery.uniform.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

<!-- Bootstrap Extended -->
<script src="../asset/js/bootstrap-select.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
<script src="../asset/js/jquery.toggle.buttons.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script src="../asset/js/twitter-bootstrap-hover-dropdown.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="../asset/js/bootstrap-fileupload.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js"></script>
<script src="../asset/js/bootbox.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootbox.js"></script>
<script src="../asset/js/wysihtml5-0.3.0_rc2.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
<script src="../asset/js/bootstrap-wysihtml5-0.0.2.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>

<!-- Google Code Prettify -->
<script src="../asset/js/prettify.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>

<!-- Gritter Notifications Plugin -->
<script src="../asset/js/jquery.gritter.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>

<!-- Notyfy Notifications Plugin -->
<script src="../asset/js/jquery.notyfy.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>

<!-- MiniColors Plugin -->
<script src="../asset/js/jquery.miniColors.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>

<!-- DateTimePicker Plugin -->
<script src="../asset/js/bootstrap-datetimepicker.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- Cookie Plugin -->
<script src="../asset/js/jquery.cookie.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/system/jquery.cookie.js"></script>

<!-- Select2 Plugin -->
<script src="../asset/js/select2.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/select2/select2.js"></script>

<!-- Colors -->
<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>

<!-- Themer -->
<script>
    var themerPrimaryColor = primaryColor;
</script>
<script src="../asset/js/themer.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/demo/themer.js"></script>

<!-- Twitter Feed -->
<script src="../asset/js/twitter.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/demo/twitter.js"></script>

<!-- Easy-pie Plugin -->
<script src="../asset/js/jquery.easy-pie-chart.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>

<!-- Sparkline Charts Plugin -->
<script src="../asset/js/jquery.sparkline.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>

<!-- Ba-Resize Plugin -->
<script src="../asset/js/jquery.ba-resize.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>


<!-- ColorPicker -->
<script src="../asset/js/farbtastic.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/color/farbtastic/farbtastic.js"></script>

<!-- Multiselect Plugin -->
<script src="../asset/js/jquery.multi-select.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/multiselect/js/jquery.multi-select.js"></script>

<!-- bootstrap-timepicker Plugin -->
<script src="../asset/js/bootstrap-timepicker.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<!-- InputMask Plugin -->
<script src="../asset/js/jquery.inputmask.bundle.min.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/plugins/forms/jquery-inputmask/dist/jquery.inputmask.bundle.min.js"></script>

<!-- Form Elements Page Demo Script -->
<script src="../asset/js/form_elements.js" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/scripts/demo/form_elements.js"></script>


</body>
</html>