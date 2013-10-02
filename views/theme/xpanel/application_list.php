<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 2:17 PM
 * To change this template use File | Settings | File Templates.
 *********/
require_once "header.php";
?>

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>


    <!-- LESS.js Library -->
    <script src="<?php echo $template_path;?>js/less.min.js"></script>
</head>
<body>
<script>
    $(function() {
        $(".xbtn-register").click(function()
        {
            var id = $(this).attr("id");
            var dataString = 'id='+ id ;
            var parent = $(this);


            //$(this).fadeOut(300);
            $( "#appid\\["+ id +"\\]").fadeOut(500);
            $.ajax({
                type: "POST",
                url: "<?php echo XC_URL;?>/ungdung/applist/register",
                data: dataString,
                cache: false,

                success: function(html)
                {

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
<div class="container-960 innerT">

<h3 class="glyphicons shopping_cart"><i></i>Xiao Application Store</h3>
<div class="separator bottom"></div>
<div class="row-fluid">
    <div class="span3">
        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body">
                <div class="glyphicons glyphicon-xlarge glyphicon-top circle_question_mark">
                    <i></i>
                    <h4>Trợ giúp sử dụng</h4>
                    <p>Liên hệ ngay với các bộ phận hỗ trợ để được giải đáp.</p>
                    <a href="" class="btn btn-primary btn-block"><span class="icon-comments-alt"></span> Hỗ trợ trực tuyến</a>
                </div>
            </div>
        </div>
        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Thông báo</h4></div>
            <div class="widget-body"><p class="margin-none">Hệ thống thanh toán đang tạm ngừng giao dịch để nâng cấp, mọi thao tác thanh toán tại X.E.M đều là lừa đảo.</p></div>
        </div>
    </div>
    <div class="span9">
        <div data-toggle="gridalicious" data-gridalicious-width="180" data-gridalicious-gutter="0">
            <?php foreach($applist as $app):?>
            <div id="appid[<?php echo $app->appid?>]" class="widget widget-heading-simple widget-body-white widget-pinterest">
                <div class="widget-body padding-none">
                    <div class="description">
                        <h5 class="text-uppercase strong"><?php echo $app->appname;?></h5>
                        <p><?php echo "Mã ứng dụng  " .$app->appid;?></p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="btn-group">
                                    <a id="<?php echo $app->appid?>" class="btn xbtn-register btn-success"><i class="icon-shopping-cart icon-fixed-width"></i>Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ribbon-wrapper"><div class="ribbon success">New</div></div>
            </div>
            <?php endforeach; ?>
         </div>
    </div>
</div>
</div>
<!-- // Content END -->
<?php
require_once "footer.php";
?>