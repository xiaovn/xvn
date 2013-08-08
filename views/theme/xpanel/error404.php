<?php
/**
 * Project: xvn.
 * File: error404.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
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
        <!-- Top navbar END --><!-- Wrapper -->
        <div class="innerT">

            <div class="container-960">

                <!-- Box -->
                <div class="hero-unit well">
                    <h1 class="padding-none">Oop! <span>404 error</span></h1>
                    <hr class="separator" />
                    <!-- Row -->
                    <div class="row-fluid">

                        <!-- Column -->
                        <div class="span6">
                            <div class="center">
                                <p>Nếu bạn thấy trang web này, hãy cố gắng thử lại lần nữa. Nếu vẫn gặp hiện tượng này, xin vui lòng báo cho nhân viên của chúng tôi để được giải đáp nhanh nhất!</p>
                            </div>
                        </div>
                        <!-- // Column END -->

                        <!-- Column -->
                        <div class="span6">
                            <div class="center">
                                <p><a href="faq.html-lang=en.htm">Xem</a> các lỗi thường gặp!</p>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <a href="index.html-lang=en.htm" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Trở lại</span><span class="strong">Trang chủ</span></a>
                                    </div>
                                    <div class="span6">
                                        <a href="faq.html-lang=en.htm" class="btn btn-icon-stacked btn-block btn-danger glyphicons circle_question_mark"><i></i><span>Xem hướng dẫn</span><span class="strong">Trung tâm trợ giúp</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Column END -->

                    </div>
                    <!-- // Row END -->

                </div>
                <!-- // Box END -->
            </div>

        </div>
        <!-- // Wrapper END -->
    </div>
    <!-- // Content END -->
<?php
require_once "footer.php";
?>