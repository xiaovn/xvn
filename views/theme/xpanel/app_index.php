<?php
/**
 * Project: xvn.
 * File: app_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:53 AM - 7/31/13
 * Website: www.xiao.vn
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
    <div class="span3">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body list">

                <!-- List -->
                <ul>
                    <li>
                        <a href="">Học sinh</a>
                        <span class="badge">35</span>
                    </li>
                    <li>
                        <a href="">Giáo viên</a>
                        <span class="badge">30</span>
                    </li>
                    <li>
                        <a href="">Giải trí</a>
                        <span class="badge">19</span>
                    </li>
                    <li>
                        <a href="">Luyện thi</a>
                        <span class="badge">33</span>
                    </li>
                    <li>
                        <a href="">Khác</a>
                        <span class="badge">17</span>
                    </li>
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
            <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                <div class="widget-body padding-none">
                    <a href="shop_product.html-lang=en.htm" class="thumb"><img src="<?php echo $template_path;?>images/8-1.jpg" alt="photo" /></a>
                    <div class="description">
                        <h5 class="text-uppercase strong">Application title</h5>
                        <p>Some text about description of Application.</p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-inverse" data-toggle="tooltip" data-title="Thích"><i class="icon-heart"></i></button>
                                    <a href="shop_cart.html-lang=en.htm" class="btn btn-success"><i class="icon-shopping-cart icon-fixed-width"></i> Đăng ký</a>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="text-right">
                                    <a href="shop_product.html-lang=en.htm" class="btn btn-default" data-toggle="tooltip" data-title="Xem"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ribbon-wrapper"><div class="ribbon success">&dollar;12</div></div>
            </div>
            <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                <div class="widget-body padding-none">
                    <a href="shop_product.html-lang=en.htm" class="thumb"><img src="<?php echo $template_path;?>images/8-1.jpg" alt="photo" /></a>
                    <div class="description">
                        <h5 class="text-uppercase strong">Application title</h5>
                        <p>Some text about description of Application.</p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-inverse" data-toggle="tooltip" data-title="Thích"><i class="icon-heart"></i></button>
                                    <a href="shop_cart.html-lang=en.htm" class="btn btn-success"><i class="icon-shopping-cart icon-fixed-width"></i> Đăng ký</a>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="text-right">
                                    <a href="shop_product.html-lang=en.htm" class="btn btn-default" data-toggle="tooltip" data-title="Xem"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ribbon-wrapper"><div class="ribbon success">&dollar;12</div></div>
            </div>
            <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                <div class="widget-body padding-none">
                    <a href="shop_product.html-lang=en.htm" class="thumb"><img src="<?php echo $template_path;?>images/8-1.jpg" alt="photo" /></a>
                    <div class="description">
                        <h5 class="text-uppercase strong">Application title</h5>
                        <p>Some text about description of Application.</p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-inverse" data-toggle="tooltip" data-title="Thích"><i class="icon-heart"></i></button>
                                    <a href="shop_cart.html-lang=en.htm" class="btn btn-success"><i class="icon-shopping-cart icon-fixed-width"></i> Đăng ký</a>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="text-right">
                                    <a href="shop_product.html-lang=en.htm" class="btn btn-default" data-toggle="tooltip" data-title="Xem"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ribbon-wrapper"><div class="ribbon success">&dollar;12</div></div>
            </div>
            <div class="widget widget-heading-simple widget-body-white widget-pinterest">
                <div class="widget-body padding-none">
                    <a href="shop_product.html-lang=en.htm" class="thumb"><img src="<?php echo $template_path;?>images/8-1.jpg" alt="photo" /></a>
                    <div class="description">
                        <h5 class="text-uppercase strong">Application title</h5>
                        <p>Some text about description of Application.</p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-inverse" data-toggle="tooltip" data-title="Thích"><i class="icon-heart"></i></button>
                                    <a href="shop_cart.html-lang=en.htm" class="btn btn-success"><i class="icon-shopping-cart icon-fixed-width"></i> Đăng ký</a>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="text-right">
                                    <a href="shop_product.html-lang=en.htm" class="btn btn-default" data-toggle="tooltip" data-title="Xem"><i class="icon-eye-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ribbon-wrapper"><div class="ribbon success">&dollar;12</div></div>
            </div>
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