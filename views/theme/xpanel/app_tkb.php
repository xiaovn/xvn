<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 8/24/13
 * Time: 3:30 PM
 * To change this template use File | Settings | File Templates.
 */
include "header.php";
?>
<link href="<?php echo $template_path;?>css/style-default.css"  rel="stylesheet" />
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

<h3 class="glyphicons shopping_cart"><i></i>Application Store - <?php echo $xgroup;?></h3>
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
<?php
if($xgroup == '2268470')
{
?>
<div class="row-fluid">
<div class="widget widget-tabs widget-tabs-double-2">

    <!-- Tabs Heading -->
    <div class="widget-head">
        <ul>
            <li class="active"><a class="glyphicons list" href="#tabAll" data-toggle="tab"><i></i><span>Tất cả</span></a>
            </li>
            <li class=""><a class="glyphicons user" href="#tabAccount" data-toggle="tab"><i></i><span>TKB Chính</span></a>
            </li>
            <li class=""><a class="glyphicons credit_card" href="#tabPayments" data-toggle="tab"><i></i><span>Thể dục - Quốc phòng</span></a>
            </li>
            <li class=""><a class="glyphicons cogwheel" href="#tabSupport" data-toggle="tab"><i></i><span>TKB Phụ đạo</span></a>
            </li>
            <li class=""><a class="glyphicons snowflake" href="#tabFeatures" data-toggle="tab"><i></i><span>Nghề - Bồi dưỡng</span></a>
            </li>
        </ul>
    </div>
    <!-- // Tabs Heading END -->

    <div class="widget-body">
        <div class="tab-content">

            <!-- Tab content -->
            <div id="tabAll" class="tab-pane widget-body-regular active">
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
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][2][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][3][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][4][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][5][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][6][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][7][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][8][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                </tr>
                                <!-- // Table pricing row END -->

                                <!-- Table row -->
                                <tr>
                                    <td class="center">
                                        <span>2</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][2][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][3][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][4][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][5][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][6][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][7][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][8][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>3</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][2][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][3][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][4][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][5][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][6][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][7][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][8][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <span>4</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][2][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][3][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][4][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][5][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][6][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][7][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][8][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>5</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][2][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][3][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][4][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][5][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][6][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][7][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[1][8][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                </tr>
                                <tr style="background: #D7F8A5;">
                                    <td colspan="8"  class="center">
                                        <span><b>Buổi chiều</b></span>
                                    </td>
                                </tr>
                                <!-- // Table row END -->
                                <tr class="pricing">
                                    <td class="center">
                                        <span>1</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][2][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][2][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][3][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][3][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][4][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][4][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][5][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][5][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][6][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][6][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][7][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][7][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][8][1],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][8][1],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                </tr>
                                <!-- // Table pricing row END -->

                                <!-- Table row -->
                                <tr>
                                    <td class="center">
                                        <span>2</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][2][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][2][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][3][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][3][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][4][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][4][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][5][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][5][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][6][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][6][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][7][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][7][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][8][2],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][8][2],"nhommon"),"viettat");?>)</h6></span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>3</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][2][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][2][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][3][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][3][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][4][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][4][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][5][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][5][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][6][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][6][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][7][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][7][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][8][3],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][8][3],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <span>4</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][2][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][2][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][3][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][3][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][4][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][4][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][5][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][5][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][6][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][6][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][7][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][7][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][8][4],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][8][4],"nhommon"),"viettat");?>)</h6></span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>5</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][2][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][2][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][3][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][3][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][4][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][4][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][5][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][5][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][6][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][6][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][7][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][7][5],"nhommon"),"viettat");?>)</h6></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkb[0][8][5],"tenmon");?></b> <h6> (<?php echo school::getInstance()->nhommon(school::getInstance()->monhoc($tkb[0][8][5],"nhommon"),"viettat");?>)</h6></span>
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
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div id="tabAccount" class="tab-pane widget-body-regular">
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
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][1],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][1],"tenmon");?></b></span>
                                </td>
                            </tr>
                            <!-- // Table pricing row END -->

                            <!-- Table row -->
                            <tr>
                                <td class="center">
                                    <span>2</span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][2],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][2],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][2],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][2],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][2],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][2],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][2],"tenmon");?></b> </span>
                                </td>

                            </tr>
                            <tr class="pricing">
                                <td class="center">
                                    <span>3</span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][3],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][3],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][3],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][3],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][3],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][3],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][3],"tenmon");?></b> </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <span>4</span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][4],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][4],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][4],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][4],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][4],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][4],"tenmon");?></b></span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][4],"tenmon");?></b> </span>
                                </td>

                            </tr>
                            <tr class="pricing">
                                <td class="center">
                                    <span>5</span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][2][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][3][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][4][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][5][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][6][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][7][5],"tenmon");?></b> </span>
                                </td>
                                <td class="center">
                                    <span><b><?php echo school::getInstance()->monhoc($tkb[1][8][5],"tenmon");?></b> </span>
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
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div id="tabPayments" class="tab-pane widget-body-regular">
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
                                <tbody>
                                <!-- Table body -->
                                <!-- Table pricing row -->
                                <tr class="pricing">
                                    <td class="center">
                                        <span>1</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][2][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][3][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][4][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][5][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][6][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][7][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][8][1],"tenmon");?></b></span>
                                    </td>
                                </tr>
                                <!-- // Table pricing row END -->

                                <!-- Table row -->
                                <tr>
                                    <td class="center">
                                        <span>2</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][2][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][3][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][4][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][5][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][6][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][7][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][8][2],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>3</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][2][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][3][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][4][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][5][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][6][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][7][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][8][3],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <span>4</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][2][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][3][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][4][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][5][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][6][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][7][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][8][4],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>5</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][2][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][3][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][4][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][5][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][6][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][7][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbtd[0][8][5],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <!-- // Table row END -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div id="tabSupport" class="tab-pane widget-body-regular">
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
                                <tbody>
                                <!-- Table body -->
                                <!-- Table pricing row -->
                                <tr class="pricing">
                                    <td class="center">
                                        <span>1</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][2][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][3][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][4][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][5][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][6][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][7][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][8][1],"tenmon");?></b></span>
                                    </td>
                                </tr>
                                <!-- // Table pricing row END -->

                                <!-- Table row -->
                                <tr>
                                    <td class="center">
                                        <span>2</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][2][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][3][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][4][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][5][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][6][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][7][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][8][2],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>3</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][2][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][3][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][4][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][5][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][6][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][7][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][8][3],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <span>4</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][2][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][3][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][4][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][5][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][6][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][7][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][8][4],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>5</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][2][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][3][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][4][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][5][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][6][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][7][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbpd[0][8][5],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <!-- // Table row END -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div id="tabFeatures" class="tab-pane widget-body-regular">
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
                                <tbody>
                                <!-- Table body -->
                                <!-- Table pricing row -->
                                <tr class="pricing">
                                    <td class="center">
                                        <span>1</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][2][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][3][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][4][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][5][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][6][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][7][1],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][8][1],"tenmon");?></b></span>
                                    </td>
                                </tr>
                                <!-- // Table pricing row END -->

                                <!-- Table row -->
                                <tr>
                                    <td class="center">
                                        <span>2</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][2][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][3][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][4][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][5][2],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][6][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][7][2],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][8][2],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>3</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][2][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][3][3],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][4][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][5][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][6][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][7][3],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][8][3],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <span>4</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][2][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][3][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][4][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][5][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][6][4],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][7][4],"tenmon");?></b></span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][8][4],"tenmon");?></b> </span>
                                    </td>

                                </tr>
                                <tr class="pricing">
                                    <td class="center">
                                        <span>5</span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][2][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][3][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][4][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][5][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][6][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][7][5],"tenmon");?></b> </span>
                                    </td>
                                    <td class="center">
                                        <span><b><?php echo school::getInstance()->monhoc($tkbnghe[0][8][5],"tenmon");?></b> </span>
                                    </td>
                                </tr>
                                <!-- // Table row END -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Tab content END -->

        </div>
    </div>
    </div>

</div>
    <?php
}
    ?>
</div>
<!-- // Content END -->
<?php include_once "footer.php"?>