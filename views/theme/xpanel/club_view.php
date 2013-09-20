<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/19/13
 * Time: 7:47 AM
 * To change this template use File | Settings | File Templates.
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    </head>
<body>

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

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo"Nhóm " .$thongtinclub->clubname;?> <span>Thông tin nhóm.</span></h3>
<div class="separator bottom"></div>

<div class="widget widget-heading-simple widget-body-gray">
    <div class="widget-body"><p class="lead center margin-none"> Nhóm là ngôi nhà hạnh phúc của mỗi thành viên </p></div>
</div>

<!-- Row -->
<div class="row-fluid">

    <!-- Thumbnails -->
    <ul class="thumbnails">

        <!-- Column -->
        <li class="span4">

            <!-- Thumbnail -->
            <div class="thumbnail widget-thumbnail">
                <img src="<?php echo XC_URL;?>/avatar/<?php echo $thongtinclub->clublogo;?>"  alt="100%x200 Image Holder" />
                <div class="caption">
                    <h4><?php echo $thongtinclub->clubname?></h4>
                    <p><?php echo "Cùng nhau chúng ta sẽ làm nên tất cả" ;?></p>
                </div>
            </div>
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
                                <h4>Thông tin nhóm</h4>
                                <p>
                                <ul>

                                <li>Tên nhóm: <?php echo $thongtinclub->clubname;?></li>
                                <li>Mã nhóm: <?php echo $thongtinclub->clubid;?></li>
                                <li>Mã loại nhóm: <?php echo member::getInstance()->get_loaiclub($thongtinclub->clubgroup);?></li>
                                <li>Mã loại nhóm: <?php echo $thongtinclub->clubgroup;?></li>
                                <li>Ngày tạo nhóm: <?php echo $thongtinclub->createdate;?></li>
                                <li>Hoạt động gần nhất: <?php echo $thongtinclub->lastactiondate;?></li>
                                <li>Số lượng bài viết: <?php echo $thongtinclub->postcount;?></li>
                                <li>Số lượng thành viên: <?php echo $thongtinclub->memcount;?></li>
                                </ul>
                                </p>
                                <i></i>
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
                        <h4>Thông tin người tạo nhóm</h4>
                        <p>
                        <ul>
                            <li>Họ tên: <?php echo member::getInstance()->get_member_info($thongtinclub->clubadmin,"firstname");?>&nbsp<?php echo member::getInstance()->get_member_info($thongtinclub->clubadmin,"name");?></li>
                            <li>Tên khác: <?php echo member::getInstance()->get_member_info($thongtinclub->clubadmin,"othername");?></li>
                            <li>Ngày sinh: <?php echo member::getInstance()->get_member_info($thongtinclub->clubadmin,"birthday");?></li>
                            <li>Giới tính: <?php echo member::getInstance()->sex(member::getInstance()->get_member_info($thongtinclub->clubadmin,"sex"));?></li>
                            <li>Di Động: <?php echo member::getInstance()->get_member_info($thongtinclub->clubadmin,"didong");?></li>
                        </ul>
                        </p>
                        <i></i>
                    </div>

            </div>
                <div class="separator bottom"></div>
                    <div class="glyphicons glyphicon-large group">
                    <i></i>
                    <h4>Danh sách thành viên</h4>
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
                <h4 class="heading glyphicons twitter"><i></i>Bài viết mới nhất</h4>
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