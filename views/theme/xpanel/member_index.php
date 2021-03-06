<?php
/**
 * Project: xvn.
 * File: member_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:40 PM - 7/30/13
 * Website: www.xiao.vn
 ****/
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    </head>
<body>
<script>
        $( document ).ready(function() {
            $( "#avatar" ).mouseover(function() {
                $( "#btnchangeavatar" ).fadeIn(200);
            });
			$( "#avatar" ).mouseleave(function() {
                $( "#btnchangeavatar" ).fadeOut(200);
            });
        });
    </script>
    <!-- Main Container Fluid -->
<div class="container-fluid">

<!-- Content -->
<!-- Content -->
<div id="content">

<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
<?php
require_once "nav.php";
?>
<!-- Top navbar END --><div class="container-960 innerT">

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"firstname");?>&nbsp;<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> <span>Thông tin cá nhân.</span></h3>
<div class="separator bottom"></div>

<div class="widget widget-heading-simple widget-body-gray">
    <div class="widget-body"><p class="lead center margin-none"><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?></p></div>
</div>

<!-- Row -->
<div class="row-fluid">

    <!-- Thumbnails -->
    <ul class="thumbnails">

        <!-- Column -->
        <li class="span4">

            <!-- Thumbnail -->
            <div class="thumbnail widget-thumbnail">
				<div id="avatar" style="background-image: url(<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($_SESSION['xID'],"avatar");?>); height: 300px; width: 300px;">
				<a class="btn btn-primary" href="http://ves.xiao.vn/member/editavatar" id="btnchangeavatar" style="margin-top: 250px; margin-left: 140px; display: none;">Đổi ảnh đại diện</a>
				</div>
                <div class="caption">
                    <h4><?php echo $_SESSION['xUser'];?></h4>
                    <p><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?></p>

                    <!-- Social Icons -->

                    <!-- Button Facebook -->
                    <span data-toggle="popover" data-title="Follow <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> on Facebook" data-content="https://facebook.com/<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"facebook");?>" data-placement="bottom"><a class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"facebook") != ""){echo "primary";}?> facebook"><i></i></a></span>
                    <!-- Button Facebook -->

                    <!-- Button Twitter -->
                    <span data-toggle="popover" data-title="Follow <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> on Twitter" data-content="https://twitter.com/<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"twitter");?>" data-placement="bottom"><a class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"twitter") != ""){echo "primary";}?> twitter"><i></i></a></span>
                    <!-- Button Twitter -->

                    <a id="bootbox-member-yahoo"  class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"yahoo") != ""){echo "primary";}?> yahoo"><i></i></a>
                    <a id="modals-bootbox-alert" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"didong") != ""){echo "primary";}?> iphone"><i></i></a>
                    <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"skype")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"skype") != ""){echo "primary";}?> skype"><i></i></a>
                    <a href="<?php echo member::getInstance()->account($_SESSION['xID'],"email")?>" class="glyphicons standard <?php if(member::getInstance()->account($_SESSION['xID'],"email") != ""){echo "primary";}?> e-mail"><i></i></a>
                    <?php if(member::getInstance()->checkfriend($_SESSION['xID'],$_SESSION['xID'])){
                        ?>
                        <a href="<?php echo XC_URL;?>/member/addfriend/<?php echo $_SESSION['xID'];?>" class="glyphicons standard primary user_add"><i></i></a>
                    <?php
                    }
                    ?>

                    <div class="clearfix"></div>
                    <!-- // Social Icons END -->
                </div>
            </div>

            <!-- // Thumbnail END -->
            <div class="separator bottom"></div>
            <i></i>
        <li class="span8">
            <div class="span12" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                <a class="thumb" href="" data-gallery="gallery"><img src="<?php echo $template_path;?>images/cv.png" alt="photo"></a>
                <div class="separator bottom"></div>
            </div>
            <!-- // Column END -->
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
                        <li>Họ tên: <b><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"firstname");?>&nbsp<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?></b></li>
                        <li>Tên khác: <b><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"othername");?></b></li>
                        <li>Ngày sinh: <b><?php echo date('d-m-Y',strtotime(member::getInstance()->get_member_info($_SESSION['xID'],"birthday")));?></b></li>
                        <li>Giới tính: <b><?php echo member::getInstance()->sex(member::getInstance()->get_member_info($_SESSION['xID'],"sex"));?></b></li>
                        <li>Địa Chỉ: <b><?php echo member::getInstance()->xa(member::getInstance()->get_member_info($_SESSION['xID'],"hokhau_xa"));?>, &nbsp;<?php echo member::getInstance()->huyen(member::getInstance()->get_member_info($_SESSION['xID'],"hokhau_huyen"));?>, &nbsp;<?php echo member::getInstance()->tinh(member::getInstance()->get_member_info($_SESSION['xID'],"hokhau_tinh"));?></b></li>
                    </ul>
                    </p>
                    <i></i>
                    <h4>Thông tin khác</h4>
                    <p>
                    <ul>
                        <li>Tình trạng hôn nhân: <b><?php echo member::getInstance()->honnhan(member::getInstance()->get_member_info($_SESSION['xID'],"honnhan"));?></b></li>
                        <li>Dân tộc: <b><?php echo member::getInstance()->dantoc(member::getInstance()->get_member_info($_SESSION['xID'],"dantoc"));?></b></li>
                        <li>Tôn giáo: <b><?php echo member::getInstance()->tongiao(member::getInstance()->get_member_info($_SESSION['xID'],"tongiao"));?></b></li>
                    </ul>
                    </p>
                </div>
                <div class="separator bottom"></div>
                <div class="glyphicons glyphicon-large group">
                    <i></i>
                    <h4><a href="#">Bạn bè</a></h4>
                    <?php
                    $dsbb = member::getInstance()->get_banbe($_SESSION['xID']);
                    foreach($dsbb as $bb)
                    {
                        ?>
                        <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                            <a class="thumb" href="#" alt="<?php echo member::getInstance()->info($bb->xid2,"name");?>" data-gallery="gallery"><img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($bb->xid2,"avatar");?>" alt="<?php echo member::getInstance()->account($bb->xid2,"username");?>" title="<?php echo member::getInstance()->account($bb->xid2,"username");?>"></a>
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
                                    <img src="<?php echo XC_URL;?>uploads/blog/<?php echo $blog->blog_feature_image?>" alt="" />
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
                    <h4 class="heading glyphicons user"><i></i><a href="#">Đang theo dõi</a></h4><span style="float: right" ><b><?php echo "".$demfollowing;?></b></span>
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
                    </p>
                </div>
            </div>
        </div>
        <div class="span6" >
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading glyphicons user"><i></i><a href="#">Được theo dõi</a></h4><span style="float: right" <b><?php echo "".$demfollower;?></b></span>
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
                <h4>Huy hiệu</h4>
                <p><?php
                    if($huyhieu)
                    {
                        foreach($huyhieu as $medal)
                        {

                            ?>

                                <div class="span2" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                                    <a class="thumb" href="" title="<?php echo member::getInstance()->medal($medal->medalid,"medalname");?>"><img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->medal($medal->medalid,"medalicon");?>" alt="photo">
                                    </a>
                                </div>
                        <?php
                        }
                    }
                    else
                    {
                        echo "Chưa có huy hiệu";
                    }
                    ?>
                <br>
                <a href="#">Xem thêm...</a>
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
    var username = '<?php echo member::getInstance()->account($_SESSION['xID'],"username");?>',
        name = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?>',
        phone = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong");?>',
        yahoo = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"yahoo");?>';
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