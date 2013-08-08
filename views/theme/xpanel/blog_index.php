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
<!-- Top navbar END --><div class="container-960 innerT">

    <h3 class="glyphicons notes"><i></i>Blog</h3>
    <div class="separator bottom"></div>

    <div class="row-fluid">
        <div class="span3">

            <!-- Widget -->
            <div class="widget widget-heading-simple widget-body-gray">
                <div class="widget-body list">

                    <!-- List -->
                    <ul>
                    <?php foreach($cats as $cat) : ?>
                        <li>
                            <a href=""><?php echo $cat->catname; ?></a>
                            <span class="badge"><?php echo $cat->cat_count; ?></span>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <!-- // List END -->

                </div>
            </div>
            <!-- // Widget END -->

            <div class="widget widget-heading-simple widget-body-gray">
                <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Cảm xúc mới</h4></div>
                <div class="widget-body"><p class="margin-none"><?php echo member::getInstance()->get_member_info($feed_author,"name")." - ".$feed_content?></p></div>
            </div>

            <div class="widget widget-heading-simple widget-body-gray">
                <div class="widget-head"><h4 class="heading glyphicons tags strong"><i></i>Tags</h4></div>
                <div class="widget-body center">
                    <?php foreach($tags as $tag) : ?>
                        <span class="label"><?php echo $tag->tag; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class="span9">
            <?php
                $i = 1;
                foreach($posts as $post) :
                if($i%2 == 0)
                {
            ?>
                <div class="widget widget-heading-simple widget-body-white">
                    <div class="widget-body">
                        <div class="row-fluid">
                            <div class="span4 center">
                                <a href="" class="thumb"><img src="<?php echo $template_path;?>images/2-1.jpg" alt="Image" /></a>
                            </div>
                            <div class="span8">
                                <h5 class="strong text-uppercase"><?php echo $post->blogtitle?></h5>
                                <span class="glyphicons single regular user"><i></i> tác giả <a href=""><?php echo member::getInstance()->get_member_info($post->author,"name");?></a></span>
                                <span class="glyphicons single regular calendar"><i></i> <?php echo $post->blogdate?></span>
                                <span class="glyphicons single regular comments"><i></i> <?php echo $post->commentcount?> bình luận</span>
                                <div class="separator bottom"></div>
                                <p><?php echo strip_tags(substr($post->blogcontent,0,400));?></p>
                                <p class="margin-none strong"><a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
                else
                {
                    ?>
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="span6">
                                    <h5 class="strong text-uppercase"><?php echo $post->blogtitle?></h5>
                                    <span class="glyphicons single regular user"><i></i> tác giả <a href=""><?php echo member::getInstance()->get_member_info($post->author,"name");?></a></span>
                                    <span class="glyphicons single regular calendar"><i></i> <?php echo $post->blogdate?></span>
                                    <div class="separator bottom"></div>
                                    <p><?php echo strip_tags(substr($post->blogcontent,0,400));?></p>
                                    <p class="margin-none strong">
                                        <a href="" class="glyphicons single chevron-right"><i></i>chi tiết</a>
                                        <span class="glyphicons single regular comments"><i></i> <?php echo $post->commentcount?> bình luận</span>
                                    </p>
                                </div>
                                <div class="span6 center">
                                    <a href="" class="thumb"><img src="<?php echo $template_path;?>images/4-1.jpg" alt="Image" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                $i++;
                endforeach; ?>

        </div>
    </div>
</div>
</div>
<!-- // Content END -->
<?php require_once "footer.php"?>