<?php
/**
 * Project: xvn.
 * File: footerbook.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:38 PM - 8/27/13
 * Website: www.xiao.vn
 */
?>

<div id="footer" class="hidden-print">

    <!--  Copyright Line -->
    <div class="copy">&copy; 2012 - 2013 - <a href="http://www.xiao.vn">Xiao Media Corp</a> - All Rights Reserved. <a href="#" target="_blank">Xiao Service Control</a> - Current version: v2.3.15 / <a target="_blank" href="#">About</a></div>
    <!--  End Copyright Line -->

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
            <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
            <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Themer END -->


<!-- Code Beautify -->
<script src="<?php echo $admintemplate_path;?>asset/js/beautify.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/beautify-html.js"></script>

<!-- PrettyPhoto -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.prettyPhoto.js"></script>

<!-- Global -->
<script>
    var basePath = '',
        commonPath = '../../common/';
</script>

<!-- JQueryUI -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery-ui-1.9.2.custom.min.js" ></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.ui.touch-punch.min.js" ></script>


<!-- Modernizr -->
<script src="<?php echo $admintemplate_path;?>asset/js/modernizr.js" ></script>

<!-- Bootstrap -->
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap.min.js" ></script>

<!-- SlimScroll Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.slimscroll.min.js" ></script>

<!-- Common Demo Script -->
<script src="<?php echo $admintemplate_path;?>asset/js/common.js" ></script>

<!-- Holder Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/holder.js" ></script>
<script>
    Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
    Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
</script>

<!-- Uniform Forms Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.uniform.min.js" ></script>

<!-- Bootstrap Extended -->
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap-select.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.toggle.buttons.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/twitter-bootstrap-hover-dropdown.min.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap-fileupload.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/bootbox.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/wysihtml5-0.3.0_rc2.min.js" ></script>
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap-wysihtml5-0.0.2.js"></script>

<!-- Google Code Prettify -->
<script src="<?php echo $admintemplate_path;?>asset/js/prettify.js" ></script>

<!-- Gritter Notifications Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.gritter.min.js" ></script>

<!-- Notyfy Notifications Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.notyfy.js" ></script>

<!-- MiniColors Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.miniColors.js" ></script>

<!-- DateTimePicker Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap-datetimepicker.min.js" ></script>

<!-- Cookie Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.cookie.js" ></script>

<!-- Select2 Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/select2.js" ></script>

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
<script src="<?php echo $admintemplate_path;?>asset/js/themer.js" ></script>

<!-- Twitter Feed -->
<script src="<?php echo $admintemplate_path;?>asset/js/twitter.js" ></script>

<!-- Easy-pie Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.easy-pie-chart.js" ></script>

<!-- Sparkline Charts Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.sparkline.min.js" ></script>

<!-- Ba-Resize Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.ba-resize.js" ></script>


<!-- ColorPicker -->
<script src="<?php echo $admintemplate_path;?>asset/js/farbtastic.js" ></script>

<!-- Multiselect Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.multi-select.js" ></script>

<!-- bootstrap-timepicker Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/bootstrap-timepicker.min.js" ></script>

<!-- InputMask Plugin -->
<script src="<?php echo $admintemplate_path;?>asset/js/jquery.inputmask.bundle.min.js" ></script>

<!-- Form Elements Page Demo Script -->
<script src="<?php echo $admintemplate_path;?>asset/js/form_elements.js" ></script>


</body>
</html>