<?php
/**
 * Project: xvn.
 * File: library.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:34 AM - 8/26/13
 * Website: www.xiao.vn
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
<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span4">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Last submit</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body list products">
                <ul>
                    <li style="height: 70px;">
                        <span class="img"><img src="http://thuviengiaoduc.org/upload/thumb/<?php echo book::getInstance()->bookthumb($lastest_book->bookimage);?>"></span>
                        <span class="title"><strong><?php echo $lastest_book->bookname;?></strong><br/>
                            <?php echo member::getInstance()->get_member_info($lastest_book->bookpuber,"name");?>
                            <br>
                            View: <?php echo $lastest_book->bookview;?>
                        </span>
                        <span class="count"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span4">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Top member</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body list products">
                <ul>
                    <li style="height: 70px;">
                        <span class="img">avatar</span>
                        <span class="title"><?php echo member::getInstance()->get_member_info(book::getInstance()->get_top_post()->xid,"name");?><br/><strong>Posts: <?php echo book::getInstance()->get_top_post()->upload;?></strong></span>
                        <span class="count"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

    <!-- Column -->
    <div class="span4">

        <!-- Widget -->
        <div class="widget widget-heading-simple widget-body-gray">

            <!-- Widget heading -->
            <div class="widget-head">
                <h4 class="heading">Top View</h4>
                <a href="" class="details pull-right">view all</a>
            </div>
            <!-- // Widget heading END -->

            <div class="widget-body list products">
                <ul>
                    <li style="height: 70px;">
                        <span class="img"><img src="http://thuviengiaoduc.org/upload/thumb/<?php echo book::getInstance()->bookthumb($topbook->bookimage);?>"></span>
                        <span class="title"><?php echo $topbook->bookname;?><br/><strong>Viewed: <?php echo $topbook->bookview;?></strong></span>
                        <span class="count"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- // Column END -->

</div>
<!-- // Row END -->

<!-- Widget -->
<div class="widget widget-heading-simple widget-body-white">

<!-- Widget heading -->
<div class="widget-head">
    <h4 class="heading glyphicons list"><i></i> Manage book</h4>
</div>
<!-- // Widget heading END -->

<div class="widget-body">

<!-- Total products & Sort by options -->
<div class="form-inline separator bottom small">
    Total book: <?php echo book::getInstance()->countbook(0)?>
				<span class="pull-right">
					<label class="strong">Sort by:</label>
					<select class="selectpicker" data-style="btn-default btn-small">
                        <option>Book Name</option>
                        <option>Post Time</option>
                        <option>Book View</option>
                        <option>Book Download</option>
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
        <th>Book name</th>
        <th style="width: 1%;" class="center">FB</th>
        <th class="center">Author</th>
        <th class="center">View</th>
        <th class="center">Status</th>
        <th class="center" style="width: 90px;">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($listbook as $lb) : ?>
        <tr class="selectable">
            <td class="center uniformjs"><input type="checkbox" /></td>
            <td class="center"><?php echo $lb->bookid; ?></td>
            <td class="important"><?php echo $lb->bookname; ?></td>
            <td class="center">
                <?php
                    if($lb->bookfeat == 1)
                    {
            ?>
                <span class="glyphicons bluefont btn-action2 single cup" style="margin-right: 0;"><i></i></span>
               <?php }
                else
                {
                    ?>
                    <span class="glyphicons bluefont btn-action single cup" style="margin-right: 0;"><i></i></span>
                <?php
                }
                ?>
            </td>
            <td class="center"><?php echo $lb->bookpuber; ?></td>
            <td class="center form-inline small">
                <?php echo $lb->bookview; ?>
            </td>
            <?php
            $status = "";
            $apbt = true;
            if($lb->bookstatus == 1)
            {
                $status = "<span class='label label-success'>Approved</span>";
                $apbt = false;
            }
            elseif($lb->bookstatus == 2)
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
                <?php if($apbt){?><a href="?approve=<?php echo $lb->bookid;?>" class="btn-action glyphicons ok_2 btn-primary"><i></i></a><?php }?>
                <a href="?edit=<?php echo $lb->bookid;?>" class="btn-action glyphicons pencil btn-success"><i></i></a>
                <a href="?delete=<?php echo $lb->bookid;?>" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
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