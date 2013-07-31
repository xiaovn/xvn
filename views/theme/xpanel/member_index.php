<?php
/**
 * Project: xvn.
 * File: member_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:40 PM - 7/30/13
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css-1373689254.css" rel="stylesheet" />
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
<!-- Top navbar END --><div class="container-960 innerT">

<h3 class="glyphicons circle_info margin-none"><i></i>Nguyễn Học <span>Thông tin cá nhân.</span></h3>
<div class="separator bottom"></div>

<div class="widget widget-heading-simple widget-body-gray">
    <div class="widget-body"><p class="lead center margin-none">Thành công là một hành trình chứ không phải một điểm đến.</p></div>
</div>

<!-- Row -->
<div class="row-fluid">

    <!-- Thumbnails -->
    <ul class="thumbnails">

        <!-- Column -->
        <li class="span4">

            <!-- Thumbnail -->
            <div class="thumbnail widget-thumbnail">
                <img src="<?php echo $template_path;?>images/avatar-large.jpg"  alt="100%x200 Image Holder" />
                <div class="caption">
                    <h4><?php echo $_SESSION['xUser']?></h4>
                    <p>Nhẹ nhàng, trầm lặng, thích khám phá và không ngại thử thách.</p>

                    <!-- Social Icons -->
                    <a href="" class="glyphicons standard primary facebook"><i></i></a>
                    <a href="" class="glyphicons standard twitter"><i></i></a>
                    <a href="" class="glyphicons standard linked_in"><i></i></a>
                    <div class="clearfix"></div>
                    <!-- // Social Icons END -->
                </div>
            </div>
            <!-- // Thumbnail END -->

        </li>
        <!-- // Column END -->
        <li class="span8">
            <div class="span12" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                <a class="thumb" href="<?php echo $template_path;?>images/cv.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/cv.png" alt="photo"></a>
                <div class="separator bottom"></div>
            </div>
            <div class="span12">

                <div class="widget widget-heading-simple widget-body-white">
                    <div class="widget-body">
                        <div class="innerL">
                            <div class="separator bottom"></div>
                            <div class="glyphicons glyphicon-large group">
                                <i></i>
                                <h4>Trường THPT Nguyễn Trãi</h4>
                                <p>Lớp 12A1 - Năm học 2008 - 2009<br> <a href="">Chi tiết</a></p>
                            </div>
                            <div class="separator bottom"></div>
                            <div class="glyphicons glyphicon-large group">
                                <i></i>
                                <h4>Thông tin cá nhân</h4>
                                <p>
                                <ul>
                                    <li>Ngày sinh: 10 - 01 - 1991</li>
                                    <li>Giới tính: Nam</li>
                                    <li>Tình trạng hôn nhân: Độc thân</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel -->

                <!-- // Carousel END -->

            </div>
        </li>

    </ul>
    <!-- // Thumbnails END -->

</div>
<!-- // Row END -->

<div class="row-fluid">
    <div class="span6">

        <div class="widget widget-heading-simple widget-body-white">
            <div class="widget-body">
                <div class="innerL">
                    <div class="separator bottom"></div>
                    <div class="glyphicons glyphicon-large shield">
                        <i></i>
                        <h4>Thông tin liên hệ</h4>
                        <p>
                        <ul>
                            <li>Di động: 0938-600-656</li>
                            <li>Email: nguyenhoc@xiao.vn</li>
                            <li>Yahoo: hsnoval</li>
                        </ul>
                        </p>
                    </div>
                    <div class="separator bottom"></div>
                    <div class="glyphicons glyphicon-large group">
                        <i></i>
                        <h4>Bạn bè</h4>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                        </div>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="<?php echo $template_path;?>images/avatar-large.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large.jpg" alt="photo"></a>
                        </div>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                        </div>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="<?php echo $template_path;?>images/avatar-large.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large.jpg" alt="photo"></a>
                        </div>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div class="widget widget-heading-simple widget-body-simple">
            <div class="widget-body">
                <div class="carousel carousel-1 slide" id="myCarousel2">
                    <div class="carousel-inner">
                        <!-- Item -->
                        <div class="item active">
                            <div class="row-fluid">
                                <div class="span5 relativeWrap">
                                    <div class="carousel-caption">
                                        <h4>Bài viết 1!</h4>
                                        <p>gày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2...<br/> <a href="" target="_blank">Xem chi tiết...</a></p>
                                    </div>
                                </div>
                                <div class="span7">
                                    <img src="<?php echo $template_path;?>images/8-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- // Item END -->
                        <!-- Item -->
                        <div class="item">
                            <div class="row-fluid">
                                <div class="span5 relativeWrap">
                                    <div class="carousel-caption">
                                        <h4>Bài viết 2</h4>
                                        <p>gày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2...<br/> <a href="" target="_blank">Xem chi tiết...</a></p>
                                    </div>
                                </div>
                                <div class="span7">
                                    <img src="<?php echo $template_path;?>images/9-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- // Item END -->
                        <!-- Item -->
                        <div class="item">
                            <div class="row-fluid">
                                <div class="span5 relativeWrap">
                                    <div class="carousel-caption">
                                        <h4>Bài viết 3</h4>
                                        <p>gày mai (8.7), thí sinh cả nước sẽ đến các hội đồng thi làm thủ tục dự thi ĐH đợt 2 (ngày 9-10.7) với các khối thi: B, C, D và các khối năng khiếu. Theo thống kê của Bộ GD-ĐT, đợt 2...<br/> <a href="" target="_blank">Xem chi tiết...</a></p>
                                    </div>
                                </div>
                                <div class="span7">
                                    <img src="<?php echo $template_path;?>images/10-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- // Item END -->
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- // Carousel END -->

    </div>
    <div class="span6">

        <div class="widget widget-heading-simple widget-body-white">
            <div class="widget-body">

                <div class="separator bottom"></div>
                <div class="glyphicons glyphicon-large iphone">
                    <i></i>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="photo"></a>
                    </div>
                </div>

                <div class="separator bottom"></div>
                <div class="glyphicons glyphicon-large magic group-column">
                    <i></i>
                    <h4>Thành tích mới nhất</h4>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/medal/1.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/medal/1.png" alt="photo"></a>
                    </div>
                    <p style="padding-left: 70px"> <b>Cao thủ văn chương</b>
                        <br>
                        Huy chương dành cho các thành viên có lượng bài viết được yêu thích nhiều nhất trong tháng.
                    </p>
                </div>

            </div>
        </div>

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body">
                <h5>Hoạt động mới nhất</h5>
                <div class="glyphicons circle_info">
                    <i></i>
                    <p>Kết bạn với.... Ken Zaki</p>
                </div>
            </div>
        </div>

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget Heading -->
            <div class="widget-head">
                <h4 class="heading glyphicons twitter"><i></i>Cảm xúc mới nhất</h4>
            </div>
            <!-- // Widget Heading END -->

            <div class="widget-body">
                <section class="twitter-feed">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="tweet">Không nghĩ gì lúc này. <span class="label label-inverse">10/07/2013</span></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
</div>

</div>
</div>
<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>
<!-- // Content END -->
<?php
require_once "footer.php";
?>