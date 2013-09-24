<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/9/13
 * Time: 2:21 PM
 * To change this template use File | Settings | File Templates.
 ***/
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

            <h3 class="glyphicons notes"><i></i><?php echo"Trường  " .$truong->tentruong;?></h3>
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
                                    <span class="glyphicons single regular user"><i></i> Ảnh nhà trường<a href=""> Hình ảnh</a></span>
                                    <span class="glyphicons single regular calendar"><i></i><?php echo date("Y-m-d");?></span>
                                    <span class="glyphicons single regular comments"><i></i> 5 bình luận</span>
                                    <div class="separator bottom"></div>

                                    </p>
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
                                    <span class="glyphicons single regular user"><i></i> Trường <a href=""> <?php echo $truong->tentruong;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Năm thành lập <a href=""> <?php echo $truong->namtl;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Website: <a href=""> <?php echo $truong->website;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Số điện thoại <a href=""> <?php echo $truong->sdienthoai;?></a></span>
                                    <span class="glyphicons single regular user"><i></i> Fax <a href=""> <?php echo $truong->fax;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Số điểm trường <a href=""> <?php echo $truong->sdiem;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Loại hình trường <a href=""> <?php echo $truong->loaihinh;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Chuẩn quốc gia <a href=""> <?php echo $truong->chuanqg;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Hạng trường <a href=""> <?php echo school::getInstance()->hang($truong->hang);?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Cấp trường <a href=""> <?php echo school::getInstance()->cap($truong->cap);?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Đặt thù <a href=""> <?php echo $truong->datthu;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Chất lượng <a href=""> <?php echo $truong->schatluong;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Thành tích <a href=""> <?php echo $truong->sthanhtich;?></a></span> </br>
                                    <span class="glyphicons single regular user"><i></i> Địa chỉ <a href=""> <?php echo member::getInstance()->xa($truong->xa). " - " .member::getInstance()->huyen($truong->huyen). " - " .member::getInstance()->tinh($truong->tinh);?></a></span> </br>
                                    <div class="separator bottom"></div>
                                    <p>This is demo comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="glyphicons chat"><i></i>GỬI THÔNG TIN PHẢN HỒI</h3>
                    <div class="separator bottom"></div>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <form name="commentfrm" action="" method="POST">
                                        <span class="glyphicons single regular user"><i></i> Gửi với tài khoản: <a href="">Admin</a></span>
                                        <div class="separator bottom"></div>
                                        <p><textarea cols="200" rows="7" class="span12"></textarea> </p>
                                        <p><input type="submit" name="submit" value="Gửi phản hồi"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="span3">
                    <!-- Widget -->
                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons chat strong"><i></i>Thông tin hoạt động</h4></div>
                        <div class="widget-body list">

                            <!-- List -->
                            <ul>
                                <li>
                                    <a href="">Công tác giảng dạy</a>
                                    <span class="badge">2</span>
                                </li>
                            </ul>
                            <!-- // List END -->

                        </div>
                    </div>
                    <!-- // Widget END -->
                    <!-- Widget -->
                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons chat strong"><i></i>Thông tin hoạt động</h4></div>
                        <div class="widget-body list">

                            <!-- List -->
                            <ul>
                                <li>
                                    <a href="">Hoạt động nhà trường</a>
                                    <span class="badge">2</span>
                                </li>
                                <li>
                                    <a href="">Công tác giảng dạy</a>
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
                        <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Thủ trưởng đơn vị</h4></div>
                        <div class="row-fluid">
                            <div class="span2 center">
                                <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                            </div>
                            <div class="span10">
                                <span class="glyphicons single regular user"><i></i> Chức vụ <a href=""> <?php echo $truong->hieutruong;?></a></span>
                                <span class="glyphicons single regular user"><i></i> Họ và tên <a href=""> <?php echo member::getInstance()->info($truong->hieutruong,'firstname'). " " .member::getInstance()->info($truong->hieutruong,'name');?></a></span>
                                <span class="glyphicons single regular user"><i></i> Giới tính <a href=""> <?php echo member::getInstance()->sex(member::getInstance()->get_member_info($truong->hieutruong,"sex"));?></a></span>
                                <span class="glyphicons single regular user"><i></i> Ngày sinh <a href=""> <?php echo member::getInstance()->info($truong->hieutruong,'birthday');?></a></span>
                                <?php $madatocs = member::getInstance()->get_member_info($truong->hieutruong,'dantoc')?>
                                <span class="glyphicons single regular user"><i></i> Dân tộc <a href=""> <?php echo member::getInstance()->dantoc($madatocs);?></a></span>
                                <span class="glyphicons single regular user"><i></i> Số điện thoại <a href=""> <?php echo member::getInstance()->info($truong->hieutruong,'didong');?></a></span>
                                <span class="glyphicons single regular user"><i></i> Skype <a href=""> <?php echo member::getInstance()->info($truong->hieutruong,'skype');?></a></span>
                                <span class="glyphicons single regular calendar"><i></i> <?php echo date("Y-m-d");?></span>
                                <div class="separator bottom"></div>
                                <p></p>
                            </div>
                        </div>
                        <!-- Thumbnail -->
                        <div class="thumbnail widget-thumbnail">
                            <img src="<?php echo $template_path;?>images/avatar-large.jpg"  alt="100%x200 Image Holder" />

                        </div>
                        <!-- // Thumbnail END -->
                        <div class="widget-body"><p class="margin-none"><?php echo member::getInstance()->info($truong->hieutruong,'slogan'); ?></p></div>
                    </div>

                    <div class="widget widget-heading-simple widget-body-gray">
                        <div class="widget-head"><h4 class="heading glyphicons tags strong"><i></i>Tags</h4></div>
                        <div class="widget-body center">
                            <span class="label">nha truong</span>
                            <span class="label">giao vien</span>
                            <span class="label">hoc sinh</span>
                            <span class="label">ngoai khoa</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php"?>