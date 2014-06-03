<?php
/**
 * Project: xvn.
 * File: processimport.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 08:06 - 02/01/2014
 * Website: www.xiao.vn
 */
session_start();
include "config.php";

?>
<!DOCTYPE html>
<head>
    <title>VES Processing</title>

    <!-- Meta -->
    <meta charset="UTF-8" />

    <!-- Bootstrap -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $admintemplate_path;?>/asset/css/responsive.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/glyphicons.css"  rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $admintemplate_path;?>/asset/css/font-awesome.min.css">
    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/style-default.css" rel="stylesheet" type="text/css" />

</head>
<body class="login ">

<!-- Wrapper -->
<div id="login">
    <script type="text/javascript">
        //Start the long running process
        $.ajax({
            url: '<?php echo XC_URL?>/admin/importdiem',
                success: function(data) {
            }
        });
        function getProgress(){
            $.ajax({
                url: '<?php echo XC_URL?>/admin/processajax',
                success: function(data) {
                    $(".bar").removeAttr("style");
                    $(".bar").css({"width": data + "%"});
                    if(data<101){
                        getProgress();
                    }
                    else
                    {
                        var delay = 1000;
                        setTimeout(function(){ window.location = '<?php echo XC_URL?>/admin'; }, delay);
                    }
                }
            });
        }
        getProgress();
    </script>
    <div class="wrapper signup">

        <h1 class="glyphicons lock">Tiến trình thực thi dữ liệu <i></i></h1>

        <!-- Box -->
        <div class="widget widget-heading-simple">

            <div class="widget-head">
                <h3 class="heading">Không đóng cửa sổ này đến khi hệ thống tự chuyển</h3>
                <div class="pull-right">
                    Trợ giúp?
                    <a href="http://support.xiao.vn" target="_blank" class="btn btn-inverse btn-mini">Support Center</a>
                </div>
            </div>
            <div class="widget-body">

                    <!-- Row -->
                    <div class="row-fluid row-merge">

                        <!-- Column -->
                        <div class="span12">
                            <div class="innerR">
                                <div class="progress progress-primary">
                                    <div class="bar" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- // Row END -->


            </div>
            <!-- // Box END -->

        </div>

    </div>

</div>
<!-- // Wrapper END -->


</body>
</html>