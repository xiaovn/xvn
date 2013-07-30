<?php
/**
 * Project: xvn.
 * File: member_signup.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:17 PM - 7/30/13
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css-1373689235.css" rel="stylesheet" />
    </head>
<body class="login">

    <!-- Main Container Fluid -->
<div class="container-fluid">

    <div id="content">

        <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
        <?php
        require_once "nav.php";
        ?>
        <!-- Top navbar END --><!-- Wrapper -->
        <div id="login">

            <div class="wrapper signup">

                <h1 class="glyphicons user_add">Đăng ký <i></i></h1>

                <!-- Box -->
                <div class="widget widget-heading-simple">
                    <div class="widget-body">

                        <!-- Form -->
                        <form method="post" action="">

                            <!-- Row -->
                            <div class="row-fluid row-merge">

                                <!-- Column -->
                                <div class="span6">
                                    <div class="innerR">
                                        <label class="strong">Tài khoản</label>
                                        <input type="text" class="input-block-level" placeholder="Your Username"/>
                                        <label class="strong">Mật khẩu</label>
                                        <input type="password" class="input-block-level" placeholder="Your Password"/>
                                        <label class="strong">Xác nhận</label>
                                        <input type="password" class="input-block-level" placeholder="Confirm Password"/>
                                    </div>
                                </div>
                                <!-- // Column END -->

                                <!-- Column -->
                                <div class="span6">
                                    <div class="innerL">
                                        <label class="strong">Email</label>
                                        <input type="text" class="input-block-level" placeholder="Your Email Address"/>
                                        <label class="strong">Xác nhận Email</label>
                                        <input type="text" class="input-block-level" placeholder="Confirm Your Email Address"/>
                                        <a href=""  class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Tạo tài khoản</span><span class="strong">và cùng trải nghiệm</span></a>
                                        <p>Trợ giúp tài khoản? <a href="faq.html">Liên hệ</a></p>
                                    </div>
                                </div>
                                <!-- // Column END -->

                            </div>
                            <!-- // Row END -->

                        </form>
                        <!-- // Form END -->


                    </div>
                    <!-- // Box END -->

                </div>

            </div>

        </div>
        <!-- // Wrapper END -->
    </div>
    <!-- // Content END -->
<?php
require_once "footer.php";
?>