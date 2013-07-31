<?php
/**
 * Project: xvn.
 * File: nav.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:30 PM - 7/30/13
 * Website: www.xiao.vn
 */
?>
<div class="navbar main hidden-print">

    <div class="secondary">
        <div class="container-960">

            <!-- Brand -->
            <a href="<?php echo XC_URL?>" class="appbrand pull-left">X.E.M. MemberPanel</a>

            <ul class="topnav pull-right">

                <!-- Themer -->
                <li class="hidden-phone"><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
                <!-- // Themer END -->

                <li class="hidden-phone"><a href="<?php echo XC_URL?>/support" class="glyphicons shield"><i></i> Trợ giúp</a></li>
                <li class="glyphs hidden-phone">
                    <?php
                        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1)
                        {
                    ?>
                            <ul>
                                <li><a href="<?php echo XC_URL?>/member" class="glyphicons user"><i></i> <?php echo $_SESSION['xUser']?></a></li>
                                <li><a href="<?php echo XC_URL?>/member/logout" class="glyphicons lock"><i></i> Thoát</a></li>
                            </ul>
                    <?php
                        }
                    else
                    {
                    ?>
                    <ul>
                        <li><a href="<?php echo XC_URL?>/member/login" class="glyphicons unlock"><i></i> Đăng nhập</a></li>
                        <li><a href="<?php echo XC_URL?>/member/signup" class="glyphicons user_add"><i></i> Đăng ký</a></li>
                    </ul>
                    <?php }?>
                </li>
                <li class="glyphs hidden-phone">
                    <ul>
                        <li class="active single"><a href="<?php echo XC_URL?>/admin" class="glyphicons keys"><i></i> Quản trị</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>

        </div>
    </div>

    <div class="container-960">

        <!-- Menu Toggle Button -->
        <button type="button" class="btn btn-navbar visible-phone">
            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
        <!-- // Menu Toggle Button END -->

        <ul class="topnav pull-left">

            <li class="dropdown dd-1 active">
                <a href="<?php echo XC_URL?>" class="glyphicons home"><i></i>Trang chủ </span></a>
            </li>
            <li>
                <a href="<?php echo XC_URL?>/member" class="glyphicons circle_info"><i></i> Thông tin</a></li>
            <li><a href="<?php echo XC_URL?>/member/account" class="glyphicons credit_card"><i></i> Tài khoản</a></li>
            <li class="dropdown dd-1">
                <a href="" data-toggle="dropdown" class="glyphicons shopping_cart"><i></i>Ứng dụng <span class="caret"></span></a>
                <ul class="dropdown-menu pull-left">
                    <li class=""><a href="<?php echo XC_URL?>/app">Danh mục ứng dụng</a></li>
                    <li class=""><a href="">C</a></li>
                    <li class=""><a href="">D</a></li>
                </ul>
            </li>
            <li class="dropdown dd-1">
                <a href="" data-toggle="dropdown" class="glyphicons notes"><i></i>Blog <span class="caret"></span></a>
                <ul class="dropdown-menu pull-left">
                    <li class=""><a href="<?php echo XC_URL?>/blog/list" >Blog Posts</a></li>
                    <li class=""><a href="<?php echo XC_URL?>/blog/friend">Blog Timeline</a></li>
                </ul>
            </li>
            <li><a href="<?php echo XC_URL?>/contact" class="glyphicons iphone"><i></i> Liên hệ</a></li>

        </ul>

        <!-- Top Menu Right -->
        <ul class="topnav pull-right border-none hidden-tablet">

            <li class="search open margin-none border-none box-shadow-none">
                <form autocomplete="off" class="dropdown dd-1">
                    <input type="text" value="" placeholder="Nhập từ khóa .." data-toggle="typeahead" />
                    <button type="button" class="glyphicons search"><i></i></button>
                </form>
            </li>

        </ul>
        <div class="clearfix"></div>
        <!-- // Top Menu Right END -->

    </div>

</div>