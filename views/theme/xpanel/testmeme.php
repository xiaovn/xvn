<?php
/**
 * Project: xvn.
 * File: testmeme.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:14 - 23/12/2013
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <link href="<?php echo $template_path;?>css/style-default.css" rel="stylesheet" />
    </head>
<body>

    <!-- Main Container Fluid -->
<div class="container-fluid">

<!-- Content -->
<!-- Content -->
<div id="content">

<!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
<?php
require_once "nav.php";
?>
<!-- Top navbar END -->
<div class="container-960 innerT">

<h3 class="glyphicons circle_info margin-none"><i></i>sss <span>Thông tin cá nhân.</span></h3>
<div class="separator bottom"></div>

<div class="widget widget-heading-simple widget-body-gray">
    <div class="widget-body"><p class="lead center margin-none">Thành công là một hành trình chứ không phải một điểm đến.</p></div>
</div>

<!-- Row -->
<div class="row-fluid">

    <!-- Thumbnails -->

        <!-- Column -->
        <div class="span-6">

            <div class="widget activity-line">
                <div class="widget-body padding-none">
                    <div class="share">
                        <textarea class="form-control" rows="3" placeholder="Share what you've been up to..."></textarea>
                        <div class="share-buttons">
                            <a href="#" class="glyphicons user"><i></i></a>
                            <a href="#" class="glyphicons plus"><i></i></a>
                            <a href="#" class="glyphicons envelope"><i></i></a>
                            <a href="#" class="glyphicons-social facebook"><i></i></a>
                            <a href="#" class="glyphicons-social twitter"><i></i></a>
                        </div>
                        <a class="btn btn-primary  btn-sm pull-right">Submit</a>
                    </div>
                </div>
            </div>


            <div class="widget activity-line small">
                <div class="widget-body padding-none">
                    <div class="icon primary"><a class="glyphicons luggage"><i></i></a></div>
                    <span><a href="">Background Colored</a> icon activity line</span>
                    <a class="activity-action pull-right glyphicons chat"><i></i></a>
                </div>
            </div>


            <div class="widget activity-line">
                <div class="widget-body padding-none">
                    <div class="activity-status">
                        <div class="activity-author"><a href="#"><img src="../assets/images/avatar-large.jpg" alt="..." width="50"></a></div>
                        <div class="text">
                            <a href="#">Adrian Demian</a> posted on
                            <a href="#">his Profile</a>
                            <span class="glyphicons calendar"><i></i> on 16 September 2013 </span>
                        </div>
                    </div>
                    <div class="activity-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus ipsum non ligula tincidunt laoreet.as nec mauris lacus.</div>
                    <div class="innerAll">
                        <div class="activity-comments">
                            <p class="comment glyphicons chat"><i></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus ipsum <abbr>- <a href="">mosaicpro</a> December 12, 2011</abbr></p>
                        </div>
                        <div class="activity-comments">
                            <p class="comment glyphicons chat"><i></i>Lorem ipsum dolor sit am ipsum <abbr>- <a href="">mosaicpro </a> December 12, 2011</abbr></p>
                        </div>
                        <input class="form-control input-sm" placeholder="Comment here...">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="widget activity-line medium">
                <div class="widget-body padding-none">
                    <div class="color-widget primary">
                        <div class="icon inverse"><a class="glyphicons envelope"><i></i></a></div>
                        <span><a href="">Combined Colors</a> both for icon and text activity line</span>
                        <a class="activity-action pull-right glyphicons chat"><i></i></a>
                    </div>
                </div>
            </div>


            <div class="widget activity-line">
                <div class="widget-body padding-none">
                    <div class="row row-merge">

                        <div class="col-md-3 ">
                            <div class="color-widget dribble center">
                                <span class="glyphicons-social dribbble social-big"><i></i></span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="innerAll muted">
                                <a href="" class="pull-right"><div class="label label-primary"><em>FOLLOW</em></div></a>
                                <a><h4 class="strong muted text-uppercase">Adrian Demian</h4></a>
                                <ul class="unstyled icons margin-none">
                                    <li class="glyphicons tie"><i></i> Working at <a href="http://www.mosaicpro.biz">MosaicPro</a></li>
                                    <li class="glyphicons certificate"><i></i> Adobe  Certification</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="widget activity-line">
                <div class="widget-body padding-none">
                    <div class="color-widget inverse center">
                        <span class="glyphicons-social twitter social-big"><i></i></span>
                    </div>
                    <p class="center innerAll">Follow us on <a href="#">twitter</a> </p>
                </div>
            </div>



        </div>
        <div class="span-6">

        <div class="widget widget-heading-simple widget-body-white">
            <div class="widget-body padding-none">

                <div class="innerAll">
                    <div class="muted separator bottom">
                        <div class="pull-right label label-default"> <em>3 days ago</em></div>
                        <h5 class="strong muted text-uppercase"><i class="icon-user "></i> Adrian Demian</h5>
				<span>on <a href="#">Quick Admin Template</a><span>
			</span></span></div>
                    <p class="margin-none">Make use of a super basic HTML template, or dive into a few examples we've started for you. We encourage folks to iterate on these examples and not simply use them as an end result.</p>
                </div>
                <img src="holder.js/100%x200/dark" style="width: 0px; height: 0px;"><div class=" holderjs-fluid" id="" style="background-color: rgb(69, 72, 77); color: rgb(170, 170, 170); width: 100%; height: 200px; line-height: 200px;">558x200</div>
                <div class="bottom-social innerLR innerT">
                    <a href=""><i class="icon-comment"></i> Comment</a>
                    <a href=""><i class="icon-share"></i> Share Post</a>
                </div>

                <div class="innerAll">
                    <ul class="list-group social-comments margin-none">
                        <li class="list-group-item">
                            <img src="../assets/images/avatar-36x36.jpg" alt="Avatar" class="pull-left">
                            <div class="user-info">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="">Adrian Demian</a>
                                        <abbr>4 days ago</abbr>
                                    </div>
                                    <div class="col-md-9">
                                        <span> Wow... nice post</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <img src="../assets/images/avatar-36x36.jpg" alt="Avatar" class="pull-left">
                            <div class="user-info">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="">Adrian Demian</a>
                                        <abbr>4 days ago</abbr>
                                    </div>
                                    <div class="col-md-9">
                                        <span> Wow... nice post</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item innerAll">
                            <input type="text" name="message" class="form-control input-sm" placeholder="Comment here ...">
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="widget widget-heading-simple widget-body-white">
            <div class="widget-body padding-none">
                <div class="row row-merge">
                    <div class="col-md-3">
                        <div class="innerAll center"><img src="../assets/images/avatar-large.jpg" alt="..." class="img-rounded"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="innerAll muted">
                            <a href="" class="pull-right"><span class="label label-success"> <em>FOLLOW</em></span></a><a>
                                <h4 class="strong muted text-uppercase">Adrian Demian</h4>
                            </a><ul class="unstyled icons margin-none"><a>
                                </a><li class="glyphicons tie"><a><i></i> Working at </a><a href="http://www.mosaicpro.biz">MosaicPro</a></li>
                                <li class="glyphicons certificate"><i></i> Adobe  Certification</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- // Thumbnails END -->

</div>
<!-- // Row END -->



</div>
</div>

<script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
</script>
<!-- // Content END -->
<?php
require_once "footer.php";
?>