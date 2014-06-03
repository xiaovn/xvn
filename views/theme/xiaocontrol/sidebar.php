<?php
/**
 * Project: xsc.
 * File: sidebar.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:46 PM - 8/21/13
 * Website: www.xiao.vn
 */

?>
<!-- Brand -->
<a href="#" class="appbrand">X.E.M. ADMIN</a>

<!-- Scrollable menu wrapper with Maximum height -->
<div class="slim-scroll" data-scroll-height="800px">


<!-- Sidebar Profile -->
<span class="profile center">
				<a href="my_account_advanced.html?lang=en"><img src="<?php echo $admintemplate_path;?>/asset/images/avatar-36x36.jpg" alt="Avatar" /></a>
			</span>
<!-- // Sidebar Profile END -->

<!-- Regular Size Menu -->
<ul>
<!-- Full Sidebar Style -->
<li class="active"><a href="<?php echo XC_URL?>/admin" class="glyphicons dashboard"><i></i> Tổng quan</a></li>
<li class="dropdown dd-1">
    <a href="" data-toggle="dropdown" class="glyphicons show_big_thumbnails"><i></i>Ứng dụng <span class="icon-chevron-right"></span></a>
    <ul class="dropdown-menu pull-left">

        <!-- Components Submenu Level 2 -->
        <li class="dropdown submenu">
            <a data-toggle="dropdown" class="dropdown-toggle">Quản lý thư viện</a>
            <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                <li class=""><a href="<?php echo $siteurl;?>/admin/library">Tất cả sách, tài liệu</a></li>
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
                <li class=""><a href="<?php echo $siteurl;?>/admin/student/?action=new">Thêm học sinh mới</a></li>
                <li class=""><a href="<?php echo $siteurl;?>/admin/student/?report=book">Báo cáo</a></li>
            </ul>
        </li>
        <li class="dropdown submenu">
            <a data-toggle="dropdown" class="dropdown-toggle">Quản lý thời khóa biểu</a>
            <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                <li class=""><a href="<?php echo $siteurl;?>/admin/thoikhoabieu/import">Nhập thời khóa biểu mới</a></li>
                <li class=""><a href="<?php echo $siteurl;?>/admin/thoikhoabieu/view">Thời khóa biểu hiện tại</a></li>
                <li class=""><a href="<?php echo $siteurl;?>/admin/thoikhoabieu/export">Xuất TKB hiện tại</a></li>
            </ul>
        </li>

        <li class="dropdown submenu">
            <a data-toggle="dropdown" class="dropdown-toggle">Quản lý điểm</a>
            <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                <li class=""><a href="<?php echo $siteurl;?>/admin/diem/import">Nhập điểm</a></li>
                <li class=""><a href="<?php echo $siteurl;?>/admin/diem/view">Xem điểm</a></li>
                <li class=""><a href="<?php echo $siteurl;?>/admin/diem/export">Xuất điểm</a></li>
            </ul>
        </li>
        <!-- // Components Submenu Level 2 END -->
    </ul>
</li>
<li class="dropdown dd-1">
    <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Thiết lập <span class="icon-chevron-right"></span></a>
    <ul class="dropdown-menu pull-left">
        <li><a href="<?php echo XC_URL;?>/admin/system" class="glyphicons history"><i></i>Hệ thống</a></li>
        <li><a href="<?php echo XC_URL;?>/admin/school" class="glyphicons history"><i></i>Thông tin trường</a></li>
        <li><a href="<?php echo XC_URL;?>/admin/manager" class="glyphicons history"><i></i>Quản trị viên</a></li>
        <li><a href="<?php echo XC_URL;?>/admin/gvcn" class="glyphicons history"><i></i>Giáo viên chủ nhiệm</a></li>
        <li><a href="<?php echo XC_URL;?>/admin" class="glyphicons history"><i></i>Lớp</a></li>
        <li><a href="<?php echo XC_URL;?>/admin" class="glyphicons history"><i></i>Lịch học</a></li>
        <li><a href="<?php echo XC_URL;?>/admin" class="glyphicons history"><i></i>Môn học</a></li>
        <li><a href="<?php echo XC_URL;?>/admin" class="glyphicons history"><i></i>Phòng học</a></li>
    </ul>
</li>
<li class="glyphs">
    <ul>
        <li class="active"><a href="#" class="glyphicons heart"><i></i></a></li>
        <li><a href="#" class="glyphicons home"><i></i></a></li>
        <li><a href="#" class="glyphicons bin"><i></i></a></li>
        <li><a href="#" class="glyphicons user"><i></i></a></li>
    </ul>
</li>
<li class="search open">
    <form autocomplete="off" class="dropdown dd-1">
        <input type="text" value="" placeholder="Nhập từ khóa .." data-toggle="typeahead" />
        <button type="button" class="glyphicons search"><i></i></button>
    </form>
</li>
<!-- // Full Sidebar Style END -->
</ul>
    <div class="clearfix"></div>
    <!-- // Regular Size Menu END -->

    <div class="alert alert-primary">
        <a class="close" data-dismiss="alert">&times;</a>
        <p>Thông báo mới.</p>
    </div>

</div>
<!-- // Scrollable Menu wrapper with Maximum Height END -->