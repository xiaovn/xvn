<?php
/**
 * Project: xsc.
 * File: nav.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:46 PM - 8/21/13
 * Website: www.xiao.vn
 */
?>

<ul class="topnav pull-left">
    <li class="active"><a href="<?php echo XC_URL?>/admin" class="glyphicons dashboard"><i></i> Tổng quan</a></li>
    <li class="dropdown dd-1">
        <a href="" data-toggle="dropdown" class="glyphicons show_big_thumbnails"><i></i>Ứng dụng <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <!-- Components Submenu Level 2 -->
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Quản lý thư viện</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library">Tất cả tài liệu</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?action=new">Thêm tài liệu mới</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?report=book">Thống kê thư viện</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?report=storage">Thống kê lưu trữ</a></li>
                </ul>
            </li>
            <!-- // Components Submenu Level 2 END -->
            <!-- Components Submenu Level 2 -->
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Quản lý học sinh</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student">Danh sách học sinh</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?action=new">Thêm học sinh</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?report=book">Thống kê học sinh</a></li>
                </ul>
            </li>
            <!-- // Components Submenu Level 2 END -->
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Quản lý thời khóa biểu</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student">Danh sách học sinh</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?action=new">Thêm học sinh</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?report=book">Thống kê học sinh</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="dropdown dd-1">
        <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Thiết lập <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <li><a href="../admin/system" class="glyphicons history"><i></i>Hệ thống</a></li>
        </ul>
    </li>
    <li class="glyphs hidden-tablet hidden-phone" data-toggle="tooltip" data-title="Click to view element in short menu" data-placement="bottom">
        <ul>
            <li class="active"><a href="#" class="glyphicons heart"><i></i></a></li>
            <li><a href="#" class="glyphicons home"><i></i></a></li>
            <li><a href="#" class="glyphicons bin"><i></i></a></li>
        </ul>
    </li>
    <li class="search open hidden-phone hidden-tablet">
        <form autocomplete="off" class="dropdown dd-1">
            <input type="text" value="" placeholder="Nhập từ khóa .." data-toggle="typeahead" />
            <button type="button" class="glyphicons search"><i></i></button>
        </form>
    </li>
</ul>