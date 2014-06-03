<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/11/13
 * Time: 3:12 PM
 * To change this template use File | Settings | File Templates.
 */
include_once 'header.php';
?>
    <!-- Bootstrap Image Gallery -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/bootstrap-image-gallery.min.css" rel="stylesheet" />


    <!-- FireBug Lite -->
    <!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
    </head>
<body class="">

    <!-- Main Container Fluid -->
<div class="container-fluid fluid menu-left">

    <!-- Sidebar menu & content wrapper -->
<div id="wrapper">

<!-- Sidebar Menu -->
<div id="menu" class="hidden-phone hidden-print">


    <!-- Full Sidebar Style -->
    <?php
    include_once 'sidebar.php';
    ?>
    <!-- // Full Sidebar Style END -->



</div>
<!-- // Sidebar Menu END -->

<!-- Content -->
<div id="content">

<!-- Top navbar -->
<?php
include_once 'mainnav.php';
?>
<!-- Top navbar END -->

<?php
include_once 'breadcrumb.php';
?>

<h2>Quản lý điểm <span>nhập điểm</span></h2>
<div class="innerLR">

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">

<!-- Widget heading -->
<div class="widget-head">
    <h4 class="heading glyphicons list"><i></i> Nhập điểm theo file</h4>
</div>
<!-- // Widget heading END -->

<div class="widget-body">
    <p>Chức năng nhập điểm bằng file excel cho phép thầy/cô nhập điểm mà không cần qua xử lý file, điều này rất phù hợp với việc nhà trường đang sử dụng hệ thống quản lý điểm bằng EXCEL, tuy nhiên, VES khuyến cáo thầy/cô hoặc cán bộ quản lý nên sử dụng phần mềm quản lý điểm của Xiao (hoàn toàn miễn phí) với những tính năng vượt trội (<a href="http://xiao.vn">chi tiết</a>).</p>
</div>
</div>
<div class="row-fluid">
    <div class="span6">
        <form action="<?php echo XC_URL?>/admin/process/?action=importdiem" method="POST" enctype="multipart/form-data" name="frmnhapdiem">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Thiết lập nội dung</h4>
                </div>
                <div class="widget-body">
                   <div class="row-fluid">
                        <div class="span6">
                            <h5>Môn nhập điểm</h5>
                            <div class="row-fluid">
                                <?php $listsj = school::getInstance()->dsmonhoc();?>
                                <select name="isubject" style="width: 70%;" id="select2_1">
                                    <optgroup label="Chọn môn">
                                        <?php foreach($listsj as $subj)
                                        {
                                            ?>
                                            <option value="<?php echo $subj->mamon;?>"><?php echo $subj->tenmon?></option>
                                            <?php
                                        }?>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="separator bottom"></div>
                            <h5>Điểm cho học kỳ</h5>
                            <div class="row-fluid">
                                <select name="ihk" style="width: 60%;" id="select2_2">
                                    <optgroup label="Chọn học kỳ">
                                        <option value="1">Học kỳ I</option>
                                        <option value="2">Học kỳ II</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="separator bottom"></div>
                            <h5>Chọn file nhập điểm</h5>
                            <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Chọn file</span><span class="fileupload-exists">Chọn file khác</span><input type="file" name="upfile" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Xóa</a>
                                </div>
                            </div>
                            <div class="separator bottom"></div>
                            <h5>Nhận thông báo khi có thay đổi</h5>
                            <div class="toggle-button" data-toggleButton-width="90" data-toggleButton-style-enabled="success" data-toggleButton-height="30">
                                <input type="checkbox" name="checknoti" checked="checked" />
                            </div>
                            <div class="separator bottom"></div>
                            <input type="submit" class="btn btn-primary" value="Nhập điểm">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="span6">
        <div class="widget widget-heading-simple widget-body-white">
            <div class="widget-head">
                <h4 class="heading">Hướng dẫn nhập điểm</h4>
            </div>
            <div class="widget-body">
                <p>File dữ liệu điểm là file excel có phần mở rộng là .xls. File bao gồm 14 cột đã loại bỏ tiêu đề (chỉ còn lại dữ liệu) và bắt buộc cột Mã học sinh</p>
            </div>
        </div>
    </div>
</div>

<!-- // Widget END -->
<!-- Widget -->

</div>
<!-- // Content END -->

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<script src="<?php echo $admintemplate_path;?>/asset/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/TableTools.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/ColVis.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/DT_bootstrap.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/tables.js"></script>
<?php
include_once 'footerbook.php';
?>