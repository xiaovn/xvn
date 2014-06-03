<?php
/**
 * Project: xvn.
 * File: app_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:53 AM - 7/31/13
 * Website: www.xiao.vn
 */
include "header.php";
$applist = $applist;
?>

    <!-- Bootstrap -->
    <link href="<?php echo $template_path;?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_path;?>css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $template_path;?>css/glyphicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="<?php echo $template_path;?>css/uniform.default.css" rel="stylesheet" />

    <!-- Bootstrap Extended -->
    <link href="<?php echo $template_path;?>css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="<?php echo $template_path;?>css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?php echo $template_path;?>css/jquery.miniColors.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="<?php echo $template_path;?>css/prettify.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- LESS.js Library -->
    <script src="<?php echo $template_path;?>js/less.min.js"></script>
</head>
<body>
<!-- Main Container Fluid -->
<div class="container-fluid">

<!-- Content -->
<div id="content">

<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
<?php
    require_once "nav.php";
?>
<!-- Top navbar END -->
<div class="container-960 innerT">

<h3 class="glyphicons shopping_cart"><i></i>Application Store</h3>
<div class="separator bottom"></div>

<div class="carousel-1 carousel slide" id="myCarousel">
    <div class="carousel-inner">

        <!-- Item -->
        <div class="item active">
            <div class="row-fluid">
                <div class="span5 relativeWrap">
                    <div class="carousel-caption center">
                        <h2>Gói ứng dụng luyện thi</h2>
                        <p>Giảm 30% cho gói ứng dụng luyện thi đại học, cao đẳng với hơn 3000 câu hỏi trắc nghiệm và hơn 1000 dạng bài tập các môn Toán, Lý, Hóa, Sinh, Tiếng Anh</p>
                        <p class="strong separator">Mã khuyến mãi: XEM-AVP0821</p>
                        <button type="button" class="btn btn-large btn-block btn-inverse"><i class="icon-shopping-cart"></i> Đăng ký ngay!</button>
                    </div>
                </div>
                <div class="span7">
                    <img src="<?php echo $template_path;?>images/12.jpg" alt="" />
                </div>
            </div>
        </div>
        <!-- // Item END -->

        <!-- Item -->
        <div class="item">
            <div class="row-fluid">
                <div class="span5 relativeWrap">
                    <div class="carousel-caption center">
                        <h2>Gói ứng dụng luyện thi</h2>
                        <p>Giảm 30% cho gói ứng dụng luyện thi đại học, cao đẳng với hơn 3000 câu hỏi trắc nghiệm và hơn 1000 dạng bài tập các môn Toán, Lý, Hóa, Sinh, Tiếng Anh</p>
                        <p class="strong separator">Mã khuyến mãi: XEM-AVP0821</p>
                        <button type="button" class="btn btn-large btn-block btn-inverse"><i class="icon-shopping-cart"></i> Đăng ký ngay!</button>
                    </div>
                </div>
                <div class="span7">
                    <img src="<?php echo $template_path;?>images/10.jpg" alt="" />
                </div>
            </div>
        </div>
        <!-- // Item END -->
    </div>
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
</div>

<div class="row-fluid">
    <div class="span3">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body list">

                <!-- List -->
                <ul>
                    <?php
                    $listcat = application::getInstance()->get_app_category_list();
                    foreach($listcat as $lc)
                    {
                        ?>
                        <li>
                            <a href=""><?php echo $lc->catname;?></a>
                            <span class="badge"><?php echo application::getInstance()->get_num_app_by_category($lc->catid);?></span>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <!-- // List END -->

            </div>
        </div>
        <!-- // Widget END -->

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body">
                <div class="glyphicons glyphicon-xlarge glyphicon-top circle_question_mark">
                    <i></i>
                    <h4>Trợ giúp sử dụng</h4>
                    <p>Liên hệ ngay với các bộ phận hỗ trợ để được giải đáp.</p>
                    <a href="" class="btn btn-primary btn-block"><span class="icon-comments-alt"></span> Hỗ trợ trực tuyến</a>
                </div>
            </div>
        </div>

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Thông báo</h4></div>
            <div class="widget-body"><p class="margin-none">Hệ thống thanh toán đang tạm ngừng giao dịch để nâng cấp, mọi thao tác thanh toán tại X.E.M đều là lừa đảo.</p></div>
        </div>

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-head"><h4 class="heading glyphicons tags strong"><i></i>Tags</h4></div>
            <div class="widget-body center"><span class="label">education</span> <span class="label">lop 12</span> <span class="label">toan hoc</span> <span class="label">vat ly</span> <span class="label">game</span> <span class="label">bai giang</span></div>
        </div>

    </div>
    <div class="span9">

        <div data-toggle="gridalicious" data-gridalicious-width="180" data-gridalicious-gutter="0">
            <?php
            foreach($applist as $al)
            {
                ?>
                <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                    <div class="widget-body padding-none">
                        <a href="" class="thumb"><img src="<?php echo $upload_path;?>application/thumb/<?php echo $al->appimage;?>" alt="photo" /></a>
                        <div class="description">
                            <h5 class="text-uppercase strong"><?php echo $al->appname;?></h5>
                            <p><?php echo substr($al->appdescription,0,99);?>...</p>
                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="btn-group">
                                        <button type="button" id="<?php echo $al->appid?>" class="btn btn-app-like btn-inverse" data-toggle="tooltip" data-title="Thích"><i class="icon-heart"></i></button>
                                        <a id="<?php echo $al->appid?>" href="ungdung/detail/<?php echo $al->appid?>" class="btn btn-app-register btn-success"><i class="icon-shopping-cart icon-fixed-width"></i> Đăng ký</a>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="text-right">
                                        <a href="ungdung/detail/<?php echo $al->appid?>" class="btn btn-default" data-toggle="tooltip" data-title="Xem"><i class="icon-eye-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ribbon-wrapper"><div class="ribbon success">&dollar; <?php echo $al->appprice;?></div></div>
                </div>
            <?php
            }
            ?>


        </div>

    </div>
</div>
</div>
</div>
<!-- // Content END -->
<?php require_once "footer.php"?>