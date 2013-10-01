<?php
/**
 * Project: xvn.
 * File: member_view.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:03 PM - 7/30/13
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
<!--    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            alert("The DOM is now loaded and can be manipulated.");-->
<!--        });-->
<!--    </script>-->
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

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($memberid,"firstname");?>&nbsp;<?php echo member::getInstance()->get_member_info($memberid,"name");?> <span>Thông tin cá nhân.</span></h3>
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
                <img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($memberid,"avatar");?>"  alt="100%x200 Image Holder" />
                <div class="caption">
                    <h4><?php echo member::getInstance()->account($memberid,"username");?></h4>
                    <p><?php echo member::getInstance()->get_member_info($memberid,"slogan");?></p>

                    <!-- Social Icons -->

                    <!-- Button Facebook -->
                    <span data-toggle="popover" data-title="Follow <?php echo member::getInstance()->get_member_info($memberid,"name");?> on Facebook" data-content="https://facebook.com/<?php echo member::getInstance()->get_member_info($memberid,"facebook");?>" data-placement="bottom"><a class="glyphicons standard <?php if(member::getInstance()->get_member_info($memberid,"facebook") != ""){echo "primary";}?> facebook"><i></i></a></span>
                    <!-- Button Facebook -->

                    <!-- Button Twitter -->
                    <span data-toggle="popover" data-title="Follow <?php echo member::getInstance()->get_member_info($memberid,"name");?> on Twitter" data-content="https://twitter.com/<?php echo member::getInstance()->get_member_info($memberid,"twitter");?>" data-placement="bottom"><a class="glyphicons standard <?php if(member::getInstance()->get_member_info($memberid,"twitter") != ""){echo "primary";}?> twitter"><i></i></a></span>
                    <!-- Button Twitter -->

                    <a id="bootbox-member-yahoo"  class="glyphicons standard <?php if(member::getInstance()->get_member_info($memberid,"yahoo") != ""){echo "primary";}?> yahoo"><i></i></a>
                    <a id="modals-bootbox-alert" class="glyphicons standard <?php if(member::getInstance()->get_member_info($memberid,"didong") != ""){echo "primary";}?> iphone"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($memberid,"skype")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($memberid,"skype") != ""){echo "primary";}?> skype"><i></i></a>
                    <a href="<?php echo member::getInstance()->account($memberid,"email")?>" class="glyphicons standard <?php if(member::getInstance()->account($memberid,"email") != ""){echo "primary";}?> e-mail"><i></i></a>
    <?php if(member::getInstance()->checkfriend($_SESSION['xID'],$memberid)){
    ?>
                    <a href="<?php echo XC_URL;?>/member/addfriend/<?php echo $memberid;?>" class="glyphicons standard primary user_add"><i></i></a>
    <?php
   }
    ?>
                    <!--Theo dõi -->
                    <br>
                    <div style="width: 100%; text-align: center">
                        <?php if(member::getInstance()->checkfollow($_SESSION['xID'],$memberid)){
                            ?>
                            <button class="btn btn-primary">Theo dõi</button>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- end-->
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
                                <h4>Trường: <?php echo school::getInstance()->truong($hoctap->school,"tentruong");?></h4>
                                <p>Năm học: <?php echo $hoctap->year;?> - <?php echo $hoctap->year+1;?><br> <a href="">Chi tiết</a></p>
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
                            <li>Họ tên: <?php echo member::getInstance()->get_member_info($memberid,"firstname");?>&nbsp<?php echo member::getInstance()->get_member_info($memberid,"name");?></li>
                            <li>Tên khác: <?php echo member::getInstance()->get_member_info($memberid,"othername");?></li>
                            <li>Ngày sinh: <?php echo member::getInstance()->get_member_info($memberid,"birthday");?></li>
                            <li>Giới tính: <?php echo member::getInstance()->sex(member::getInstance()->get_member_info($memberid,"sex"));?></li>
                            <li>Địa Chỉ: <?php echo member::getInstance()->xa(member::getInstance()->get_member_info($memberid,"hokhau_xa"));?>, &nbsp;<?php echo member::getInstance()->huyen(member::getInstance()->get_member_info($memberid,"hokhau_huyen"));?>, &nbsp;<?php echo member::getInstance()->tinh(member::getInstance()->get_member_info($memberid,"hokhau_tinh"));?></li>
                        </ul>
                        </p>
                        <i></i>
                        <h4>Thông tin khác</h4>
                        <p>
                        <ul>
                            <li>Tình trạng hôn nhân: <?php echo member::getInstance()->honnhan(member::getInstance()->get_member_info($memberid,"honnhan"));?></li>
                            <li>Dân tộc: <?php echo member::getInstance()->dantoc(member::getInstance()->get_member_info($memberid,"dantoc"));?></li>
                            <li>Tôn giáo: <?php echo member::getInstance()->tongiao(member::getInstance()->get_member_info($memberid,"tongiao"));?></li>
                            <li>Di Động: <?php echo member::getInstance()->get_member_info($memberid,"didong");?></li>
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
        <!-- // Carousel END -->
        <!--Xem theo doi-->
        <?php
        $toitheodoi = $theodoi['list1'];
        $demfollowing = $theodoi['following'];
        $demfollower = $theodoi['follower'];
        $theodoitoi = $theodoi['list2'];
        ?>

        <div class="span6" >
            <!-- Bình chọn Theo Dõi-->
            <div class="row-fluid">
                <div class="span6" >
                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading glyphicons user"><i></i>Đang theo dõi</h4><span style="float: right" <b><?php echo "".$demfollowing;?></b></span>
                        </div>
                        <div class="widget-body" style="height: 200px;">
                            <p><?php
                                if($demfollowing)
                                {

                                    foreach($toitheodoi as $bb)
                                    {
                                        ?>

                                        <a href="<?php echo XC_URL;?>/member/<?php echo member::getInstance()->account($bb->follow,"username");?>" alt="<?php echo member::getInstance()->account($bb->follow,"username");?>" >
                                            <img class="span4 thumb" style="margin-left:2px; " src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($bb->follow,"avatar");?>" alt="<?php echo member::getInstance()->account($bb->follow,"username");?>" title="<?php echo member::getInstance()->account($bb->follow,"username");?>">
                                        </a>


                                    <?php

                                    }
                                }
                                else
                                {
                                    echo "Chưa theo dõi ai";
                                }
                                ?>
                                <br>
                                <br>
                                <a href="#">Xem thêm...</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="span6" >
                    <div class="widget">
                        <div class="widget-head">
                            <h4 class="heading glyphicons user"><i></i>Được theo dõi</h4><span style="float: right" <b><?php echo "".$demfollower;?></b></span>
                        </div>
                        <div class="widget-body" style="height: 200px;">
                            <p><?php
                                if($demfollower)
                                {
                                    foreach($theodoitoi as $bb)
                                    {

                                        ?>

                                        <a href="<?php echo XC_URL;?>/member/<?php echo member::getInstance()->account($bb->xid,"username");?>" alt="<?php echo member::getInstance()->account($bb->xid,"username");?>" >
                                            <img class="span4 thumb" style="margin-left:2px; " src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($bb->xid,"avatar");?>" alt="<?php echo member::getInstance()->account($bb->xid,"username");?>" title="<?php echo member::getInstance()->account($bb->xid,"username");?>">
                                        </a>

                                    <?php
                                    }
                                }
                                else
                                {
                                    echo "Chưa có ai theo dõi";
                                }
                                ?>
                                <br>
                                <br>
                                <a href="#">Xem thêm...</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!--Hyo Sun-->
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
                <h4>Thành tích mới nhất</h4>
                <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                    <a class="thumb" href="<?php echo $template_path;?>images/medal/1.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/medal/1.png" alt="photo"></a>
                </div>
                <p style="padding-left: 70px"> <b>Cao thủ văn chương</b>
                    <br>
                    Huy chương dành cho các thành viên có lượng bài viếtt được yêu thích nhiều nhất trong tháng.
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
                    $acts = member::getInstance()->get_activity($memberid);
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
                            $feeds = application::getInstance()->get_feed($memberid);
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
    var username = '<?php echo member::getInstance()->account($memberid,"username");?>',
        name = '<?php echo member::getInstance()->get_member_info($memberid,"name");?>',
        phone = '<?php echo member::getInstance()->get_member_info($memberid,"didong");?>',
        yahoo = '<?php echo member::getInstance()->get_member_info($memberid,"yahoo");?>';
</script>
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