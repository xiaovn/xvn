<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 2:17 PM
 * To change this template use File | Settings | File Templates.
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css"  rel="stylesheet" />
    </head>
<body>

    <!-- Main Container Fluid -->
<div class="container-fluid">

    <!-- Content -->
    <div id="content">

    <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
    <?php require_once "nav.php";?>
    <!-- Top navbar END -->
    <div class="container-960 innerT">

        <h3 class="glyphicons shopping_cart"><i></i>Xiao Application Store</h3>
        <div class="separator bottom"></div>

        <?php foreach($applist as $app):?>
            <div class="carousel-1 carousel slide" id="myCarousel">
                <div class="carousel-inner">
                    <!-- Item -->
                    <div class="item active">
                        <div class="row-fluid">
                            <div class="span5 relativeWrap">
                                <div class="carousel-caption center">
                                    <h2><?php echo $app->appname?></h2>
                                    <p></p>
                                    <p class="strong separator"><?php echo "Mã ứng dụng: ".$app->appid?></p>
                                    <button type="button" class="btn btn-large btn-block btn-inverse"><i class="icon-shopping-cart"></i> Đăng ký ngay!</button>
                                </div>
                            </div>
                            <div class="span7">
                                <img src="<?php echo $template_path;?>images/12.jpg" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/gallery/12.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php"?>