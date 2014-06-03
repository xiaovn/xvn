<?php
/**
 * Project: xvn.
 * File: contact_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 1:09 PM - 7/31/13
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
        <?php
        require_once "nav.php";
        ?>
        <!-- Top navbar END -->
        <div class="container-960 innerT">


            <div class="widget widget-heading-simple widget-body-gray">
                <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Thông báo</h4></div>
                <div class="widget-body"><p class="margin-none"><?php echo $result;?>.</p></div>
            </div>

        </div>
    </div>


    <!-- // Content END -->
<?php
require_once "footer.php";
?>