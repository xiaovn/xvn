<?php
/**
 * Project: xvn.
 * File: blog_view.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
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
        <!-- Top navbar END --><div class="container-960 innerT">

            <h3 class="glyphicons notes"><i></i>DEMO BLOG</h3>
            <div class="separator bottom"></div>
            <?php

            ?>
            <div class="row-fluid">
                <div class="span9">
                            <div class="widget widget-heading-simple widget-body-white">
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span12" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                                            <a class="thumb" href="<?php echo $template_path;?>images/cv.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/cv.png" alt="photo"></a>
                                            <div class="separator bottom"></div>
                                        </div>
                                        <div class="span12">
                                            <span class="glyphicons single regular user"><i></i> tác giả <a href="">aaaaaaaaaaa</a></span>
                                            <span class="glyphicons single regular calendar"><i></i>2013-08-03 17:33:58</span>
                                            <span class="glyphicons single regular comments"><i></i> 5 bình luận</span>
                                            <div class="separator bottom"></div>
                                            <p class="content">Ông Nguyễn Long – Tổng thư ký hội Tin học Việt Nam cho biết, sinh viên học CNTT nhất thiết phải giỏi ngoại ngữ
                                                “Sự kết nối giữa cơ sở đào tạo và doanh nghiệp ở Việt Nam gần như chưa có tiền lệ, theo tôi nếu không giải quyết được vấn đề này thì vẫn còn những chê trách từ phía đào tạo và phía tiếp nhận”. - Đó chính là ý kiến của Ông Nguyễn Long- Tổng Thư ký Hội Tin học Việt Nam trong buổi giao lưu trực tuyến “Ngành khát nhân lực và lựa chọn nghề nghiệp” được tổ chức mới đây.

                                                Tại buổi giao lưu, đại diện của Hội tin học Việt Nam, Thạc sĩ Nguyễn Long đã trả lời nhiều thắc mắc liên quan đến xu hướng ngành Công nghệ thông tin cũng như cơ hội phát triển của ngành.

                                                Em xin được hỏi là nhu cầu nhân lực của nước ta hiện nay trong lĩnh vực Công nghệ Thông Tin (CNTT), đặc biệt là trong ngành phát triển phần mềm hiện nay như thế nào?. Em xin cảm ơn.

                                                (Nguyễn Anh Tiến, Tp.HCM)

                                               </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <h3 class="glyphicons chat"><i></i>BÌNH LUẬN</h3>
                    <div class="separator bottom"></div>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span2 center">
                                    <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                </div>
                                <div class="span10">
                                    <span class="glyphicons single regular user"><i></i> Tác giả <a href="">Admin</a></span>
                                    <span class="glyphicons single regular calendar"><i></i> 2013-08-03 17:33:58</span>
                                    <div class="separator bottom"></div>
                                    <p>This is demo comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span2 center">
                                    <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                </div>
                                <div class="span10">
                                    <span class="glyphicons single regular user"><i></i> Tác giả <a href="">Admin</a></span>
                                    <span class="glyphicons single regular calendar"><i></i> 2013-08-03 17:33:58</span>
                                    <div class="separator bottom"></div>
                                    <p>This is demo comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-heading-simple sub-comment widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span2 center">
                                    <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                </div>
                                <div class="span10">
                                    <span class="glyphicons single regular user"><i></i> Tác giả <a href="">Admin</a></span>
                                    <span class="glyphicons single regular calendar"><i></i> 2013-08-03 17:33:58</span>
                                    <div class="separator bottom"></div>
                                    <p>This is demo comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="glyphicons chat"><i></i>GỬI BÌNH LUẬN</h3>
                    <div class="separator bottom"></div>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <form name="commentfrm" action="" method="POST">
                                    <span class="glyphicons single regular user"><i></i> Gửi với tài khoản: <a href="">Admin</a></span>
                                    <div class="separator bottom"></div>
                                    <p><textarea cols="200" rows="7" class="span12"></textarea> </p>
                                    <p><input type="submit" name="submit" value="Gửi bình luận"></p>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span3">

                    <!-- Widget -->
                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons chat strong"><i></i>Bài hot</h4></div>
                        <div class="widget-body list">

                            <!-- List -->
                            <ul>
                                    <li>
                                        <a href="">Học công nghệ thông tin...</a>
                                        <span class="badge">2</span>
                                    </li>
                                    <li>
                                        <a href="">Những trang web giúp học...</a>
                                        <span class="badge">2</span>
                                    </li>
                            </ul>
                            <!-- // List END -->

                        </div>
                    </div>
                    <!-- // Widget END -->
                    <!-- Widget -->
                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons chat strong"><i></i>Bài liên quan</h4></div>
                        <div class="widget-body list">

                            <!-- List -->
                            <ul>
                                <li>
                                    <a href="">Học công nghệ thông tin...</a>
                                    <span class="badge">2</span>
                                </li>
                                <li>
                                    <a href="">Những trang web giúp học...</a>
                                    <span class="badge">2</span>
                                </li>
                            </ul>
                            <!-- // List END -->

                        </div>
                    </div>
                    <!-- // Widget END -->

                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Tác giả</h4></div>
                        <div class="widget-body"><p class="margin-none">Nhẹ nhàng, trầm lặng, thích khám phá và không ngại thử thách.</p></div>
                    </div>

                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons tags strong"><i></i>Tags</h4></div>
                        <div class="widget-body center">
                                <span class="label">tin hoc</span>
                                <span class="label">ngoai ngu</span>
                                <span class="label">pho thong</span>
                                <span class="label">giao duc</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php"?>