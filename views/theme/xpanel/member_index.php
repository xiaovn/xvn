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
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
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

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> <span>Thông tin cá nhân.</span></h3>
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
                    <p><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?></p>

                    <!-- Social Icons -->
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"facebook")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"facebook") != ""){echo "primary";}?> facebook"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"twitter")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"twitter") != ""){echo "primary";}?> twitter"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"yahoo")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"yahoo") != ""){echo "primary";}?> yahoo"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"didong") != ""){echo "primary";}?> iphone"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"skype")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"skype") != ""){echo "primary";}?> skype"><i></i></a>
                    <a href="<?php echo member::getInstance()->account($_SESSION['xID'],"email")?>" class="glyphicons standard <?php if(member::getInstance()->account($_SESSION['xID'],"email") != ""){echo "primary";}?> e-mail"><i></i></a>
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
                                <h4>Lớp <?php echo school::getInstance()->lop($hoctap->class,"tenlop");?> - <?php echo school::getInstance()->truong($hoctap->school,"tentruong");?></h4>
                                <p>Năm: <?php echo $hoctap->year;?><br> <a href="">Chi tiết</a></p>
                            </div>
                            <div class="separator bottom"></div>
                            <div class="glyphicons glyphicon-large group">
                                <i></i>
                                <h4>Thông tin cá nhân</h4>
                                <p>
                                <ul>
                                    <li>Ngày sinh: </li>
                                    <li>Giới tính: Nam</li>
                                    <li>Tình tình trạng hôn nhân: độc thân</li>
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
                        <h4>Thông tin cá nhân</h4>
                        <p>
                        <ul>
                            <li>Họ tên: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?></li>
                            <li>Tên khác: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"othername");?></li>
                            <li>Ngày sinh: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"birthday");?></li>

                            <li>Giới tính: <?php echo member::getInstance()->sex(member::getInstance()->get_member_info($_SESSION['xID'],"sex"));?></li>
                            <li>Tình trạng hôn nhân: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"honnhan");?></li>
                            <li>Chứng minh nhân dân: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"cmnd");?></li>
                            <li>Nơi cấp CMND: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"birthday");?></li>
                            <li>Ngày cấp CMND: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"ngaycapcmnd");?></li>

                            <li>Dân tộc: <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"dantoc");?></li>
                        </ul>
                        </p>
                    </div>
                    <div class="separator bottom"></div>
                    <div class="glyphicons glyphicon-large group">
                        <i></i>
                        <h4>Bạn bè</h4>
                        <?php
                        $dsbb = member::getInstance()->get_banbe($_SESSION['xID']);
                        foreach($dsbb as $bb)
                        {
                        ?>
                            <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                                <a class="thumb" href="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="<?php echo member::getInstance()->info($bb->xid2,"name");?>" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" alt="<?php echo member::getInstance()->account($bb->xid2,"username");?>" title="<?php echo member::getInstance()->account($bb->xid2,"username");?>"></a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div class="widget widget-heading-simple widget-body-simple">
            <div class="widget-body">
                <div class="carousel carousel-1 slide" id="myCarousel2">
                    <div class="carousel-inner">
                        <?php
                        $dsblog = application::getInstance()->get_blog($_SESSION['xID']);
                        $i = 1;
                        $active = "";
                        foreach($dsblog as $blog)
                        {
                            if($i == 1)
                            {
                                $active = "active";
                            }
                            else
                            {
                                $active = "";
                            }
                            ?>
                            <!-- Item -->

                            <div class="item <?php echo $active;?>">
                                <div class="row-fluid">
                                    <div class="span5 relativeWrap">
                                        <div class="carousel-caption">
                                            <h4><?php echo substr($blog->blogtitle,0,43);?>...</h4>
                                            <p><?php echo strip_tags(substr($blog->blogcontent,0,180));?><br/> <a href="<?php echo XC_URL;?>/blog/view?id=<?php echo $blog->id;?>" target="_blank">Xem chi tiết...</a></p>
                                        </div>
                                    </div>
                                    <div class="span7">
                                        <img src="<?php echo $template_path;?>images/8-1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- // Item END -->
                            <?php
                            $i ++;
                        }
                        ?>


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
                    <?php
                        $applogs = member::getInstance()->get_app_log($_SESSION['xID']);
                        foreach($applogs as $ap)
                        {
                            ?>
                            <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                                <a class="thumb" href="<?php XC_URL?>/ungdung/view/?id<?php echo $ap->appid;?>" data-gallery="gallery"><img src="<?php echo $template_path;?>images/avatar-large-girl.jpg" title="<?php echo application::getInstance()->application($ap->appid,"appname");?>" alt="photo"></a>
                            </div>
                            <?php
                        }
                    ?>
                </div>

                <div class="separator bottom"></div>
                <div class="glyphicons glyphicon-large magic group-column">
                    <i></i>
                    <h4>Thành tích m?i nh?t</h4>
                    <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/medal/1.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/medal/1.png" alt="photo"></a>
                    </div>
                    <p style="padding-left: 70px"> <b>Cao th? v?n ch??ng</b>
                        <br>
                        Huy ch??ng dành cho các thành viên có l??ng bài vi?t ???c yêu thích nhi?u nh?t trong tháng.
                    </p>
                </div>

            </div>
        </div>

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body">
                <h5>Hoạt động mới nhất</h5>
                <div class="glyphicons circle_info">
                    <i></i>
                    <?php
                    $acts = member::getInstance()->get_activity($_SESSION['xID']);
                    foreach($acts as $act)
                    {
                    ?>
                        <p>
                            <?php echo application::getInstance()->activity($act->active);?> với <b><?php echo member::getInstance()->account($act->with,"username");?></b>
                        </p>
                        <?php
                    }
                        ?>
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
                            <?php
                            $feeds = application::getInstance()->get_feed($_SESSION['xID']);
                            foreach($feeds as $feed)
                            {
                                ?>
                                <div class="tweet"><?php echo $feed->feedcontent;?>. <span class="label label-inverse"><?php echo date("d-m-Y",strtotime($feed->updatetime));?></span></div>
                            <?php
                            }
                            ?>
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