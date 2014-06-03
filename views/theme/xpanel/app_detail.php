<?php
/**
 * Project: xvn.
 * File: app_detail.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 07:35 - 23/12/2013
 * Website: www.xiao.vn
 */
include "header.php";
$app = $app;
?>

    <!-- Bootstrap -->
    <link href="<?php echo $template_path;?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_path;?>css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $template_path;?>css/glyphicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="<?php echo $template_path;?>css/uniform.default.css" rel="stylesheet" />

    <!-- Bootstrap Extended -->
    <link href="<?php echo $template_path;?>css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="<?php echo $template_path;?>css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?php echo $template_path;?>css/jquery.miniColors.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="<?php echo $template_path;?>css/prettify.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- LESS.js Library -->
    <script src="<?php echo $template_path;?>js/less.min.js"></script>
    </head>
<body>
    <script>
        $(document).ready(function(){
            $(".btn-app-register").on("click",function()
            {

                var id = $(this).attr("id");
                var dataString = 'id='+ id ;
                var parent = $(this);
                $.ajax({
                    type: "POST",
                    url: "<?php echo XC_URL;?>/ungdung/registerapp",
                    data: dataString,
                    cache: false,

                    success: function(html)
                    {
                        $(".alert-success").fadeIn(200);
                        $(".btn-app-register").removeClass("btn-success");
                        $(".btn-app-register").addClass("btn-warning disable");
                        $(".btn-app-register").text("Đã đăng ký");
                    }
                });


                return false;

            });
        });
    </script>
    <!-- Main Container Fluid -->
<div class="container-fluid">

    <!-- Content -->
    <div id="content">

        <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
        <?php
        require_once "nav.php";
        ?>
        <!-- Top navbar END -->
    <!-- Top navbar END -->
    <div class="container-960 innerT">

        <h3 class="glyphicons gift"><i></i><?php echo $app->appname;?></h3>
        <div class="separator bottom"></div>
        <div class="alert alert-success" style="display: none;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Chúc mừng!</strong> Bạn đã đăng ký thành công ứng dụng <b><?php echo $app->appname;?></b>. Hãy kiểm tra thông tin trong danh sách ứng dụng của bạn.
        </div>
        <!-- Product details -->
        <div class="shop-client-products product-details">

            <!-- Row -->
            <div class="row-fluid">

                <!-- Product Gallery -->
                <div class="span4" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                    <a class="thumb" title="<?php echo $app->appname;?>" data-gallery="gallery"><img src="<?php echo $upload_path;?>application/thumb/<?php echo $app->appimage;?>" alt="<?php echo $app->appname;?>" /></a>
                    <div class="separator bottom"></div>
                    <div class="gallery">
                        <ul class="row-fluid">
                            <?php $listregister = application::getInstance()->get_registed_list($app->appid);
                            foreach($listregister as $lr)
                            {
                                ?>
                                <li class="span3"><a class="thumb" title="<?php echo member::getInstance()->account($lr->xid,"username");?>" href="<?php echo XC_URL?>/member/view/<?php echo member::getInstance()->account($lr->xid,"username");?>" data-gallery="gallery"><img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($lr->xid,"avatar");?>" alt="<?php echo member::getInstance()->account($lr->xid,"username");?>" /></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- // Product Gallery END -->

                <div class="span8">
                    <div class="row-fluid">
                        <div class="span7">
                            <!-- Product description -->
                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-head"><h4 class="heading glyphicons notes strong"><i></i>Tính năng</h4></div>
                                <div class="widget-body">
                                    <p><?php echo $app->appdescription;?></p>
                                </div>
                            </div>
                            <!-- // Product description END -->
                            <div class="widget widget-heading-simple widget-body-gray">
                                <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Lưu ý</h4></div>
                                <div class="widget-body"><p class="margin-none">Ứng dụng này chỉ hỗ trợ thành viên đã đăng ký dịch vụ với Xiao.</p></div>
                            </div>
                        </div>
                        <div class="span5">
                            <form class="margin-bottom-none">

                                <!-- Price -->
                                <div class="box-generic">
                                    <div class="separator bottom">
                                        <span class="text-large">&dollar; <?php echo $app->appprice;?></span><br/>
                                        <span class="text-faded">&dollar; <?php echo $app->apppricevip;?> for VIP</span>
                                    </div>
                                    <label class="strong">Tùy chọn thông báo</label>
                                    <select class="selectpicker span12" data-style="btn-default btn-small">
                                        <option>Qua tin nhắn</option>
                                        <option>Qua email</option>
                                        <option>Không</option>
                                    </select>
                                    <input type="hidden" name="appid" value="<?php echo $app->appid?>">
                                    <div class="separator bottom">
                                        <?php
                                        if(!isset($_SESSION['xID']) || $_SESSION['xID'] == "")
                                        {
                                            ?>
                                            <a href="<?php echo XC_URL?>/member/login" class="btn btn-icon btn-large glyphicons cart_in btn-info btn-block"><i></i>Đăng nhập</a>
                                            <?php
                                        }
                                        elseif($registed)
                                        {
                                            ?>
                                            <a class="btn btn-icon btn-large glyphicons cart_in btn-warning btn-block"><i></i>Đã đăng ký</a>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <a id="<?php echo $app->appid;?>" class="btn btn-icon btn-large glyphicons btn-app-register cart_in btn-success btn-block"><i></i>Đăng ký</a>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="text-right share">
                                        Chia sẻ ứng dụng <a href="" class="glyphicons standard facebook"><i></i></a><a href="" class="glyphicons standard twitter"><i></i></a><a href="" class="glyphicons standard foursquare"><i></i></a>
                                    </div>
                                    <div class="ribbon-wrapper"><div class="ribbon success">Avaible</div></div>
                                </div>
                                <!-- // Purchase Options END -->

                            </form>
                        </div>
                    </div>
                    <!-- Product reviews & delivery -->
                    <div class="widget widget-tabs widget-quick">

                        <!-- Widget heading -->
                        <div class="widget-head">
                            <ul>
                                <li class="active"><a href="#reviewsTab" data-toggle="tab" class="glyphicons star"><i></i>Đánh giá/Bình luận</a></li>
                                <li><a href="#deliveryTab" data-toggle="tab" class="glyphicons usd"><i></i>Lịch sử giao dịch</a></li>
                            </ul>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body">
                            <div class="tab-content">

                                <!-- Delivery Tab -->
                                <div class="tab-pane" id="deliveryTab">
                                    <ul class="icons-ul">
                                        <?php $listlogs = application::getInstance()->get_logs_application($app->appid);
                                        foreach($listlogs as $log)
                                        {
                                        ?>
                                            <li><span class="icon-li <?php echo application::getInstance()->type_log_icon($log->xtype);?>"></span> <b><?php echo member::getInstance()->account($log->xid,"username")?></b> vừa <?php echo application::getInstance()->type_log($log->xtype);?> ứng dụng <b><?php echo application::getInstance()->application($log->appid,"appname")?></b> lúc <b><?php echo date("H:i:s d-m-Y",strtotime($log->xtime))?></b></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- // Delivery Tab END -->

                                <!-- Reviews Tab -->
                                <div class="tab-pane active" id="reviewsTab">
                                <?php $app_comment_list = application::getInstance()->get_app_comment($app->appid,3);
                                foreach($app_comment_list as $cm)
                                {
                                    ?>
                                    <div class="separator bottom">

                                        <i class="icon-quote-right icon-5x pull-right icon-muted"></i>
                                        <strong><?php echo member::getInstance()->account($cm->xid,"username")?></strong><br/>
									<span class="rating text-left text-faded read-only">

                                        <span class="star <?php if($cm->rate == 5){ ?>active<?php } ?>"></span>
                                        <span class="star <?php if($cm->rate == 4){ ?>active<?php } ?>"></span>
                                        <span class="star <?php if($cm->rate == 3){ ?>active<?php } ?>"></span>
                                        <span class="star <?php if($cm->rate == 2){ ?>active<?php } ?>"></span>
                                        <span class="star <?php if($cm->rate == 1){ ?>active<?php } ?>"></span>
							        </span>&nbsp;
                                        <span class="text-faded"><i class="icon-fixed-width icon-calendar"></i> lúc <?php echo date("d-m-Y",strtotime($cm->time))?></span>
                                        <br/>
                                        <?php echo $cm->comment;?>
                                    </div>
                                  <?php
                                }
                                ?>

                                </div>
                                <!-- // Reviews Tab END -->

                            </div>
                        </div>
                    </div>
                    <!-- // Product reviews & delivery END -->
                </div>
                <!-- // Row END -->

            </div>
            <div class="separator bottom"></div>
            <!-- // Product details END -->

        </div>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php"?>