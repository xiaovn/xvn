<?php
/**
 * Project: xvn.
 * File: blog_timeline.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:28 AM - 8/3/13
 * Website: www.xiao.vn
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

        <h3 class="glyphicons notes"><i></i>Blog Timeline</h3>
        <div class="separator bottom"></div>

        <div class="row-fluid row-merge border-bottom border-top layout-timeline">
            <div class="span4">

                <div class="row-fluid">
                    <div class="span10">
                        <div class="innerT innerR">

                            <!-- Widget -->
                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-body list">

                                    <!-- List -->
                                    <ul>
                                        <li>
                                            <a href="">Danh mục 1</a>
                                            <span class="badge">35</span>
                                        </li>
                                        <li>
                                            <a href="">Danh mục 2</a>
                                            <span class="badge">30</span>
                                        </li>
                                        <li>
                                            <a href="">Danh mục 3</a>
                                            <span class="badge">19</span>
                                        </li>
                                        <li>
                                            <a href="">Danh mục 4</a>
                                            <span class="badge">33</span>
                                        </li>
                                        <li>
                                            <a href="">Danh mục 5</a>
                                            <span class="badge">17</span>
                                        </li>
                                    </ul>
                                    <!-- // List END -->

                                </div>
                            </div>
                            <!-- // Widget END -->

                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Cảm xúc mới</h4></div>
                                <div class="widget-body"><p class="margin-none">Example status.</p></div>
                            </div>

                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-head"><h4 class="heading glyphicons tags strong"><i></i>Tags</h4></div>
                                <div class="widget-body center"><span class="label">tag 1</span> <span class="label">tag 2</span> <span class="label">tag 3</span> <span class="label">tag 3</span> <span class="label">tag 4</span> <span class="label">tag 5</span></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="span8">
                <div class="innerTB innerL">

                    <ul class="timeline">
                        <li class="active">
                            <div class="separator bottom">
                                <span class="date box-generic">Hiện tại</span>
                                <span class="type glyphicons clock">&nbsp;<i></i><span class="time">08:00</span></span>
                            </div>
                            <div class="widget widget-heading-simple widget-body-white margin-none">
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span4 center">
                                            <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                        </div>
                                        <div class="span8">
                                            <h5 class="strong text-uppercase">Thông tin tuyển sinh 2013</h5>
                                            <span class="glyphicons single regular user"><i></i> bởi <a href="">nguyenhoc</a></span>
                                            <span class="glyphicons single regular calendar"><i></i> 30 tháng 7 năm 2013</span>
                                            <span class="glyphicons single regular comments"><i></i> 15 bình luận</span>
                                            <div class="separator bottom"></div>
                                            <p>Ngày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2....</p>
                                            <p class="margin-none strong"><a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <span class="type glyphicons clock">&nbsp;<i></i><span class="time">09:00</span></span>
                            <div class="widget widget-heading-simple widget-body-gray margin-none">
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <h5 class="strong text-uppercase">Thông tin tuyển sinh 2013</h5>
                                            <span class="glyphicons single regular user"><i></i> bởi <a href="">nguyenhoc</a></span>
                                            <span class="glyphicons single regular calendar"><i></i> 30 tháng 7 năm 2013</span>
                                            <div class="separator bottom"></div>
                                            <p>Ngày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2....</p>
                                            <p class="margin-none strong">
                                                <a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a>
                                                <span class="glyphicons single regular comments"><i></i> 15 bình luận</span>
                                            </p>
                                        </div>
                                        <div class="span6 center">
                                            <a href="" class="thumb"><img src="<?php echo $template_path;?>images/4-1.jpg" alt="Image" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <span class="type glyphicons clock">&nbsp;<i></i><span class="time">11:00</span></span>
                            <div class="widget widget-heading-simple widget-body-white margin-none">
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span6 center">
                                            <a href="" class="thumb"><img src="<?php echo $template_path;?>images/7-2.jpg" alt="Image" /></a>
                                        </div>
                                        <div class="span6">
                                            <h5 class="strong text-uppercase">Thông tin tuyển sinh 2013</h5>
                                            <span class="glyphicons single regular user"><i></i> bởi <a href="">nguyenhoc</a></span>
                                            <span class="glyphicons single regular calendar"><i></i> 30 tháng 7 năm 2013</span>
                                            <div class="separator bottom"></div>
                                            <p>Ngày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2....</p>
                                            <p class="margin-none strong">
                                                <a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a>
                                                <span class="glyphicons single regular comments"><i></i> 15 bình luận</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="separator">
                                <span class="date box-generic"><strong>20</strong>T7</span>
                                <span class="type glyphicons clock">&nbsp;<i></i><span class="time">08:00</span></span>
                            </div>
                            <div class="widget widget-heading-simple widget-body-gray margin-none">
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <h5 class="strong text-uppercase">Thông tin tuyển sinh 2013</h5>
                                            <span class="glyphicons single regular user"><i></i> bởi <a href="">nguyenhoc</a></span>
                                            <span class="glyphicons single regular calendar"><i></i> 30 tháng 7 năm 2013</span>
                                            <span class="glyphicons single regular comments"><i></i> 15 bình luận</span>
                                            <div class="separator bottom"></div>
                                            <p>Ngày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2....</p>
                                            <p class="margin-none strong"><a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a></p>
                                        </div>
                                        <div class="span4 center">
                                            <a href="" class="thumb"><img src="<?php echo $template_path;?>images/8-1.jpg" alt="Image" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="center innerTB">
            <button type="button" class="btn btn-primary btn-large">Xem thêm...</button>
        </div>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php"?>