<?php
/**
 * Project: xvn.
 * File: view/index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
    require_once "header.php";
    ?>
    <link href="<?php echo $template_path;?>css/style-default.css-1373689170.css" rel="stylesheet" />
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
        <div id="landing_2">
            <div class="container-960">
                <?php
                require_once "slider.php";
                ?>
                <div class="mosaic-line mosaic-line-2">
                    <div class="container-960 center">
                        <h2 class="margin-none"><strong class="text-primary">Thay đổi</strong> để bức phá <span class="hidden-phone">Hành trình thay đổi tương lai</span></h2>
                    </div>
                </div>
                <div class="innerT">
                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-body"><p class="margin-none">Xiao Education là một tổ chức phi lợi nhuận được thành lập từ năm 2013 với mục tiêu xóa bỏ những thách thức hiện có của nền giáo dục Việt Nam bằng công nghệ và viễn thông. Chúng tôi tự hào là một trong những nhà tiên phong trong công cuộc cải cách giáo dục thực sự!</p></div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">
                            <div class="widget widget-heading-simple widget-body-white">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-xlarge glyphicon-top display">
                                        <i></i>
                                        <h4>Nhiều hệ thống</h4>
                                        <p class="margin-none">X.E.M. là một ứng dụng hỗ trợ trên nhiều hệ thống, nền tảng, với các công cụ hỗ trợ cực kỳ hữu ích, bạn có thể theo dõi thông tin học tập của học sinh hoặc chương trình công tác của giáo viên ở bất cứ đâu <br/> <a href="">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget widget-heading-simple widget-body-white">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-xlarge glyphicon-top iphone">
                                        <i></i>
                                        <h4>Ứng dụng di dộng</h4>
                                        <p class="margin-none">Thiết bị di động ngày một phổ biến và vì thế, X.E.M. sẵn sàng hỗ trợ toàn diện trên các thiết bị di động thông minh sử dụng hệ điều hành như Android, iOS, RIM, Windows Phone... <br/> <a href="">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget widget-heading-simple widget-body-primary">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-xlarge glyphicon-top settings">
                                        <i></i>
                                        <h4>Tùy chỉnh cá nhân</h4>
                                        <p class="margin-none">Bạn có bao giờ nghĩ, phần mềm như cuốn sổ tay cá nhân? X.E.M. sẽ giúp bạn thay đổi cách làm việc và học tập bằng chính các tùy chỉnh của bạn về chương trình và nội dung học tập <br/> <a href="">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-xlarge glyphicon-top eyedropper glyphicon-primary">
                                        <i></i>
                                        <h4>Hỗ trợ thực hành ảo</h4>
                                        <p class="margin-none">Bạn sẽ không phải vất vả hoặc tốn tiền để mua các thiết bị thí nghiệm, X.E.M. sẽ giúp bạn mô phỏng các thí nghiệm bằng chính thao tác của các bạn!<br/> <a href="">Chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-body center">
                            <p class="lead">Theo dõi chúng tôi để được cập nhật thông tin mới nhất trên:</p>
                            <div class="social-large social-large-2 center">
                                <a href="" class="active glyphicons facebook"><i></i>facebook</a>
                                <a href="" class="glyphicons google_plus"><i></i>google+</a>
                                <a href="" class="glyphicons twitter"><i></i>twitter</a>
                                <a href="" class="glyphicons forrst"><i></i>zingme</a>
                                <a href="" class="glyphicons skype"><i></i>skype</a>
                            </div>
                        </div>
                    </div>

                    <h3 class="glyphicons chat"><i></i>Ý kiến người dùng</h3>
                    <div class="separator bottom"></div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="widget widget-heading-simple widget-body-white">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-large user">
                                        <i></i>
                                        <p>Tôi đang được sử dụng phiên bản thử nghiệm của X.E.M., tôi thực sự choáng ngợp trước sự đồ sộ và hiệu quả của ứng dụng, tôi chắc chắn sẽ giới thiệu cho con trai tôi sử dụng khi có bản chính thức</p>
                                        <p class="margin-none strong">gửi bởi <a href="">Trần Văn Khiêm</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="widget widget-heading-simple widget-body-white">
                                <div class="widget-body">
                                    <div class="glyphicons glyphicon-large woman">
                                        <i></i>
                                        <p>Thật tuyệt vời, với X.E.M. bạn có thể vừa chơi vừa học, có những lúc thật thú vị khiến cho việc học của bạn không còn nhàm chán. Tôi thực sự thích ứng dụng này!</p>
                                        <p class="margin-none strong">gửi bởi <a href="">Đặng Thị Mỹ Tiên</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span8 center">
                                    <h2 class="margin-none">Thi trắc nghiệm <strong class="text-primary">Tiếng Anh</strong> trực tuyến</h2>
                                    <p class="margin-none">Không giới hạn câu hỏi | 1000+ Chủ đề | Báo cáo kết quả chi tiết | Hướng dẫn sửa lỗi</p>
                                </div>
                                <div class="span4">
                                    <a href="#" class="btn btn-icon-stacked btn-primary btn-block glyphicons usd"><i></i><span>Cài đặt ứng dụng</span><span class="strong">Xiao eLearning</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- // Content END -->
<?php
require_once "footer.php";
?>