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

<h2>eLibrary <span>management</span></h2>
<div class="innerLR">

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

<!-- Widget heading -->
<div class="widget-head">
    <h4 class="heading glyphicons list"><i></i> Manage student</h4>
</div>
<!-- // Widget heading END -->

<div class="widget-body">

    <!-- Total products & Sort by options -->
    <div class="form-inline separator bottom small">
        Total student: <?php echo $count;?>
        <span class="pull-right">
					<label class="strong">Sort by:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
                        <option>Student Name</option>
                        <option>School</option>
                        <option>Register Date</option>
                        <option>Student Status</option>
                    </select>
				</span>
    </div>
    <!-- // Total products & Sort by options END -->

    <!-- Filters -->
    <div class="filter-bar">
        <form>

            <!-- From -->
            <div>
                <label>From:</label>
                <div class="input-append">
                    <input type="text" name="from" id="dateRangeFrom" class="input-mini" value="08/05/13" style="width: 53px;" />
                    <span class="add-on glyphicons calendar"><i></i></span>
                </div>
            </div>
            <!-- // From END -->

            <!-- To -->
            <div>
                <label>To:</label>
                <div class="input-append">
                    <input type="text" name="to" id="dateRangeTo" class="input-mini" value="08/18/13" style="width: 53px;" />
                    <span class="add-on glyphicons calendar"><i></i></span>
                </div>
            </div>
            <!-- // To END -->

            <!-- Min -->
            <div>
                <label>Min:</label>
                <div class="input-append">
                    <input type="text" name="from" class="input-mini" style="width: 30px;" value="100" />
                    <span class="add-on glyphicons usd"><i></i></span>
                </div>
            </div>
            <!-- // Min END -->

            <!-- Max -->
            <div>
                <label>Max:</label>
                <div class="input-append">
                    <input type="text" name="from" class="input-mini" style="width: 30px;" value="500" />
                    <span class="add-on glyphicons usd"><i></i></span>
                </div>
            </div>
            <!-- // Max END -->

            <!-- Select -->
            <div>
                <label>Select category:</label>
                <select name="from" style="width: 150px;">
                    <option>Toán học</option>
                    <option>Vật lý</option>
                    <option>Sinh học</option>
                </select>
            </div>
            <!-- // Select END -->

            <div class="clearfix"></div>
        </form>
    </div>
    <!-- // Filters END -->

    <!-- Products table -->
    <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
        <thead>
        <tr>
            <th style="width: 1%;" class="uniformjs"><input type="checkbox" /></th>
            <th style="width: 1%;" class="center">No.</th>
            <th class="center">xID</th>
            <th class="center">Full name</th>
            <th class="center">Class</th>
            <th class="center">Last login</th>
            <th class="center">Status</th>
            <th class="center" style="width: 90px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        foreach($liststudent as $st) :
            $i++;
            ?>
            <tr class="selectable">
                <td class="center uniformjs"><input type="checkbox" /></td>
                <td class="center"><?php echo $i; ?></td>
                <td class="center"><?php echo $st->xid; ?></td>
                <td class="center">
                    <?php
                    echo member::getInstance()->get_member_info($st->xid,"firstname")." ".member::getInstance()->get_member_info($st->xid,"name");
                    ?>
                </td>
                <td class="center"><?php echo school::getInstance()->lop(school::getInstance()->get_learning_year($st->xid,"2013")->class,"tenlop"); ?> - <?php echo school::getInstance()->truong(school::getInstance()->get_learning_year($st->xid,"2013")->school,"tentruong"); ?></td>
                <td class="center form-inline small">
                    <?php echo $st->lastlogin; ?>
                </td>
                <?php
                $status = "";
                $apbt = true;
                if($st->status == 1)
                {
                    $status = "<span class='label label-success'>Approved</span>";
                    $apbt = false;
                }
                elseif($st->status == 2)
                {
                    $status = "<span class='label label-warning'>Pending</span>";
                    $apbt = true;
                }
                else
                {
                    $status = "<span class='label label-inverse'>Deleted</span>";
                    $apbt = true;
                }
                ?>
                <td class="center"><?php echo $status; ?></td>
                <td class="center">
                    <?php if($apbt){?><a href="?approve=<?php echo $st->xid;?>" class="btn-action glyphicons ok_2 btn-primary"><i></i></a><?php }?>
                    <a href="?edit=<?php echo $st->xid;?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
                    <a href="?delete=<?php echo $st->xid;?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <!-- // Products table END -->

    <!-- Options -->
    <div class="separator top form-inline small">

        <!-- With selected actions -->
        <div class="pull-left checkboxs_actions hide">
            <label class="strong">With selected:</label>
            <select class="selectpicker dropup" data-style="btn-default btn-small">
                <option>Action</option>
                <option>Action</option>
                <option>Action</option>
            </select>
        </div>
        <!-- // With selected actions END -->

        <!-- Pagination -->
        <div class="pagination pagination-small pull-right" style="margin: 0;">
            <ul>
                <?php
                $firstb = "disable";
                if($_GET['page'] != 1)
                {
                    $firstb = "enable";
                }
                ?>
                <li class="<?php echo $firstb;?>"><a href="?page=1">&laquo;</a></li>
                <?php
                for ( $page = 1; $page <= $sotrang; $page ++ )
                {
                    $class = "";
                    if($_GET['page'] == $page)
                    {
                        $class = "active";
                    }
                    echo "<li class='$class'><a href='?page={$page}'>{$page}</a></li>";
                }
                ?>
                <li><a href="?page=<?php echo $sotrang;?>">&raquo;</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <!-- // Pagination END -->

    </div>
    <!-- // Options END -->

</div>
</div>
<!-- // Widget END -->
<!-- Widget -->

</div>
<!-- // Content END -->

</div>
<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->
<script src="<?php echo $admintemplate_path;?>/asset/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/TableTools.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/ColVis.min.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/DT_bootstrap.js"></script>
<script src="<?php echo $admintemplate_path;?>/asset/js/tables.js"></script>
<?php
include_once 'footer.php';
?>