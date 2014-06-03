<?php
/**
 * Project: xvn.
 * File: app_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:53 AM - 7/31/13
 * Website: www.xiao.vn
 */
include "header.php";
//$listtests = application::getInstance()->get_tests();
?>

    <!-- Bootstrap -->
    <link href="<?php echo $template_path;?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $template_path;?>css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Glyphicons Font Icons -->
    <link href="<?php echo $template_path;?>css/glyphicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="<?php echo $template_path;?>css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="<?php echo $template_path;?>css/uniform.default.css" rel="stylesheet" />

    <!-- Bootstrap Extended -->
    <link href="<?php echo $template_path;?>css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQueryUI -->
    <link href="<?php echo $template_path;?>css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />

    <!-- MiniColors ColorPicker Plugin -->
    <link href="<?php echo $template_path;?>css/jquery.miniColors.css" rel="stylesheet" />

    <!-- Google Code Prettify Plugin -->
    <link href="<?php echo $template_path;?>css/prettify.css" rel="stylesheet" />

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- LESS.js Library -->
    <script src="<?php echo $template_path;?>js/less.min.js"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $template_path;?>js/jquery.timer.js"></script>
</head>
<body>
<!-- Main Container Fluid -->
<div class="container-fluid">

<!-- Content -->
<div id="content">

<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
<!-- Top navbar END -->
<div class="container-960 innerT">

<h3 class="glyphicons shopping_cart"><i></i>Thi Trắc Nghiệm Trực Tuyến</h3>
<div class="separator bottom"></div>


<div class="row-fluid">

    <div class="span12">
        <div class="innerAll shop-client-products cart invoice">

            <h3 class="separator bottom">Chi tiết bài thi</h3>
            <table class="table table-invoice">
                <tbody>
                <tr>
                    <td style="width: 58%;">
                        <div class="media">
                            <img class="media-object pull-left thumb" src="tf-avatar.jpg" alt="Logo" />
                            <div class="media-body hidden-print">
                                <div class="alert alert-primary">
                                    Tên bài thi:  <strong>Vật lý 10 - Chương I</strong><br/>
                                    Tổng hợp kiến thức ôn tập vật lý 10 chương I
                                </div>
                                <div class="separator bottom"></div>
                            </div>
                        </div>
                    </td>
                    <td class="right">
                        <div class="innerL">
                            <h4 class="separator bottom">#2231232 / 13 tháng 02 năm 2014</h4>
                            <button type="button" data-toggle="print" class="btn btn-default btn-icon glyphicons print hidden-print"><i></i> In bài thi</button>
                            <button type="button" data-toggle="button-loading pdf" data-target="#pdfTarget" class="btn btn-primary btn-icon glyphicons download_alt hidden-print"><i></i> Lưu PDF</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="separator bottom hidden-print"></div>
            <?php
            $listquestion = application::getInstance()->get_question_list("9");
            ?>
            <div class="well">
                <?php
                $count = 1;
                foreach($listquestion as $qs)
                {
                    $question = application::getInstance()->get_question($qs->questionid);
                    $answers = application::getInstance()->get_answer($qs->questionid);
                    $listans = "";
                    $is2 = 0;
                    foreach($answers as $ass)
                    {
                            $listans[$is2]['answerid'] = $ass->answerid;
                            $listans[$is2]['answer_text'] = $ass->answer_text;
                        $is2++;
                    }
                ?>
                    <div id="qs<?php echo $qs->questionid;?>" class="questions multichoice clearfix">
                        <div class="info">
                            <span class="questionno">Câu <?php echo $count;?>/50 (Điểm 1)</span>
                        </div>
                        <div class="content">
                            <div class="qtext">
                                <?php echo $question->question_text;?>
                            </div>
                            <div class="ablock">
                                <table class="answer">
                                    <tbody>
                                        <tr class="r0">
                                            <td class="c0 control options">
                                                <input id="resp<?php echo $listans[0]['answerid'];?>" name="resp<?php echo $qs->questionid;?>" type="radio" value="<?php echo $listans[0]['answerid'];?>">
                                            </td>
                                            <td class="c1 optionstext">
                                                <label for="resp<?php echo $qs->questionid;?>">
                                                    <span class="anun">a<span class="anumsep">.</span></span> <?php echo $listans[0]['answer_text'];?>                      </label>
                                            </td>
                                        </tr>
                                        <tr class="r1">
                                            <td class="c0 control options">
                                                <input id="resp<?php echo $listans[1]['answerid'];?>" name="resp<?php echo $qs->questionid;?>" type="radio" value="<?php echo $listans[1]['answerid'];?>">
                                            </td>
                                            <td class="c1 optionstext">
                                                <label for="resp<?php echo $qs->questionid;?>">
                                                    <span class="anun">a<span class="anumsep">.</span></span> <?php echo $listans[1]['answer_text'];?>                      </label>
                                            </td>
                                        </tr>

                                        <tr class="r0">
                                            <td class="c0 control options">
                                                <input id="resp<?php echo $listans[2]['answerid'];?>" name="resp<?php echo $qs->questionid;?>" type="radio" value="<?php echo $listans[2]['answerid'];?>">
                                            </td>
                                            <td class="c1 optionstext">
                                                <label for="resp<?php echo $qs->questionid;?>">
                                                    <span class="anun">a<span class="anumsep">.</span></span> <?php echo $listans[2]['answer_text'];?>                      </label>
                                            </td>
                                        </tr>
                                        <tr class="r1">
                                            <td class="c0 control options">
                                                <input id="resp<?php echo $listans[3]['answerid'];?>" name="resp<?php echo $qs->questionid;?>" type="radio" value="<?php echo $listans[3]['answerid'];?>">
                                            </td>
                                            <td class="c1 optionstext">
                                                <label for="resp<?php echo $qs->questionid;?>">
                                                    <span class="anun">a<span class="anumsep">.</span></span> <?php echo $listans[3]['answer_text'];?>                      </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="grading">
                            </div>

                        </div>

                    </div>
                    <div class="clear"></div>
                    <?php
                    $count++;
                }
                ?>


            </div>
            <div class="span2 timeout">
                <a href="" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
                    <span class="txt">Thời gian làm bài</span>
                    <div><h1 id="stopwatch">00:00:00</h1></div>
                    <div class="clearfix"></div>
                </a>


            </div>
            <!-- Row -->
            <div class="row-fluid">

                <!-- Column -->
                <div class="span5 hidden-print">

                </div>
                <!-- Column END -->

                <!-- Column -->
                <div class="span5 offset3">
                    <table class="table table-borderless table-condensed cart_total">
                        <tbody>

                        <tr class="hidden-print">
                            <td>
                                <button type="submit" class="btn btn-block btn-primary btn-icon glyphicons right_arrow"><i></i>Hủy
                            </td>
                            <td>
                                <button type="submit" class="btn btn-block btn-primary btn-icon glyphicons right_arrow"><i></i>Nộp bài
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- // Column END -->

            </div>
            <!-- // Row END -->

        </div>

    </div>

    </div>
</div>
</div>
    <script type='text/javascript' src="<?php echo $template_path;?>js/timer-demo.js"></script>
</div>
<!-- // Content END -->
<?php require_once "footer.php"?>