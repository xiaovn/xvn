<?php
/**
 * Project: xvn.
 * File: member_resetpass.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:19 - 30/12/2013
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
            <script>
                $(document).ready(function(){
                    $("#resetpass").on("click",function()
                    {
                        var username = $("#username").val();
                        var email = $("#email").val();
                        var dataString = 'username='+ username + '&email=' + email ;
                        $("#resetpass").text("Vui lòng đợi...");
                        $.ajax({
                            type: "POST",
                            url: "<?php echo XC_URL;?>/ungdung/resetpass",
                            data: dataString,
                            cache: false,

                            success: function(html)
                            {
								$("#resetpass").text("Đã gửi yêu cầu");
                                $("#result").text(html);
                            }
                        });


                        return false;

                    });
                });
            </script>

            <div class="container">

                <div class="wrapper">

                    <h1 class="glyphicons unlock"><i></i>Khôi phục mật khẩu</h1>

                    <!-- Box -->
                    <div class="widget widget-heading-simple widget-body-gray">

                        <div class="widget-body">

                            <!-- Form -->
                            <form method="post" action="">
                                <label>Mã thành viên, tên đăng nhập<label>
                                <input type="text" name="username" id="username" class="input-block-level" placeholder="Your ID, Username"/>
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="input-block-level margin-none" placeholder="Your Email" />
                                <div class="separator bottom"></div>
                                <div class="row-fluid">
                                    <div class="span4">

                                    </div>
                                    <div class="span8 center">
                                        <button class="btn btn-block btn-inverse" id="resetpass" type="button">Khôi phục mật khẩu</button>
                                    </div>
                                </div>
                            </form>
                            <!-- // Form END -->

                        </div>
                        <div class="widget-footer">
                            <p class="glyphicons restart" id="result"><i></i>Tài khoản được Xiao bảo mật tối đa...
                            </p>
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