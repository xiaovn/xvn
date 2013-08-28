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
    <li class="active"><a href="<?php echo XC_URL?>/admin" class="glyphicons dashboard"><i></i> Dashboard</a></li>
    <li class="dropdown dd-1">
        <a href="" data-toggle="dropdown" class="glyphicons show_big_thumbnails"><i></i>Application <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <!-- Components Submenu Level 2 -->
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Library Manager</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library">List all book</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?action=new">Add new book</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?report=book">Book Reporting</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/library/?report=storage">Storage Reporting</a></li>
                </ul>
            </li>
            <!-- // Components Submenu Level 2 END -->
            <!-- Components Submenu Level 2 -->
            <li class="dropdown submenu">
                <a data-toggle="dropdown" class="dropdown-toggle">Student Manager</a>
                <ul class="dropdown-menu submenu-show submenu-hide pull-right">
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student">Student list</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?action=new">Add new student</a></li>
                    <li class=""><a href="<?php echo $siteurl;?>/admin/student/?report=book">Student Reporting</a></li>
                </ul>
            </li>
            <!-- // Components Submenu Level 2 END -->
        </ul>
    </li>
    <li class="dropdown dd-1">
        <a href="" data-toggle="dropdown" class="glyphicons settings"><i></i>Configuration <span class="caret"></span></a>
        <ul class="dropdown-menu pull-left">

            <li><a href="../admin/system" class="glyphicons history"><i></i>System</a></li>
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
            <input type="text" value="" placeholder="Type for suggestions .." data-toggle="typeahead" />
            <button type="button" class="glyphicons search"><i></i></button>
        </form>
    </li>
</ul>