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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>js/jquery.Jcrop.js"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>js/cropsetup.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $template_path;?>css/jquery.Jcrop.css">
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

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> <span>Thông tin cá nhân.</span></h3>
<div class="separator bottom"></div>

<!-- // Row END -->


        <!-- Row -->
        <div class="row-fluid">

            <!-- Thumbnails -->
            <ul class="thumbnails">

                <!-- Column -->
                <li class="span4">

                    <!-- Thumbnail -->
                    <div class="thumbnail widget-thumbnail">
                        <img src="<?php echo XC_URL;?>/avatar/<?php echo member::getInstance()->account($_SESSION['xID'],"avatar")?>"  alt="100%x200 Image Holder" />

                    </div>
                    <!-- // Thumbnail END -->

                </li>
                <!-- // Column END -->

                <li class="span8">
                    <div class="span12">

                        <div class="widget widget-heading-simple widget-body-white">
                            <div class="widget-body">
                                <div class="innerL">
                                <form action="" enctype="multipart/form-data" method="POST" name="upload">
                                    <div class="separator bottom"></div>
                                    <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Chọn ảnh</span><span class="fileupload-exists">Đổi ảnh khác</span><input type="file" name="afile" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                        </div>
                                    </div>
                                    <button type="submit" name="upload" class="btn btn-primary">Tải lên</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
if(isset($_POST ['upload']))
{
?>


                    <div class="span12">

                        <div class="widget widget-heading-simple widget-body-white">
                            <div class="widget-body">
                                <div class="innerL">
                                    <form id="cropimg" name="cropimg" method="post" action="">
                                        <div class="jc-demo-box">
                                            <img src="<?php echo XC_URL?>/uploads/<?php echo $avatarfile;?>" id="target" alt="[Jcrop Example]" />

                                            <div id="preview-pane">
                                                <div class="preview-container">
                                                    <img src="<?php echo XC_URL?>/uploads/<?php echo $avatarfile;?>" class="jcrop-preview" alt="Preview" />
                                                </div>
                                            </div><!-- @end #preview-pane -->

                                            <div id="form-container">
                                                    <input type="hidden" id="afile" name="afile" value="<?php echo $avatarfile;?>">
                                                    <input type="hidden" id="x" name="x">
                                                    <input type="hidden" id="y" name="y">
                                                    <input type="hidden" id="w" name="w">
                                                    <input type="hidden" id="h" name="h">

                                            </div><!-- @end #form-container -->
                                        </div><!-- @end .jc-demo-box -->
                                        <input type="submit" class="btn btn-primary" id="submit" value="Lưu lại">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
}?>
                </li>

            </ul>
            <!-- // Thumbnails END -->

        </div>

</div>
</div>
<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>
<!-- // Content END -->
<?php
require_once "footer.php";
?>