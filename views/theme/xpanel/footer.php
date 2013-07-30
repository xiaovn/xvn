<?php
/**
 * Project: xvn.
 * File: footer.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:26 PM - 7/30/13
 * Website: www.xiao.vn
 */

?>

<div id="footer" class="hidden-print">

    <div class="container-960 innerTB">
        <div class="row-fluid">
            <div class="span2">
                <h4>Liên kết</h4>
                <ul>
                    <li><a href="http://diemthi.xiao.vn">Trang chủ</a></li>
                    <li><a href="#" >Thông tin</a></li>
                    <li><a href="#">Tài khoản</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="span4">
                <h4>Về chúng tôi</h4>
                <div class="box-generic">
                    Xiao Media Inc. được thành lập với sứ mệnh mang đến sự khác biệt trong Giáo dục và Đào tạo bằng những công nghệ hiện đại và khoa học. Chúng tôi sẵn sàng đem đến cho những chủ nhân tương lai của đất nước những điều kiện tốt nhất để sẵn sàng cho mọi thử thách...
                </div>
            </div>
            <div class="span3">
                <h4>Bài viết mới</h4>
                <ul>
                    <li><a target = "_blank" href="http://vurl.us/tracuudiem">Tra cứu điểm thi ĐH CĐ 2013</a></li>
                    <li><a target = "_blank" href="http://nguyentrai.edu.vn/diendan/thread-1229-tra-cuu-diem-thi-dai-hoc-cao-dang-2013/1">Hướng dẫn tra cứu điểm</a></li>
                    <li><a href="#">Tra cứu tin nhắn SMS</a></li>
                    <li><a href="#">Thủ khoa đại học ...</a></li>
                    <li><a target = "_blank" href="http://nguyentrai.edu.vn/diendan/thread-34-huong-dan-cap-nhat-thong-tin-nguoi-dung/1">Hướng dẫn cập nhật thông ...</a></li>
                </ul>
            </div>
            <div class="span3">
                <h4>Liên hệ</h4>
                <ul class="icons">
                    <li class="glyphicons phone"><i></i>+84.935.765.797</li>
                    <li class="glyphicons envelope"><i></i>support@xiao.vn</li>
                </ul>

                <h4>Social</h4>
                <a target = "_blank" href="https://www.facebook.com/xemapp" class="glyphicons standard primary facebook"><i></i></a>
                <a target = "_blank" href="https://twitter.com/xiaoinc" class="glyphicons standard twitter"><i></i></a>
                <a target = "_blank" href="https://linkedin.com/in/xiaoinc" class="glyphicons standard linked_in"><i></i></a>
                <a target = "_blank" href="https://plus.google.com/u/0/b/111408113961172902178/111408113961172902178" class="glyphicons standard google_plus"><i></i></a>
                <a target = "_blank" href="http://www.youtube.com/user/xiaoinc" class="glyphicons standard vimeo"><i></i></a>
            </div>
        </div>

        <!--  Copyright Line -->
        <div class="copy">
            &copy; 2013 - <a href="http://xiao.vn">Xiao Media Inc.</a>
            <span class="appbrand">Xiao Education Management</span>
        </div>
        <!--  End Copyright Line -->

    </div>

</div>
<!-- // Footer END -->

</div>
<!-- // Main Container Fluid END -->

<!-- Themer -->
<div id="themer" class="collapse">
    <div class="wrapper">
        <span class="close2">&times; close</span>
        <h4>Themer <span>color options</span></h4>
        <ul>
            <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
            <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
            <li>
                <span class="link" id="themer-custom-reset">reset theme</span>
                <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
            </li>
        </ul>
        <div id="themer-getcode" class="hide">
            <hr class="separator" />
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Themer END -->

<!-- JQuery -->
<script src="../<?php echo $template_path;?>js/jquery-1.10.1.min.js" ></script>
<script src="../<?php echo $template_path;?>js/jquery-migrate-1.2.1.min.js" ></script>

<!-- Code Beautify -->
<script src="../<?php echo $template_path;?>js/beautify.js" ></script>
<script src="../<?php echo $template_path;?>js/beautify-html.js" ></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '/';
</script>

<!-- JQueryUI -->
<script src="../<?php echo $template_path;?>js/jquery-ui-1.9.2.custom.min.js" ></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="../<?php echo $template_path;?>js/jquery.ui.touch-punch.min.js"></script>


<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="../<?php echo $template_path;?>js/jquery.themepunch.revolution.min.js" ></script>

<!-- Front Index with Revolution Slider Demo Script -->
<script src="../<?php echo $template_path;?>js/front_index_revolutionslider.js-1373689170.js"></script>

<!-- Modernizr -->
<script src="../<?php echo $template_path;?>js/modernizr.js" ></script>

<!-- Bootstrap -->
<script src="../<?php echo $template_path;?>js/bootstrap.min.js" ></script>

<!-- SlimScroll Plugin -->
<script src="../<?php echo $template_path;?>js/jquery.slimscroll.min.js" ></script>

<!-- Common Demo Script -->
<script src="../<?php echo $template_path;?>js/common.js" ></script>

<!-- Holder Plugin -->
<script src="../<?php echo $template_path;?>js/holder.js" ></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="../<?php echo $template_path;?>js/jquery.uniform.min.js" ></script>

<!-- Bootstrap Extended -->
<script src="../<?php echo $template_path;?>js/bootstrap-select.js" ></script>
<script src="../<?php echo $template_path;?>js/bootbox.js" ></script>

<!-- Google Code Prettify -->
<script src="../<?php echo $template_path;?>js/prettify.js" ></script>

<!-- MiniColors Plugin -->
<script src="../<?php echo $template_path;?>js/jquery.miniColors.js" ></script>

<!-- Cookie Plugin -->
<script src="../<?php echo $template_path;?>js/jquery.cookie.js"></script>

<!-- Colors -->
<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>

<!-- Themer -->
<script>
    var themerPrimaryColor = primaryColor;
</script>
<script src="../<?php echo $template_path;?>js/themer.js" ></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.5&sensor=false"></script>
<script src="http://maps.gstatic.com/intl/en_us/mapfiles/api-3/11/19/main.js" type="text/javascript"></script>
<script src="../<?php echo $template_path;?>js/contact.js"></script>

</body>
</html>