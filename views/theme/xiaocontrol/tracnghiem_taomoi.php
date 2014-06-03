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
    <script type="text/javascript" src="<?php echo $admintemplate_path;?>/asset/js/jquery.watermark.js"></script>
    <script type="text/javascript" src="../nicedit/nicEdit.js"></script>
    <script type="text/javascript" src="../nicedit/nicedit_wiris/core/display.js"></script>
    <script type="text/javascript">var nicedit_wiris_path = '../nicedit/nicedit_wiris';</script>
    <script type="text/javascript" src="../nicedit/nicedit_wiris/core/core.js"></script>
    <script type="text/javascript" src="../nicedit/nicedit_wiris/nicedit_wiris.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance('ANS1');
            new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance('ANS2');
            new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance('ANS3');
            new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance('ANS4');
            new nicEditor({fullPanel : true,maxHeight : 100}).panelInstance('QSN');
        });
    </script>


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
<script type="text/javascript">
    $(document).ready(function() {
        $("#faq_search_input").watermark("Nhập Từ Khóa Tìm Kiếm Hoặc Mã Tài Liệu");	// Watermart cho khung nhập
        $("#faq_search_input").keyup(function()
        {
            var faq_search_input = $(this).val();
            var dataString = 'keyword='+ faq_search_input;
            if(faq_search_input.length>1)
            {
                $.ajax({
                    type: "GET",
                    url: "<?php echo XC_URL;?>/admin/method_ajaxsearch",
                    data: dataString,
                    beforeSend:  function() {
                        $('input#faq_search_input').addClass('loading');
                    },
                    success: function(server_response)
                    {
                        $('#searchresultdata').html(server_response).show();
                        $('span#faq_category_title').html(faq_search_input);

                        if ($('input#faq_search_input').hasClass("loading")) {
                            $("input#faq_search_input").removeClass("loading");
                        }
                    }
                });
            }return false;		// Không chuyển trang
        });
    });
</script>
    <!-- Heading -->
    <div class="heading-buttons">
        <h3>Thêm câu hỏi <span>Ngân hàng đề</span></h3>
        <div class="buttons pull-right">
            <a href="#" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> Xem ngân hàng đề</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator bottom"></div>
    <!-- // Heading END -->

    <div class="innerLR">
<form action="<?php echo XC_URL?>/admin/addquestion" method="POST" name="frmaddquestion">
        <!-- Widget -->
        <div class="widget widget-tabs">

            <!-- Widget heading -->
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Câu hỏi</a></li>
                    <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Đáp án</a></li>
                    <li><a href="#productPriceTab" data-toggle="tab" class="glyphicons table"><i></i>Điểm và quy cách tính điểm</a></li>
                    <li><a href="#productSeoTab" data-toggle="tab" class="glyphicons podium"><i></i>Gợi ý bài giảng</a></li>
                </ul>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">

                        <!-- Row -->
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Nội dung câu hỏi</strong>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span9">
                                <label for="textDescription"></label>
                                <textarea name="question" style="width: 600px; height: 200px;" id="QSN"></textarea>
                                <div class="separator"></div>
                            </div>
                            <!-- // Column END -->
                        </div>
                        <hr class="separator bottom" />
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Môn</strong>
                                <p class="muted">Môn và lĩnh vực của câu hỏi.</p>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span9">
                                <label for="inputTitle">Chọn môn</label>

                                <?php $listsj = school::getInstance()->dsmonhoc();?>
                                <select name="isubject" style="width: 30%;" id="select2_1">
                                    <optgroup label="Chọn môn">
                                        <?php foreach($listsj as $subj)
                                        {
                                            ?>
                                            <option value="<?php echo $subj->mamon;?>"><?php echo $subj->tenmon?></option>
                                        <?php
                                        }?>
                                    </optgroup>
                                </select>
                                <div class="separator"></div>
                            </div>
                            <!-- // Column END -->

                        </div>
                        <hr class="separator bottom" />
                        <!-- // Row END -->

                    </div>
                    <!-- // Description END -->


                    <!-- Attributes -->
                    <div class="tab-pane" id="productAttributesTab">
                        <!-- Row -->
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Các phương án trả lời</strong>
                                <p class="muted">Tùy chỉnh duy nhất một kết quả đúng cho 2 loại câu hỏi (1/4 và yes/no).</p>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span9">
                                <label for="inputTitle">Các phương án</label>
                                <textarea name="answer1" style="width: 600px; height: 100px;" id="ANS1"></textarea><br>
                                <textarea name="answer2" style="width: 600px; height: 100px;" id="ANS2"></textarea><br>
                                <textarea name="answer3" style="width: 600px; height: 100px;" id="ANS3"></textarea><br>
                                <textarea name="answer4" style="width: 600px; height: 100px;" id="ANS4"></textarea><br>

                                <div class="separator"></div>
                            </div>
                            <!-- // Column END -->

                        </div>
                        <!-- // Row END -->
                        <!-- Row -->
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Câu trả lời đúng</strong>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span9">
                                <input type="radio" name="correctans" id="ans1" value="ans1"> Câu 1 &nbsp;&nbsp;
                                <input type="radio" name="correctans" id="ans2" value="ans2"> Câu 2 &nbsp;&nbsp;
                                <input type="radio" name="correctans" id="ans3" value="ans3"> Câu 3 &nbsp;&nbsp;
                                <input type="radio" name="correctans" id="ans4" value="ans4"> Câu 4 &nbsp;&nbsp;
                            </div>
                            <!-- // Column END -->
                        </div>
                    </div>
                    <!-- // Attributes END -->

                    <!-- Price -->
                    <div class="tab-pane" id="productPriceTab">
                        <!-- Row -->
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Tùy chỉnh điểm</strong>
                                <p class="muted">Tùy chỉnh điểm số cho câu hỏi này.</p>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span5">
                                <label for="inputTitle">Điểm cho câu trả lời đúng</label>
                                <input type="text" id="inputTitle" name="score" class="span4" value="" placeholder="Điểm số ..." /><br>
                                <div class="separator"></div>
                            </div>
                            <div class="span3">
                                <div class="separator"></div>


                            </div>
                            <!-- // Column END -->

                        </div>
                        <!-- // Row END -->
                    </div>
                    <!-- // Price END -->

                    <!-- SEO -->
                    <div class="tab-pane" id="productSeoTab">
                        <!-- Row -->
                        <div class="row-fluid">

                            <!-- Column -->
                            <div class="span3">
                                <strong>Bài bài giảng cho câu hỏi này</strong>
                                <p class="muted">Gợi ý bài giảng, tài liệu hoặc định nghĩa liên quan cho câu hỏi này.</p>
                            </div>
                            <!-- // Column END -->

                            <!-- Column -->
                            <div class="span9">
                                <label for="inputTitle">Tìm kiếm bài giảng với từ khóa: <span id="faq_category_title">Keyword </span></label>
                                <input type="text" id="faq_search_input" class="span9" value="" placeholder="Từ khóa..." /><br>
                                <div class="separator"></div>
                                <div class="span12">
                                    <div id="searchresultdata" class="faq-articles"> </div>
                                </div>
                            </div>

                            <!-- // Column END -->

                        </div>
                    </div>
                    <!-- // SEO END -->

                </div>
            </div>
        </div>
        <!-- // Widget END -->

        <!-- Bottom buttons -->
        <div class="heading-buttons">
            <div class="buttons pull-right" style="margin: 0;">
                <a href="" class="btn btn-default btn-icon glyphicons share"><i></i> Preview</a>
                <a href="" class="btn btn-primary btn-icon glyphicons ok_2"><i></i> Save</a>
                <button class="btn btn-primary btn-icon glyphicons ok_2" type="submit">Thêm</button>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- // Bottom buttons END -->

    </div>


</form>    <!-- // Widget END -->
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