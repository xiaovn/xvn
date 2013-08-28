<?php
/**
 * Project: xsc.
 * File: table.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:37 PM - 8/21/13
 * Website: www.xiao.vn
 */
include_once 'header.php';
?>
    <!-- DataTables Plugin -->
    <link href="../../common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css" rel="stylesheet" />
    <link href="../../common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/css/TableTools.css" rel="stylesheet" />
    <link href="../../common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/css/ColVis.css" rel="stylesheet" />


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

    <!-- Brand -->
    <a href="index.html?lang=en" class="appbrand">X.E.M. ADMIN</a>

    <!-- Scrollable menu wrapper with Maximum height -->
    <div class="slim-scroll" data-scroll-height="800px">

        <!-- Sidebar Profile -->
			<span class="profile center">
				<a href="my_account_advanced.html?lang=en"><img src="<?php echo $admintemplate_path;?>/asset/images/avatar-36x36.jpg" alt="Avatar" /></a>
			</span>
        <!-- // Sidebar Profile END -->

        <!-- Regular Size Menu -->
        <ul>


            <!-- Not blank page -->

            <!-- Quick Sidebar Style -->
            <!-- // Quick Sidebar Style END -->

            <!-- Full Sidebar Style -->
            <?php
            include_once 'sidebar.php';
            ?>
            <!-- // Full Sidebar Style END -->

            <!-- // Not blank page END -->

        </ul>
        <div class="clearfix"></div>
        <!-- // Regular Size Menu END -->

        <div class="alert alert-primary">
            <a class="close" data-dismiss="alert">&times;</a>
            <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est.</p>
        </div>

    </div>
    <!-- // Scrollable Menu wrapper with Maximum Height END -->

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


<h3>DataTable with TableTools</h3>
<div class="innerLR">

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">
<div class="widget-body">

<!-- Table -->
<table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">

<!-- Table heading -->
<thead>
<tr>
    <th>Rendering eng.</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Eng. vers.</th>
    <th>CSS grade</th>
</tr>
</thead>
<!-- // Table heading END -->

<!-- Table body -->
<tbody>

<!-- Table row -->
<tr class="gradeX">
    <td>Trident</td>
    <td>Internet Explorer 4.0</td>
    <td>Win 95+</td>
    <td class="center">4</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Trident</td>
    <td>Internet Explorer 5.0</td>
    <td>Win 95+</td>
    <td class="center">5</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 5.5</td>
    <td>Win 95+</td>
    <td class="center">5.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 6</td>
    <td>Win 98+</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 7</td>
    <td>Win XP SP2+</td>
    <td class="center">7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>AOL browser (AOL desktop)</td>
    <td>Win XP</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 1.0</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 1.5</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 2.0</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 3.0</td>
    <td>Win 2k+ / OSX.3+</td>
    <td class="center">1.9</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Camino 1.0</td>
    <td>OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Camino 1.5</td>
    <td>OSX.3+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape 7.2</td>
    <td>Win 95+ / Mac OS 8.6-9.2</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape Browser 8</td>
    <td>Win 98SE+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape Navigator 9</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.0</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.1</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.2</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.2</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.3</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.4</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.4</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.5</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.6</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.7</td>
    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.8</td>
    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Seamonkey 1.1</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Epiphany 2.20</td>
    <td>Gnome</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 1.2</td>
    <td>OSX.3</td>
    <td class="center">125.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 1.3</td>
    <td>OSX.3</td>
    <td class="center">312.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 2.0</td>
    <td>OSX.4+</td>
    <td class="center">419.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 3.0</td>
    <td>OSX.4+</td>
    <td class="center">522.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>OmniWeb 5.5</td>
    <td>OSX.4+</td>
    <td class="center">420</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>iPod Touch / iPhone</td>
    <td>iPod</td>
    <td class="center">420.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>S60</td>
    <td>S60</td>
    <td class="center">413</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 7.0</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 7.5</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 8.0</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 8.5</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.0</td>
    <td>Win 95+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.2</td>
    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.5</td>
    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera for Wii</td>
    <td>Wii</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Nokia N800</td>
    <td>N800</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Nintendo DS browser</td>
    <td>Nintendo DS</td>
    <td class="center">8.5</td>
    <td class="center">C/A<sup>1</sup></td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>KHTML</td>
    <td>Konqureror 3.1</td>
    <td>KDE 3.1</td>
    <td class="center">3.1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>KHTML</td>
    <td>Konqureror 3.3</td>
    <td>KDE 3.3</td>
    <td class="center">3.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>KHTML</td>
    <td>Konqureror 3.5</td>
    <td>KDE 3.5</td>
    <td class="center">3.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Tasman</td>
    <td>Internet Explorer 4.5</td>
    <td>Mac OS 8-9</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Tasman</td>
    <td>Internet Explorer 5.1</td>
    <td>Mac OS 7.6-9</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Tasman</td>
    <td>Internet Explorer 5.2</td>
    <td>Mac OS 8-X</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Misc</td>
    <td>NetFront 3.1</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Misc</td>
    <td>NetFront 3.4</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Dillo 0.8</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Links</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Lynx</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Misc</td>
    <td>IE Mobile</td>
    <td>Windows Mobile 6</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Misc</td>
    <td>PSP browser</td>
    <td>PSP</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeU">
    <td>Other browsers</td>
    <td>All others</td>
    <td>-</td>
    <td class="center">-</td>
    <td class="center">U</td>
</tr>
<!-- // Table row END -->

</tbody>
<!-- // Table body END -->

</table>
<!-- // Table END -->

</div>
</div>
<div class="widget widget-heading-simple widget-body-white">
    <div class="widget-head"><h4 class="heading glyphicons circle_question_mark"><i></i>Code sample</h4></div>
    <div class="widget-body">

        <div class="code visible">
            <p><span class="label">Note:</span> For TableTools to work correctly, make sure you load the TableTools CSS & JavaScript plugin located in the <code>scripts/plugins/tables/DataTables/extras/TableTools/media</code> folder.</p>
            <p><span class="label">Code sample:</span><p>
<pre class="prettyprint margin-none">
$('.dynamicTable.tableTools').dataTable({
	"sPaginationType": "bootstrap",
	"sDom": "<'row-fluid'<'span5'T><'span3'l><'span4'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
	"oLanguage": {
		"sLengthMenu": "_MENU_ per page"
	},
	"oTableTools": {
		"sSwfPath": "/path/to/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
	}
});
</pre>
        </div>

    </div>
</div>
<div class="separator bottom"></div>
<!-- // Widget END -->

<h3 class="separator bottom">DataTable with Show/Hide columns</h3>

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">
<div class="widget-body">

<!-- Table -->
<table class="dynamicTable colVis table table-striped table-bordered table-condensed table-white">

<!-- Table heading -->
<thead>
<tr>
    <th>Rendering eng.</th>
    <th>Browser</th>
    <th>Platform(s)</th>
    <th>Eng. vers.</th>
    <th>CSS grade</th>
</tr>
</thead>
<!-- // Table heading END -->

<!-- Table body -->
<tbody>

<!-- Table row -->
<tr class="gradeX">
    <td>Trident</td>
    <td>Internet Explorer 4.0</td>
    <td>Win 95+</td>
    <td class="center">4</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Trident</td>
    <td>Internet Explorer 5.0</td>
    <td>Win 95+</td>
    <td class="center">5</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 5.5</td>
    <td>Win 95+</td>
    <td class="center">5.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 6</td>
    <td>Win 98+</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>Internet Explorer 7</td>
    <td>Win XP SP2+</td>
    <td class="center">7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Trident</td>
    <td>AOL browser (AOL desktop)</td>
    <td>Win XP</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 1.0</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 1.5</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 2.0</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Firefox 3.0</td>
    <td>Win 2k+ / OSX.3+</td>
    <td class="center">1.9</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Camino 1.0</td>
    <td>OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Camino 1.5</td>
    <td>OSX.3+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape 7.2</td>
    <td>Win 95+ / Mac OS 8.6-9.2</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape Browser 8</td>
    <td>Win 98SE+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Netscape Navigator 9</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.0</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.1</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.2</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.2</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.3</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.4</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.4</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.5</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.6</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.6</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.7</td>
    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Mozilla 1.8</td>
    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Seamonkey 1.1</td>
    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Gecko</td>
    <td>Epiphany 2.20</td>
    <td>Gnome</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 1.2</td>
    <td>OSX.3</td>
    <td class="center">125.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 1.3</td>
    <td>OSX.3</td>
    <td class="center">312.8</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 2.0</td>
    <td>OSX.4+</td>
    <td class="center">419.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>Safari 3.0</td>
    <td>OSX.4+</td>
    <td class="center">522.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>OmniWeb 5.5</td>
    <td>OSX.4+</td>
    <td class="center">420</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>iPod Touch / iPhone</td>
    <td>iPod</td>
    <td class="center">420.1</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Webkit</td>
    <td>S60</td>
    <td>S60</td>
    <td class="center">413</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 7.0</td>
    <td>Win 95+ / OSX.1+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 7.5</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 8.0</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 8.5</td>
    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.0</td>
    <td>Win 95+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.2</td>
    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera 9.5</td>
    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Opera for Wii</td>
    <td>Wii</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Nokia N800</td>
    <td>N800</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Presto</td>
    <td>Nintendo DS browser</td>
    <td>Nintendo DS</td>
    <td class="center">8.5</td>
    <td class="center">C/A<sup>1</sup></td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>KHTML</td>
    <td>Konqureror 3.1</td>
    <td>KDE 3.1</td>
    <td class="center">3.1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>KHTML</td>
    <td>Konqureror 3.3</td>
    <td>KDE 3.3</td>
    <td class="center">3.3</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>KHTML</td>
    <td>Konqureror 3.5</td>
    <td>KDE 3.5</td>
    <td class="center">3.5</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Tasman</td>
    <td>Internet Explorer 4.5</td>
    <td>Mac OS 8-9</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Tasman</td>
    <td>Internet Explorer 5.1</td>
    <td>Mac OS 7.6-9</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Tasman</td>
    <td>Internet Explorer 5.2</td>
    <td>Mac OS 8-X</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Misc</td>
    <td>NetFront 3.1</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeA">
    <td>Misc</td>
    <td>NetFront 3.4</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Dillo 0.8</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Links</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeX">
    <td>Misc</td>
    <td>Lynx</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Misc</td>
    <td>IE Mobile</td>
    <td>Windows Mobile 6</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeC">
    <td>Misc</td>
    <td>PSP browser</td>
    <td>PSP</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<!-- // Table row END -->

<!-- Table row -->
<tr class="gradeU">
    <td>Other browsers</td>
    <td>All others</td>
    <td>-</td>
    <td class="center">-</td>
    <td class="center">U</td>
</tr>
<!-- // Table row END -->

</tbody>
<!-- // Table body END -->

</table>
<!-- // Table END -->

</div>
</div>
<div class="widget widget-heading-simple widget-body-white">
    <div class="widget-head"><h4 class="heading glyphicons circle_question_mark"><i></i>Code sample</h4></div>
    <div class="widget-body">

        <div class="code visible">
            <p><span class="label">Note:</span> For ColVis to work correctly, make sure you load the ColVis CSS &amp; JavaScript plugin located in the <code>scripts/plugins/tables/DataTables/extras/ColVis/media</code> folder.</p>
            <p><span class="label">Code sample:</span><p>
<pre class="prettyprint margin-none">
$('.dynamicTable.colVis').dataTable({
	"sPaginationType": "bootstrap",
	"sDom": "<'row-fluid'<'span3'f><'span3'l><'span6'C>r>t<'row-fluid'<'span6'i><'span6'p>>",
	"oLanguage": {
		"sLengthMenu": "_MENU_ per page"
	}
});
</pre>
        </div>

    </div>
</div>
<div class="separator bottom"></div>
<!-- // Widget END -->

<h3 class="separator bottom">Classic Tables</h3>

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Minimal Table</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body" data-toggle="source-code">

        <!-- Table -->
        <table class="table table-condensed">

            <!-- Table heading -->
            <thead>
            <tr>
                <th class="center">No.</th>
                <th>Column Heading</th>
            </tr>
            </thead>
            <!-- // Table heading END -->

            <!-- Table body -->
            <tbody>

            <!-- Table row -->
            <tr>
                <td class="center">1</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">2</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">3</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            </tbody>
            <!-- // Table body END -->

        </table>
        <!-- // Table END -->

    </div>
</div>
<!-- // Widget END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Bordered Table</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body" data-toggle="source-code">

        <!-- Table -->
        <table class="table table-bordered table-white">

            <!-- Table heading -->
            <thead>
            <tr>
                <th class="center">No.</th>
                <th>Column Heading</th>
            </tr>
            </thead>
            <!-- // Table heading END -->

            <!-- Table body -->
            <tbody>

            <!-- Table row -->
            <tr>
                <td class="center">1</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">2</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">3</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            </tbody>
            <!-- // Table body END -->

        </table>
        <!-- // Table END -->

    </div>
</div>
<!-- // Widget END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Condensed Table</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body" data-toggle="source-code">

        <!-- Table -->
        <table class="table table-bordered table-condensed">

            <!-- Table heading -->
            <thead>
            <tr>
                <th class="center">No.</th>
                <th>Column Heading</th>
            </tr>
            </thead>
            <!-- // Table heading END -->

            <!-- Table body -->
            <tbody>

            <!-- Table row -->
            <tr>
                <td class="center">1</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">2</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">3</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            </tbody>
            <!-- // Table body END -->

        </table>
        <!-- // Table END -->

    </div>
</div>
<!-- // Widget END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-gray">

    <!-- Widget heading -->
    <div class="widget-head">
        <h4 class="heading">Striped Table</h4>
    </div>
    <!-- // Widget heading END -->

    <div class="widget-body" data-toggle="source-code">

        <!-- Table -->
        <table class="table table-bordered table-striped table-white">

            <!-- Table heading -->
            <thead>
            <tr>
                <th class="center">No.</th>
                <th>Column Heading</th>
            </tr>
            </thead>
            <!-- // Table heading END -->

            <!-- Table body -->
            <tbody>

            <!-- Table row -->
            <tr>
                <td class="center">1</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">2</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            <!-- Table row -->
            <tr>
                <td class="center">3</td>
                <td>Lorem ipsum dolor</td>
            </tr>
            <!-- // Table row END -->

            </tbody>
            <!-- // Table body END -->

        </table>
        <!-- // Table END -->

    </div>
</div>
<!-- // Widget END -->

</div>


</div>
<!-- // Content END -->

</div>
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<!-- DataTables Tables Plugin -->
<script src="../../common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="../../common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/js/TableTools.min.js"></script>
<script src="../../common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/js/ColVis.min.js"></script>
<script src="../../common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js"></script>

<!-- Tables Demo Script -->
<script src="../../common/theme/scripts/demo/tables.js"></script>
<?php
include_once 'footer.php';
?>