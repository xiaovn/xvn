<?php
/**
 * Project: xvn.
 * File: member_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:40 PM - 7/30/13
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
    <!-- Top navbar END --><div class="container-960 innerT">

        <h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"firstname");?>&nbsp;<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> <span>Thông tin cá nhân.</span></h3>
        <div class="separator bottom"></div>

        <div class="widget widget-heading-simple widget-body-gray">
            <div class="widget-body"><p class="lead center margin-none">Thành công là một hành trình chứ không phải một điểm đến.</p></div>
        </div>

        <!-- Row -->
        <div class="row-fluid">

            <!-- Thumbnails -->
            <ul class="thumbnails">

                <!-- Column -->
                <li class="span3">

                    <!-- Thumbnail -->
                    <div class="thumbnail widget-thumbnail">
                        <img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($_SESSION['xID'],"avatar");?>"  alt="100%x200 Image Holder" />
                        <div class="caption">
                            <h4><?php echo $_SESSION['xUser']?></h4>
                            <p><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?></p>

                            <!-- Social Icons -->
                            <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"facebook")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"facebook") != ""){echo "primary";}?> facebook"><i></i></a>
                            <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"twitter")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"twitter") != ""){echo "primary";}?> twitter"><i></i></a>
                            <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"yahoo")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"yahoo") != ""){echo "primary";}?> yahoo"><i></i></a>
                            <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"didong") != ""){echo "primary";}?> iphone"><i></i></a>
                            <a href="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"skype")?>" class="glyphicons standard <?php if(member::getInstance()->get_member_info($_SESSION['xID'],"skype") != ""){echo "primary";}?> skype"><i></i></a>
                            <a href="<?php echo member::getInstance()->account($_SESSION['xID'],"email")?>" class="glyphicons standard <?php if(member::getInstance()->account($_SESSION['xID'],"email") != ""){echo "primary";}?> e-mail"><i></i></a>
                            <div class="clearfix"></div>
                            <!-- // Social Icons END -->
                        </div>
                    </div>
                    <!-- // Thumbnail END -->

                </li>
                <!-- // Column END -->
                <div class="separator bottom"></div>
                <i></i>
                <li class="span8">
                    <div class="span12" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-5" data-delegate="#gallery-5">
                        <a class="thumb" href="<?php echo $template_path;?>images/cv.png" data-gallery="gallery"><img src="<?php echo $template_path;?>images/cv.png" alt="photo"></a>
                        <div class="separator bottom"></div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget widget-body-white" data-toggle="collapse-widget">
                                <div class="widget-head">
                                    <h4 class="heading glyphicons user"><i></i>Đổi mật khẩu</h4>

                                </div>
                                <div class="widget-body">
                                    <div class="separator top">
                                        <div class="pull-left">
                                            <div class="box themed_box">
                                                <label class="form-label"> <b>Mật khẩu hiện tại *</b> </label>
                                                <input id="form-passwordo" class="form-field width60" name="mkcu" type="password" value="" maxlength="100">
                                                <label class="explain">Vì lý do an ninh, bạn phải xác minh mật khẩu hiện tại trước khi đặt mật khẩu mới.</label>
                                                <hr>
                                                <label class="form-label"><b> Mật khẩu mới</b> </label>
                                                <input id="form-password" class="form-field width60" name="password" type="password" value="" maxlength="100">
                                                <label class="form-label"> <b>Xác nhận mật khẩu </b></label>
                                                <input id="form-confirmpassword" class="form-field width60" name="password_confirm" type="password" value="" maxlength="100">
                                                <hr>
                                                <input type="submit" name="btsubmit" onclick="configcheck();" class="btn btn-primary" value="Xem điều khoản">
                                                <br>
                                                <br>
                                                <label class="form-label"> </label>
                                                <p class="terms radiocheck ui-buttonset">
                                                    <input class="checkbox ui-helper-hidden-accessible" id="terms" type="checkbox" name="terms">
                                                    <label for="terms" id="lterms" aria-pressed="false" class="ui-button ui-widget ui-state-default ui-button-text-only ui-corner-left ui-corner-right" role="button" aria-disabled="false"><span class="ui-button-text">Tôi đã đọc và đồng ý với Điều khoản sử dụng dịch vụ.</span></label>
                                                </p>
                                                <input type="submit" name="btsubmit" onclick="configcheck();" class="btn btn-primary" value="Xóa">
                                                <input type="submit" name="btsubmit" onclick="configcheck();" class="btn btn-primary" value="Hoàn tất">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- // Content END -->
<?php require_once "footer.php";?>