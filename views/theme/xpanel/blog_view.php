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

            <h3 class="glyphicons notes"><i></i><?php echo $xem->blogtitle;?></h3>
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
                                            <span class="glyphicons single regular user"><i></i> tác giả <a href=""><?php echo member::getInstance()->get_member_info($xem->author,"name");?></a></span>
                                            <span class="glyphicons single regular calendar"><i></i><?php echo $xem->blogdate;?></span>
                                            <span class="glyphicons single regular comments"><i></i><?php echo $xem->commentcount;?> Bình Luận</span>
                                            <div class="separator bottom"></div>
                                            <p class="content">
                                                <?php echo $xem->blogcontent;?>

                                               </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <h3 class="glyphicons chat"><i></i><?php echo  $xem->commentcount;?>  BÌNH LUẬN</h3>
                    <div class="separator bottom"></div>
                    <?php if($xem->commentcount)
                    {
                        ?>
                        <?php foreach($binhluan as $bl) : ?>


                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span2 center">
                                    <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                                </div>
                                <div class="span10">
                                    <span class="glyphicons single regular user"><i></i> Tác giả <a href=""><?php echo member::getInstance()->get_member_info($bl->comment_author,'name')?></php></a></span>
                                    <span class="glyphicons single regular calendar"><i></i><?php echo $bl->comment_date;?></span>
                                    <div class="separator bottom"></div>
                                    <p><?php echo $bl->comment_content;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                        <?php }
                    else
                    {?>
                        Chưa có bình luận nào!
                        <?php
                    }
                        ?>
                    <h3 class="glyphicons chat"><i></i>GỬI BÌNH LUẬN</h3>
                    <div class="separator bottom"></div>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <form name="commentfrm" action="" method="POST">
                                    <span class="glyphicons single regular user"><i></i> Gửi với tài khoản: <a href=""><?php echo member::getInstance()->account($_SESSION['xID'],"username")?></a></span>
                                    <div class="separator bottom"></div>
                                    <p><textarea name="noidung" cols="200" rows="7" class="span12"></textarea> </p>
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