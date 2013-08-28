<?php
/**
 * Project: xvn.
 * File: blank.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:35 AM - 8/26/13
 * Website: www.xiao.vn
 */
include_once 'header.php';
?>
    <!-- Bootstrap Image Gallery -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/bootstrap-image-gallery.min.css" rel="stylesheet" />


    <!-- FireBug Lite -->
    <!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
</head>
<body class="">

<!-- Main Container Fluid -->
<div class="container-fluid fluid menu-left">

    <!-- Sidebar menu & content wrapper -->
    <div id="wrapper">

        <!-- Sidebar Menu -->
        <div id="menu" class="hidden-phone hidden-print">

    <!-- Brand -->
    <a href="index.html?lang=en" class="appbrand">X.E.M. ADMIN</a>

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
            <?php
                include_once 'sidebar.php';
            ?>
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
<?php
include_once 'mainnav.php';
?>
<!-- Top navbar END -->

<?php
include_once 'breadcrumb.php';
?>
            <!-- Top navbar END -->
<h2>Dashboard <span>for your next cool web APP</span></h2>
<div class="innerLR">


            <h3>Blank page</h3>
            <p>This is a light-weight blank page, with minimum to none plugins loaded, a simpler menu example and perfect to get you started, as you build up your next cool web app. You can <a href="index.html-lang=en.htm" tppabs="http://demo.mosaicpro.biz/quickadmin/php/admin/index.html?lang=en" class="glyphicons single link"><i></i>return to the fully featured version</a> anytime.</p>


        </div>
        <!-- // Content END -->

    </div>
    <div class="clearfix"></div>
    <!-- // Sidebar menu & content wrapper END -->
<?php
include_once 'footer.php';
?>