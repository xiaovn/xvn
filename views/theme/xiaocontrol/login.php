<?php
/**
 * Project: xsc.
 * File: login.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:24 PM - 8/21/13
 * Website: www.xiao.vn
 */
include_once 'header.php';
?>
</head>
<body class="login ">

<!-- Wrapper -->
<div id="login">

    <div class="container">

        <div class="wrapper">

            <h1 class="glyphicons lock">Xiao Service Control Panel<i></i></h1>

            <!-- Box -->
            <div class="widget widget-heading-simple widget-body-gray">

                <div class="widget-body">

                    <!-- Form -->
                    <form method="post" action="" name="frmloginadmin">
                        <label>Username, xID or Email</label>
                        <input type="text" name="username" class="input-block-level" placeholder="Account ID, Your Username or Email address"/>
                        <label>Password <a class="password" href="">forgot it?</a></label>
                        <input type="password" name="password" class="input-block-level margin-none" placeholder="Your Password" />
                        <div class="separator bottom"></div>
                        <div class="row-fluid">
                            <div class="span8">
                                <div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div>
                            </div>
                            <div class="span4 center">
                                <button class="btn btn-block btn-inverse" type="submit">Sign in</button>
                            </div>
                        </div>
                    </form>
                    <!-- // Form END -->

                </div>
                <div class="widget-footer">
                    <p class="glyphicons restart"><i></i>Please enter your username and password ...</p>
                </div>
            </div>
            <!-- // Box END -->
        </div>

    </div>

</div>
<!-- // Wrapper END -->

<!-- Code Beautify -->
<script src="./asset/js/beautify.js"></script>
<script src="./asset/js/beautify-html.js"></script>

<!-- PrettyPhoto -->
<script src="./asset/js/jquery.prettyPhoto.js"></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '/';
</script>


<!-- Modernizr -->
<script src="./asset/js/modernizr.js"></script>

<!-- Bootstrap -->
<script src="./asset/js/bootstrap.min.js"></script>

<!-- SlimScroll Plugin -->
<script src="./asset/js/jquery.slimscroll.min.js"></script>

<!-- Common Demo Script -->
<script src="./asset/js/common.js"></script>

<!-- Holder Plugin -->
<script src="./asset/js/holder.js"></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="./asset/js/jquery.uniform.min.js"></script>
</body>
</html>