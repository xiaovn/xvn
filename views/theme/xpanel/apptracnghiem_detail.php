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
//$listtests = application::getInstance()->get_tests();
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

<h3 class="glyphicons shopping_cart"><i></i>Thi Trắc Nghiệm Trực Tuyến</h3>
<div class="separator bottom"></div>


<div class="row-fluid">

    <div class="span12">
        <div class="innerAll shop-client-products cart invoice">

            <h3 class="separator bottom">Chi tiết bài thi</h3>
            <table class="table table-invoice">
                <tbody>
                <tr>
                    <td style="width: 58%;">
                        <div class="media">
                            <img class="media-object pull-left thumb" src="tf-avatar.jpg" tppabs="http://1.s3.envato.com/files/50438174/tf-avatar.jpg" alt="Logo" />
                            <div class="media-body hidden-print">
                                <div class="alert alert-primary">
                                    Tên bài thi:  <strong>Vật lý 10 - Chương I</strong><br/>
                                    Tổng hợp kiến thức ôn tập vật lý 10 chương I
                                </div>
                                <div class="separator bottom"></div>
                            </div>
                        </div>
                    </td>
                    <td class="right">
                        <div class="innerL">
                            <h4 class="separator bottom">#2231232 / 13 tháng 02 năm 2014</h4>
                            <button type="button" data-toggle="print" class="btn btn-default btn-icon glyphicons print hidden-print"><i></i> In bài thi</button>
                            <button type="button" data-toggle="button-loading pdf" data-target="#pdfTarget" class="btn btn-primary btn-icon glyphicons download_alt hidden-print"><i></i> Lưu PDF</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="separator bottom hidden-print"></div>

            <div class="well">
                <table class="table table-invoice">
                    <tbody>
                    <tr>
                        <td style="width: 50%;">
                            <p class="lead">Tổng hợp nội dung</p>
                            <h2>Môn: Vật lý</h2>
                            <address class="margin-none">
                                <strong>Chương I. Vật lý chất rắn</strong><br/>
                                Số câu hỏi: <strong>20</strong><br/>
                                Thời gian làm bài: <strong>20 phút</strong><br/>
                                Tổng điểm: <strong>10</strong><br/>
                                Số lượt thi: <strong>100</strong><br/>
                                Điểm cao nhất: <strong>10</strong><br/>

                            </address>
                        </td>
                        <td class="right">
                            <p class="lead">Giáo viên ra đề</p>
                            <h2>Nguyễn Ngọc Long</h2>
                            <address class="margin-none">
                                <strong>Giáo viên</strong> tại
                                <strong><a href="#">Trường THPT Nguyễn Trãi</a></strong><br>
                                <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">nguyenngoclong@nguyentrai.edu.vn</a><br />
                                Số đề thi: <strong>12</strong><br/>
                                <div class="separator line"></div>
                                <p class="margin-none"><strong>Nội dung thi:</strong><br/>Nội dung thi của đề thi.</p>
                            </address>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <table class="table table-bordered table-primary table-striped table-vertical-center">
                <thead>
                <tr>
                    <th style="width: 10%;" class="center">Thứ hạng</th>
                    <th class="center">Tài khoản</th>
                    <th style="width: 50px;">Điểm</th>
                    <th style="width: 80px;">Thời gian</th>
                    <th style="width: 80px;">Tổng điểm</th>
                    <th style="width: 120px;">Thứ hạng chung</th>
                </tr>
                </thead>
                <tbody>

                <!-- item -->
                <tr>
                    <td class="center">1</td>
                    <td>
                        <h5>Thái Đình Sang</h5>
                        Lớp: <span class="label">10A1</span>
                        Trường: <span class="label">THPT Nguyễn Trãi</span>
                    </td>
                    <td class="center">10</td>
                    <td class="center">12 phút</td>
                    <td class="center">120 điểm</td>
                    <td class="center">7</td>
                </tr>
                <!-- // item END -->


                </tbody>
            </table>
            <div class="separator bottom hidden-print"></div>

            <!-- Row -->
            <div class="row-fluid">

                <!-- Column -->
                <div class="span5 hidden-print">
                    <div class="box-generic">
                        <p class="margin-none"><strong>Gợi ý bài thi:</strong><br/>Nội dung gợi ý bài thi.</p>
                    </div>
                </div>
                <!-- Column END -->

                <!-- Column -->
                <div class="span4 offset3">
                    <table class="table table-borderless table-condensed cart_total">
                        <tbody>

                        <tr class="hidden-print">
                            <td colspan="2"><button type="submit" class="btn btn-block btn-primary btn-icon glyphicons right_arrow"><i></i>Bắt đầu làm bài</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- // Column END -->

            </div>
            <!-- // Row END -->

        </div>

    </div>

    </div>
</div>
</div>
</div>
<!-- // Content END -->
<?php require_once "footer.php"?>