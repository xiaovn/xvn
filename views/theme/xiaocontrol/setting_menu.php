<?php
/**
 * Project: xsc.
 * File: setting_menu.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:50 PM - 8/21/13
 * Website: www.xiao.vn
 */
?>
<ul class="topnav pull-right hidden-phone hidden-tablet hidden-desktop-1">

    <!-- Themer -->
    <li><a href="#themer" data-toggle="collapse" class="glyphicons eyedropper single-icon"><i></i></a></li>
    <!-- // Themer END -->

    <!-- Language menu -->
    <li class="hidden-tablet hidden-phone hidden-desktop-1 dropdown dd-1 dd-flags" id="lang_nav">
        <a href="#" data-toggle="dropdown"><img src="<?php echo $admintemplate_path;?>/asset/images/en.png" alt="en" /></a>
        <ul class="dropdown-menu pull-left">
            <li class="active"><a href="?lang=en" title="English"><img src="<?php echo $admintemplate_path;?>/asset/images/en.png" alt="English"> English</a></li>
            <li><a href="/?lang=vn" title="Tiếng Việt"><img src="<?php echo $admintemplate_path;?>/asset/images/vn.png" alt="Tiếng Việt"> Tiếng Việt</a></li>
            <li><a href="/?lang=ro" title="Romanian"><img src="<?php echo $admintemplate_path;?>/asset/images/ro.png" alt="Romanian"> Romanian</a></li>
            <li><a href="/?lang=it" title="Italian"><img src="<?php echo $admintemplate_path;?>/asset/images/it.png" alt="Italian"> Italian</a></li>
            <li><a href="/?lang=fr" title="French"><img src="<?php echo $admintemplate_path;?>/asset/images/fr.png" alt="French"> French</a></li>
            <li><a href="/?lang=pl" title="Polish"><img src="<?php echo $admintemplate_path;?>/asset/images/pl.png" alt="Polish"> Polish</a></li>
        </ul>
    </li>
    <!-- // Language menu END -->

    <!-- Profile / Logout menu -->
    <li class="account dropdown dd-1">
        <a data-toggle="dropdown" href="<?php echo XC_URL?>/admin/myaccount" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1"><?php echo $_SESSION['xUser']?></span><i></i></a>
        <ul class="dropdown-menu pull-right">
            <li><a href="#" class="glyphicons cogwheel">Settings<i></i></a></li>
            <li><a href="#" class="glyphicons camera">My Photos<i></i></a></li>
            <li class="profile">
							<span>
								<span class="heading">Profile <a href="<?php echo XC_URL?>/admin/myaccount/?view=edit" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="<?php echo XC_URL."/member/".$_SESSION['xUser']?>"><?php echo $_SESSION['xUser'];?></a>
                                    <br><?php echo $_SESSION['xEmail'];?>
								</span>
								<span class="clearfix"></span>
							</span>
            </li>
            <li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="<?php echo XC_URL?>/admin/logout">Sign Out</a>
							</span>
            </li>
        </ul>
    </li>
    <!-- // Profile / Logout menu END -->

</ul>