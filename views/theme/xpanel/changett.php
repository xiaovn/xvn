<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 9/13/13
 * Time: 10:56 AM
 * To change this template use File | Settings | File Templates.
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet"
          xmlns="http://www.w3.org/1999/html"/>
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
                        <div id="Register" style="width:100%;">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="widget widget-body-white" data-toggle="collapse-widget">
                                        <div class="widget-head">
                                            <h4 class="heading glyphicons user"><i></i>Đổi thông tin cá nhân</h4>
                                        </div>
                                        <table>

                                            <div class="separator top">
                                                <div class="pull-left">
                                                    <div class="box themed_box">
                                                        <tr>
                                                            <td class="DataTD" width="130px">Tên đăng nhập</td>
                                                            <td><input name="UserName" type="text" value="<?php echo $_SESSION['xUser']?>" maxlength="200" readonly="readonly" id="UserName" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Tên khác</td>
                                                            <td><input name="Othername" type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"othername");?>" maxlength="200" id="Othername" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Thư điện tử</td>
                                                            <td><input name="Email" type="text" value="ngocviet1208@gmail.com" maxlength="250" id="Email" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Di động</td>
                                                            <td><input name="Mobile" type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong");?>" maxlength="14" id="Mobile" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Điện thoại bàn</td>
                                                            <td><input name="Telephone" type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"dienthoai");?>" maxlength="14" id="Telephone" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">CMND/Hộ chiếu</td>
                                                            <td><input name="IdPassport" type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"cmnd");?>" maxlength="250" id="IdPassport" disabled="disabled" style="width:250px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Ngày sinh</td>
                                                            <td>
                                                                <input name="FirstName" type="text" value=" <?php echo member::getInstance()->get_member_info($_SESSION['xID'],"birthday");?>" maxlength="200" id="sex" disabled="disabled" style="width:250px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Giới tính</td>
                                                            <td>
                                                                <input name="FirstName" type="text" value="<?php echo member::getInstance()->sex(member::getInstance()->get_member_info($_SESSION['xID'],"sex"));?>" maxlength="200" id="FirstName" disabled="disabled" style="width:250px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Tình trạng hôn nhân</td>
                                                            <td><select name="CityId" id="CityId" style="width:220px;">
                                                                    <option value=""><?php echo member::getInstance()->honnhan(member::getInstance()->get_member_info($_SESSION['xID'],"honnhan"));?></option>
                                                                    <option value="23">đã kết hôn</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Dân tộc</td>
                                                            <td>
                                                                <input name="FirstName" type="text" value="<?php echo member::getInstance()->dantoc(member::getInstance()->get_member_info($_SESSION['xID'],"dantoc"));?>" maxlength="200" id="FirstName" disabled="disabled" style="width:250px;">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="DataTD">Tôn giáo</td>
                                                            <td><select name="CityId" id="CityId" style="width:220px;">
                                                                    <option value=""><?php echo member::getInstance()->tongiao(member::getInstance()->get_member_info($_SESSION['xID'],"tongiao"));?></option>
                                                                    <option value="23">bà ni</option>
                                                                </select>
                                                        </tr>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    </table>
                                    <p align='center'>
                                    <input type="submit" name="capnhat" onclick="configcheck();" class="btn btn-primary" value="Cập nhật">
                                    </p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $admintemplate_path;?>/asset/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $admintemplate_path;?>/asset/js/TableTools.min.js"></script>
    <script src="<?php echo $admintemplate_path;?>/asset/js/ColVis.min.js"></script>
    <script src="<?php echo $admintemplate_path;?>/asset/js/DT_bootstrap.js"></script>
    <script src="<?php echo $admintemplate_path;?>/asset/js/tables.js"></script>
    <!-- // Content END -->
<?php require_once "footer.php";?>