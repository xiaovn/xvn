<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 8/24/13
 * Time: 3:30 PM
 * To change this template use File | Settings | File Templates.
 */
include "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="front ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="front ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="front ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="front ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="front fluid top-full sticky-top"><!-- <![endif]-->
<head>
    <title>AAA</title>

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
                    <img src="<?php echo $template_path;?>images/12.jpg" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/gallery/12.jpg" alt="" />
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
    <div class="span12">
        <div class="widget-body">
            <table class="table table-bordered table-vertical-center table-pricing table-app">

                <!-- Table heading -->
                <thead>
                <tr>
                    <th class="center">Tiết</th>
                    <th class="center">Thứ 2</th>
                    <th class="center">Thứ 3</th>
                    <th class="center">Thứ 4</th>
                    <th class="center">Thứ 5</th>
                    <th class="center">Thứ 6</th>
                    <th class="center">Thứ 7</th>
                    <th class="center">Chủ nhật</th>
                </tr>
                </thead>
                <!-- // Table heading END -->

                <!-- Table body -->
                <tbody>

                <!-- Table pricing row -->
                <tr class="pricing">
                    <td class="center">
                        <span>1</span>
                    </td>
                    <td class="center">
                        <span>Toán</span>
                    </td>
                    <td class="center">
                        <span>Lý</span>
                    </td>
                    <td class="center">
                        <span>Hóa</span>
                    </td>
                    <td class="center">
                        <span>Sinh</span>
                    </td>
                    <td class="center">
                        <span>Văn</span>
                    </td>
                    <td class="center">
                        <span>Tiếng Anh</span>
                    </td>
                    <td class="center">
                        <span>CD</span>
                    </td>
                </tr>
                <!-- // Table pricing row END -->

                <!-- Table row -->
                <tr>
                    <td class="center">
                        <span>1</span>
                    </td>
                    <td class="center">
                        <span>Toán</span>
                    </td>
                    <td class="center">
                        <span>Lý</span>
                    </td>
                    <td class="center">
                        <span>Hóa</span>
                    </td>
                    <td class="center">
                        <span>Sinh</span>
                    </td>
                    <td class="center">
                        <span>Văn</span>
                    </td>
                    <td class="center">
                        <span>Tiếng Anh</span>
                    </td>
                    <td class="center">
                        <span>CD</span>
                    </td>

                </tr>
                <tr class="pricing">
                    <td class="center">
                        <span>1</span>
                    </td>
                    <td class="center">
                        <span>Toán</span>
                    </td>
                    <td class="center">
                        <span>Lý</span>
                    </td>
                    <td class="center">
                        <span>Hóa</span>
                    </td>
                    <td class="center">
                        <span>Sinh</span>
                    </td>
                    <td class="center">
                        <span>Văn</span>
                    </td>
                    <td class="center">
                        <span>Tiếng Anh</span>
                    </td>
                    <td class="center">
                        <span>CD</span>
                    </td>
                </tr>
                <tr>
                    <td class="center">
                        <span>1</span>
                    </td>
                    <td class="center">
                        <span>Toán</span>
                    </td>
                    <td class="center">
                        <span>Lý</span>
                    </td>
                    <td class="center">
                        <span>Hóa</span>
                    </td>
                    <td class="center">
                        <span>Sinh</span>
                    </td>
                    <td class="center">
                        <span>Văn</span>
                    </td>
                    <td class="center">
                        <span>Tiếng Anh</span>
                    </td>
                    <td class="center">
                        <span>CD</span>
                    </td>

                </tr>
                <tr class="pricing">
                    <td class="center">
                        <span>1</span>
                    </td>
                    <td class="center">
                        <span>Toán</span>
                    </td>
                    <td class="center">
                        <span>Lý</span>
                    </td>
                    <td class="center">
                        <span>Hóa</span>
                    </td>
                    <td class="center">
                        <span>Sinh</span>
                    </td>
                    <td class="center">
                        <span>Văn</span>
                    </td>
                    <td class="center">
                        <span>Tiếng Anh</span>
                    </td>
                    <td class="center">
                        <span>CD</span>
                    </td>
                </tr>
                <!-- // Table row END -->

                </tbody>
                <!-- // Table body END -->

            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- // Content END -->

<div id="footer" class="hidden-print">

    <div class="container-960 innerTB">
        <div class="row-fluid">
            <div class="span2">
                <h4>Liên kết</h4>
                <ul>
                    <li><a href="http://diemthi.xiao.vn">Trang chủ</a></li>
                    <li><a href="#" >Thông tin</a></li>
                    <li><a href="#">Tài khoản</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="span4">
                <h4>Về chúng tôi</h4>
                <div class="box-generic">
                    Xiao Media Inc. được thành lập với sứ mệnh mang đến sự khác biệt trong Giáo dục và Đào tạo bằng những công nghệ hiện đại và khoa học. Chúng tôi sẵn sàng đem đến cho những chủ nhân tương lai của đất nước những điều kiện tốt nhất để sẵn sàng cho mọi thử thách...
                </div>
            </div>
            <div class="span3">
                <h4>Bài viết mới</h4>
                <ul>
                    <li><a target = "_blank" href="http://vurl.us/tracuudiem">Tra cứu điểm thi ĐH CĐ 2013</a></li>
                    <li><a target = "_blank" href="http://nguyentrai.edu.vn/diendan/thread-1229-tra-cuu-diem-thi-dai-hoc-cao-dang-2013/1">Hướng dẫn tra cứu điểm</a></li>
                    <li><a href="#">Tra cứu tin nhắn SMS</a></li>
                    <li><a href="#">Thủ khoa đại học ...</a></li>
                    <li><a target = "_blank" href="http://nguyentrai.edu.vn/diendan/thread-34-huong-dan-cap-nhat-thong-tin-nguoi-dung/1">Hướng dẫn cập nhật thông ...</a></li>
                </ul>
            </div>
            <div class="span3">
                <h4>Liên hệ</h4>
                <ul class="icons">
                    <li class="glyphicons phone"><i></i>+84.935.765.797</li>
                    <li class="glyphicons envelope"><i></i>support@xiao.vn</li>
                </ul>

                <h4>Social</h4>
                <a target = "_blank" href="https://www.facebook.com/xemapp" class="glyphicons standard primary facebook"><i></i></a>
                <a target = "_blank" href="https://twitter.com/xiaoinc" class="glyphicons standard twitter"><i></i></a>
                <a target = "_blank" href="https://linkedin.com/in/xiaoinc" class="glyphicons standard linked_in"><i></i></a>
                <a target = "_blank" href="https://plus.google.com/u/0/b/111408113961172902178/111408113961172902178" class="glyphicons standard google_plus"><i></i></a>
                <a target = "_blank" href="http://www.youtube.com/user/xiaoinc" class="glyphicons standard vimeo"><i></i></a>
            </div>
        </div>

        <!--  Copyright Line -->
        <div class="copy">
            &copy; 2013 - <a href="http://xiao.vn">Xiao Media Inc.</a>
            <span class="appbrand">Xiao Education Management</span>
        </div>
        <!--  End Copyright Line -->

    </div>

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
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Themer END -->

<!-- JQuery -->
<script src="<?php echo $template_path;?>js/jquery-1.10.1.min.js"></script>
<script src="<?php echo $template_path;?>js/jquery-migrate-1.2.1.min.js"></script>

<!-- Code Beautify -->
<script src="<?php echo $template_path;?>js/beautify.js"></script>
<script src="<?php echo $template_path;?>js/beautify-html.js" ></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '/';
</script>

<!-- JQueryUI -->
<script src="<?php echo $template_path;?>js/jquery-ui-1.9.2.custom.min.js" ></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="<?php echo $template_path;?>js/jquery.ui.touch-punch.min.js" ></script>


<!-- Modernizr -->
<script src="<?php echo $template_path;?>js/modernizr.js" ></script>

<!-- Bootstrap -->
<script src="<?php echo $template_path;?>js/bootstrap.min.js" ></script>

<!-- SlimScroll Plugin -->
<script src="<?php echo $template_path;?>js/jquery.slimscroll.min.js" ></script>

<!-- Common Demo Script -->
<script src="<?php echo $template_path;?>js/common.js-1373689264.js" ></script>

<!-- Holder Plugin -->
<script src="<?php echo $template_path;?>js/holder.js" ></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="<?php echo $template_path;?>js/jquery.uniform.min.js"></script>

<!-- Bootstrap Extended -->
<script src="<?php echo $template_path;?>js/bootstrap-select.js" ></script>
<script src="<?php echo $template_path;?>js/bootbox.js" ></script>

<!-- Google Code Prettify -->
<script src="<?php echo $template_path;?>js/prettify.js"></script>

<!-- MiniColors Plugin -->
<script src="<?php echo $template_path;?>js/jquery.miniColors.js"></script>

<!-- Cookie Plugin -->
<script src="<?php echo $template_path;?>js/jquery.cookie.js" ></script>

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
<script src="<?php echo $template_path;?>js/themer.js"></script>


<!-- Gridalicious -->
<script src="<?php echo $template_path;?>js/jquery.gridalicious.min.js"  type="text/javascript"></script>

</body>
</html>