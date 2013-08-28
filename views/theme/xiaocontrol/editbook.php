<?php
/**
 * Project: xvn.
 * File: editbook.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:49 AM - 8/27/13
 * Website: www.xiao.vn
 */
include_once 'headerbook.php';
?>
    <!-- Bootstrap Image Gallery -->
    <link href="<?php echo $admintemplate_path;?>/asset/css/bootstrap-image-gallery.min.css" rel="stylesheet" />


    <!-- FireBug Lite -->
    <!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
    </head>
<body class="wysihtml5-supported">

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

<!-- Heading -->
<div class="heading-buttons">
    <h3>Add book <span>Book Manager</span></h3>
    <div class="buttons pull-right">
        <a href="#" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> Back to List</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->
<div class="innerLR">
<!-- Row -->
<div class="row-fluid">

    <!-- Widget -->
    <div class="widget widget-tabs">

        <!-- Widget heading -->
        <div class="widget-head">
            <ul>
                <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a></li>
                <li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Thumbnail && Files</a></li>
                <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Customs View</a></li>
                <li><a href="#productSeoTab" data-toggle="tab" class="glyphicons podium"><i></i>SEO</a></li>
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
                            <strong>Book title</strong>
                            <p class="muted">Book title to view.</p>
                        </div>
                        <!-- // Column END -->

                        <!-- Column -->
                        <div class="span9">
                            <label for="inputSubject">Title</label>
                            <input type="text" name="bookname" id="inputSubject" class="span6" value="" placeholder="Enter book title ..." />
                        </div>
                        <!-- // Column END -->

                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Author</strong>
                            <p class="muted">Author of book.</p>
                        </div>
                        <div class="span9">
                            <label for="inputAuthor">Author</label>
                            <input type="text" name="bookauthor" id="inputAuthor" class="span4" value="" placeholder="Enter book author ..." />
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Publish Years</strong>
                            <p class="muted">Publish Years of book.</p>
                        </div>
                        <div class="span9">
                            <label for="inputPubYear">Publish Years</label>
                            <input type="text" name="bookauthor" id="inputPubYear" class="span1" value="" placeholder="Enter book years ..." />
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Post Date</strong>
                            <p class="muted">Post date of book.</p>
                        </div>
                        <div class="span9">
                            <label for="inputPubYear">Post date</label>
                            <div class="input-append date" id="datetimepicker6">
                                <input type="text" value="2013-08-23" />
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Tags</strong>
                            <p class="muted"></p>
                        </div>
                        <div class="span9">
                            <label for="inputPubYear">Tags</label>
                            <input type="hidden" id="select2_5" style="width: 50%;" value="" />
                            <div class="separator"></div>
                        </div>
                    </div>
                    <!-- // Row END -->

                    <hr class="separator bottom" />
                    <!-- Row -->
                    <div class="row-fluid">

                        <!-- Column -->
                        <div class="span3">
                            <strong>Subject</strong>
                            <p class="muted">Book Subject.</p>
                        </div>
                        <!-- // Column END -->

                        <!-- Column -->
                        <div class="span9">
                            <label for="inputTitle">Subject</label>
                            <select class="selectpicker span4" data-style="btn-primary">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                        <!-- // Column END -->

                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Category</strong>
                            <p class="muted">Category of book.</p>
                        </div>
                        <div class="span9">
                            <label for="inputCategory">Category</label>
                            <select class="selectpicker span4" data-style="btn-primary">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <!-- // Row END -->

                    <hr class="separator bottom" />

                    <!-- Row -->
                    <div class="row-fluid">

                        <!-- Column -->
                        <div class="span3">
                            <strong>Description</strong>
                            <p class="muted">Some text about book.</p>
                        </div>
                        <!-- // Column END -->

                        <!-- Column -->
                        <div class="span9">
                            <label for="textDescription">Description</label>
                            <textarea id="textDescription" class="wysihtml5" style="width: 96%;" rows="5"></textarea>
                        </div>
                        <!-- // Column END -->

                    </div>
                    <!-- // Row END -->

                </div>
                <!-- // Description END -->

                <!-- Photos -->
                <div class="tab-pane" id="productPhotosTab">

                    <div class="separator bottom"></div>
                    <div class="row-fluid">

                    <!-- Gallery Layout -->
                        <div class="span6">
                            <h5 class="strong text-uppercase margin-none">Thumbnail</h5>
                            <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    <div class="gallery gallery-2 span6">

                        <!-- // Dropzone END -->
                        <ul class="row-fluid" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-4" data-delegate="#gallery-4">
                            <li class="span4 hidden-phone"><a class="thumb" href="<?php echo XC_URL?>/uploads/10082013.png" data-gallery="gallery"><img src="<?php echo XC_URL?>/uploads/10082013.png" alt="photo" /></a></li>
                        </ul>
                    </div>
                    </div>
                    <hr class="separator top" />
                    <div class="row-fluid">
                        <div class="span6">
                            <h5 class="strong text-uppercase margin-none">Book File</h5>
                            <!-- Dropzone -->
                            <div class="fileupload fileupload-new margin-none" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>

                            <iframe src="http://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fthuviengiaoduc.org%2Fupload%2Fdocs%2Fthu-vien-giao-duc-7821-33dangtoankshs.pdf" width="685" height="700"></iframe>
                        </div>
                    </div>
                    <!-- // Gallery Layout END -->

                </div>
                <!-- // Photos END -->

                <!-- Attributes -->
                <div class="tab-pane" id="productAttributesTab">
                    <h5 class="strong text-uppercase">Custom View</h5>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Can View</strong>
                            <p class="muted">Who can view a book.</p>
                        </div>
                        <div class="span9">
                            <div class="widget-body uniformjs">
                                <label class="checkbox">
                                    <input type="checkbox" class="checkbox" value="1" />
                                    Teacher
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                    Student
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" class="checkbox" value="1" checked="checked" />
                                    Guest
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="separator top">
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>View Count</strong>
                            <p class="muted"></p>
                        </div>
                        <div class="span9">
                            <label for="inputAuthor">2231</label>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <strong>Download Count</strong>
                            <p class="muted"></p>
                        </div>
                        <div class="span9">
                            <label for="inputAuthor">2231</label>
                        </div>
                    </div>
                </div>
                <!-- // Attributes END -->


                <!-- SEO -->
                <div class="tab-pane" id="productSeoTab">
                    <h5 class="strong text-uppercase">Search Engine Optimization</h5>
                    <p>Aenean sollicitudin et nisi ac faucibus. Ut lacinia rhoncus posuere. Cras consectetur tincidunt consectetur. Nam egestas augue sed leo tincidunt imperdiet. Etiam eu convallis magna, sed hendrerit sem. Sed vulputate, tortor vel ullamcorper aliquet, ante nibh iaculis neque, ullamcorper dictum felis metus nec quam. Pellentesque sollicitudin turpis a mi volutpat, eget sagittis urna vehicula. Nunc vel ultrices elit. Proin eros justo, hendrerit a metus non, convallis ullamcorper magna.</p>
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
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- // Bottom buttons END -->


</div>
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
include_once 'footerbook.php';
?>