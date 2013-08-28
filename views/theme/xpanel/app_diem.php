<?php
/**
 * Project: xvn.
 * File: blog_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css"  rel="stylesheet" />
    </head>
<body>

    <!-- Main Container Fluid -->
<div class="container-fluid">

    <!-- Content -->
    <div id="content">

        <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
        <?php require_once "nav.php";?>
        <!-- Top navbar END -->
        <div class="container-960 innerT">

        <h3 class="glyphicons shopping_cart"><i></i>Application Store</h3>
        <div class="separator bottom"></div>

        <div class="carousel-1 carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <!-- Item -->
                <div class="item active">
                    <div class="row-fluid">
                        <div class="span5 relativeWrap">
                            <div class="carousel-caption center">
                                <h2>Gói ứng dụng luyện thi</h2>
                                <p>Giảm 30% cho gói ứng dụng luyện thi đại học, cao đẳng với hơn 3000 câu hỏi trắc nghiệm và hơn 1000 dạng bài tập các môn Toán, Lý, Hóa, Sinh, Tiếng Anh</p>
                                <p class="strong separator">Mã khuyến mãi: XEM-AVP0821</p>
                                <button type="button" class="btn btn-large btn-block btn-inverse"><i class="icon-shopping-cart"></i> Đăng ký ngay!</button>
                            </div>
                        </div>
                        <div class="span7">
                            <img src="<?php echo $template_path;?>images/12.jpg" tppabs="http://demo.mosaicpro.biz/quickadmin/common/theme/images/gallery/12.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-- // Item END -->
                <!-- Item -->
                <div class="item">
                    <div class="row-fluid">
                        <div class="span5 relativeWrap">
                            <div class="carousel-caption center">
                                <h2>Gói ứng dụng luyện thi</h2>
                                <p>Giảm 30% cho gói ứng dụng luyện thi đại học, cao đẳng với hơn 3000 câu hỏi trắc nghiệm và hơn 1000 dạng bài tập các môn Toán, Lý, Hóa, Sinh, Tiếng Anh</p>
                                <p class="strong separator">Mã khuyến mãi: XEM-AVP0821</p>
                                <button type="button" class="btn btn-large btn-block btn-inverse"><i class="icon-shopping-cart"></i> Đăng ký ngay!</button>
                            </div>
                        </div>
                        <div class="span7">
                            <img src="<?php echo $template_path;?>images/10.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-- // Item END -->
            </div>
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="widget widget-body-white" data-toggle="collapse-widget">
                    <div class="widget-head">
                        <h4 class="heading glyphicons settings"><i></i>Tùy chọn nâng cao</h4>
                    </div>
                    <div class="widget-body">
                        <div class="separator top">
                            <div class="pull-left">
                                <div class="toggle-button" data-toggleButton-style-enabled="primary" data-toggleButton-height="30" data-toggleButton-width="90"><input id="ckbxemnangcao" type="checkbox" /></div>  <b>CHẾ ĐỘ XEM NÂNG CAO </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="toggle-button" data-toggleButton-style-enabled="primary" data-toggleButton-height="30" data-toggleButton-width="90"><input type="checkbox" /></div>  <b>TỰ ĐỘNG THÔNG BÁO ĐIỂM</b>
                            </div>
                            <div class="pull-right">
                                <input type="submit" name="btsubmit" onclick="configcheck();" class="btn btn-primary" value="Cập nhật">
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div id="listmon" style="display: none;" class="filter-bar">
                                <form>
                                    <div class="widget-body uniformjs">
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" />
                                            Toán
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Hóa
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Sinh
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Tin
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Văn
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Sử
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Địa
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            Tiếng Anh
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                            GDCD
                                        </label>

                                    </div>

                                    <div class="clearfix"></div>
                                    <!-- // Filter END -->

                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-body">
                    <table class="table table-bordered table-vertical-center table-pricing table-app">

                        <!-- Table heading -->
                        <thead>
                        <tr>
                            <th class="center">Tiết</th>
                            <th class="center">Thứ 2</th>
                            <th class="center">Thứ 3</th>
                            <th class="center">Thứ 4</th>
                            <th class="center">Thứ 5</th>
                            <th class="center">Thứ 6</th>
                            <th class="center">Thứ 7</th>
                            <th class="center">Chủ nhật</th>
                        </tr>
                        </thead>
                        <!-- // Table heading END -->

                        <!-- Table body -->
                        <tbody>

                        <!-- Table pricing row -->
                        <tr class="pricing">
                            <td class="center">
                                <span>1</span>
                            </td>
                            <td class="center">
                                <span>Toán</span>
                            </td>
                            <td class="center">
                                <span>Lý</span>
                            </td>
                            <td class="center">
                                <span>Hóa</span>
                            </td>
                            <td class="center">
                                <span>Sinh</span>
                            </td>
                            <td class="center">
                                <span>Văn</span>
                            </td>
                            <td class="center">
                                <span>Tiếng Anh</span>
                            </td>
                            <td class="center">
                                <span>CD</span>
                            </td>
                        </tr>
                        <!-- // Table pricing row END -->

                        <!-- Table row -->
                        <tr>
                            <td class="center">
                                <span>1</span>
                            </td>
                            <td class="center">
                                <span>Toán</span>
                            </td>
                            <td class="center">
                                <span>Lý</span>
                            </td>
                            <td class="center">
                                <span>Hóa</span>
                            </td>
                            <td class="center">
                                <span>Sinh</span>
                            </td>
                            <td class="center">
                                <span>Văn</span>
                            </td>
                            <td class="center">
                                <span>Tiếng Anh</span>
                            </td>
                            <td class="center">
                                <span>CD</span>
                            </td>

                        </tr>
                        <tr class="pricing">
                            <td class="center">
                                <span>1</span>
                            </td>
                            <td class="center">
                                <span>Toán</span>
                            </td>
                            <td class="center">
                                <span>Lý</span>
                            </td>
                            <td class="center">
                                <span>Hóa</span>
                            </td>
                            <td class="center">
                                <span>Sinh</span>
                            </td>
                            <td class="center">
                                <span>Văn</span>
                            </td>
                            <td class="center">
                                <span>Tiếng Anh</span>
                            </td>
                            <td class="center">
                                <span>CD</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="center">
                                <span>1</span>
                            </td>
                            <td class="center">
                                <span>Toán</span>
                            </td>
                            <td class="center">
                                <span>Lý</span>
                            </td>
                            <td class="center">
                                <span>Hóa</span>
                            </td>
                            <td class="center">
                                <span>Sinh</span>
                            </td>
                            <td class="center">
                                <span>Văn</span>
                            </td>
                            <td class="center">
                                <span>Tiếng Anh</span>
                            </td>
                            <td class="center">
                                <span>CD</span>
                            </td>

                        </tr>
                        <tr class="pricing">
                            <td class="center">
                                <span>1</span>
                            </td>
                            <td class="center">
                                <span>Toán</span>
                            </td>
                            <td class="center">
                                <span>Lý</span>
                            </td>
                            <td class="center">
                                <span>Hóa</span>
                            </td>
                            <td class="center">
                                <span>Sinh</span>
                            </td>
                            <td class="center">
                                <span>Văn</span>
                            </td>
                            <td class="center">
                                <span>Tiếng Anh</span>
                            </td>
                            <td class="center">
                                <span>CD</span>
                            </td>
                        </tr>
                        <!-- // Table row END -->

                        </tbody>
                        <!-- // Table body END -->

                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script>
        $('#ckbxemnangcao').change(function() {
            $("#listmon").fadeIn(100);
        });
        function configcheck()
        {
            $("#listmon").fadeIn(100);
        }
    </script>
    <!-- // Content END -->
<?php require_once "footer.php"?>