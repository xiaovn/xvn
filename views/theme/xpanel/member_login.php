<?php
/**
 * Project: xvn.
 * File: member_login.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:11 PM - 7/30/13
 * Website: www.xiao.vn
 */
require_once "header_login.php";
?>
<!-- Content -->
<div id="content">

    <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
    <?php
    require_once "nav.php";
    ?>
    <!-- Top navbar END --><!-- Wrapper -->
    <div id="login">

        <div class="container">

            <div class="wrapper">

                <h1 class="glyphicons unlock">Đăng nhập <i></i></h1>

                <!-- Box -->
                <div class="widget widget-heading-simple widget-body-gray">

                    <div class="widget-body">

                        <!-- Form -->
                        <form method="post" action="./process/process_account.php?w=6125">
                            <label>Mã thành viên, email hoặc tài khoản</label>
                            <input type="text" name="username" class="input-block-level" placeholder="Your ID, Username or Email address"/>
                            <label>Mật khẩu <a class="password" href="">Quên mật khẩu?</a></label>
                            <input type="password" name="password" class="input-block-level margin-none" placeholder="Your Password" />
                            <div class="separator bottom"></div>
                            <div class="row-fluid">
                                <div class="span8">
                                    <div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Giữ đăng nhập</label></div>
                                </div>
                                <div class="span4 center">
                                    <button class="btn btn-block btn-inverse" type="submit">Đăng nhập</button>
                                </div>
                            </div>
                        </form>
                        <!-- // Form END -->

                    </div>
                    <div class="widget-footer">
                        <p class="glyphicons restart"><i></i>Tài khoản được Xiao bảo mật tối đa...</p>
                    </div>
                </div>
                <!-- // Box END -->

            </div>

        </div>

    </div>
    <!-- // Wrapper END -->
</div>
<?php
require_once "footer.php";
?>