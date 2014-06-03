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
$listtests = application::getInstance()->get_tests();
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

    <div class="span12">

    <div class="heading-buttons">
        <h3>Danh sách bài thi</h3>
        <div class="buttons pull-right">
            <a href="" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add booking</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator bottom"></div>
    <!-- // Heading END -->

    <div class="innerLR">

    <!-- Filters -->

    <!-- // Filters END -->

    <!-- Widget -->
    <div class="widget widget-heading-simple widget-body-white">

        <!-- Widget heading -->
        <div class="widget-head">
            <h4 class="heading glyphicons calendar"><i></i> Kỳ thi số 1 (từ 01/01/2014 đến 01/04/2014)</h4>
        </div>
        <!-- // Widget heading END -->

        <div class="widget-body">

            <!-- Total bookings & sort by options -->
            <div class="separator bottom form-inline small">
                Tổng số bài thi hiện có: 26
				<span class="pull-right">
					<label class="strong">Sắp xếp:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
                        <option>Bài đã thi</option>
                        <option>Độ khó</option>
                        <option>Môn</option>
                    </select>
				</span>
            </div>
            <!-- // Total bookings & sort by options END -->

            <!-- Table -->
            <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs">
                <thead>
                <tr>
                    <th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
                    <th class="center">Mã bài thi</th>
                    <th class="center">Thời gian</th>
                    <th>Mô tả</th>
                    <th class="center">Môn</th>
                    <th class="center">Số câu hỏi</th>
                    <th class="center">Độ khó</th>
                    <th class="center" style="width: 90px;">Thao tác</th>
                </tr>
                </thead>
                <tbody>

                <?php
                    foreach($listtests as $lt)
                    {
                        ?>
                        <!-- Item -->
                        <tr class="selectable">
                            <td class="center uniformjs"><input type="checkbox" /></td>
                            <td class="center"><?php echo $lt->testid;?></td>
                            <td class="center"><?php echo $lt->test_time/60;?> phút</td>
                            <td><strong><?php echo $lt->test_name;?></strong><br/><small><?php echo $lt->test_description;?></small></td>
                            <td class="center"><?php echo application::getInstance()->get_subj_name($lt->subjectid);?></td>
                            <td class="center"><?php echo $lt->test_socauhoi;?></td>
                            <td class="center"><?php echo $lt->test_dokho;?></td>
                            <td class="center">
                                <a href="#" onclick="javascript:void window.open('http://localhost/xvn/ungdung/tntest','1391312068270','width=800,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" class="btn-action glyphicons eye_open btn-default"><i></i></a>
                                <a href="#" class="btn-action glyphicons pencil btn-success"><i></i></a>
                            </td>
                        </tr>
                        <!-- // Item END -->
                        <?php
                    }
                ?>
                </tbody>
            </table>
            <!-- // Table END -->

            <!-- Options -->
            <div class="separator top form-inline small">

                <!-- With selected actions -->
                <div class="pull-left checkboxs_actions hide">
                    <label class="strong">Chọn:</label>
                    <select class="selectpicker" data-style="btn-default btn-small">
                        <option>Thêm vào đề thi</option>
                        <option>Thi sau</option>
                        <option>Thêm vào bộ sưu tập</option>
                    </select>
                </div>
                <!-- // With selected actions END -->

                <!-- Pagination -->
                <div class="pagination pagination-small pull-right" style="margin: 0;">
                    <ul>
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- // Pagination END -->

            </div>
            <!-- // Options END -->

        </div>
    </div>
    <!-- // Widget -->

    <!-- Row -->
    <div class="row-fluid">

        <!-- Column -->
        <div class="span4">

            <!-- Widget -->
            <div class="widget widget-3">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading"><span class="glyphicons coins"><i></i></span>Tổng số lượt thi</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body large">
                    12.277
                </div>

                <!-- Widget footer -->
                <div class="widget-footer align-right">
                    <a href="#" class="glyphicons print"><i></i> In</a>
                    <a href="#" class="glyphicons list"><i></i> Chi tiết</a>
                </div>
                <!-- // Widget footer END -->

            </div>
            <!-- // Widget END -->

        </div>
        <!-- // Column END -->

        <!-- Column -->
        <div class="span4">

            <!-- Widget -->
            <div class="widget widget-3">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading"><span class="glyphicons user_add"><i></i></span>Điểm cao nhất</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body large">
                    212
                </div>

                <!-- Widget footer -->
                <div class="widget-footer align-center">
                    <a href="#" class="glyphicons list"><i></i> Tài khoản: ADMIN</a>
                </div>
                <!-- // Widget footer END -->

            </div>
            <!-- // Widget END -->

        </div>
        <!-- // Column -->

        <!-- Column -->
        <div class="span4">

            <!-- Widget -->
            <div class="widget widget-3">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading"><span class="glyphicons user_remove"><i></i></span>Điểm của bạn</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body large cancellations">
                    4
					<span>
						<span>Vị thứ</span>
						<span>89 điểm</span>
					</span>
                </div>

                <!-- Widget footer -->
                <div class="widget-footer align-center">
                    <a href="#" class="glyphicons print"><i></i> In</a>
                    <a href="#" class="glyphicons list"><i></i> Chi tiết</a>
                </div>
                <!-- // Widget footer END -->

            </div>
            <!-- // Widget END -->

        </div>
        <!-- // Column -->

    </div>
    <!-- // Row END -->

    </div>

    </div>
</div>
</div>
</div>
<!-- // Content END -->
<?php require_once "footer.php"?>