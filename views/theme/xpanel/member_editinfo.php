<?php
/**
 * Project: xvn.
 * File: member_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:40 PM - 7/30/13
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
<!-- Top navbar END --><div class="container-960 innerT">

<h3 class="glyphicons circle_info margin-none"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?> <span>Thay đổi thông tin.</span></h3>
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
<div class="inner">

<!-- Widget -->
<div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">

<!-- Widget heading -->
<div class="widget-head">
    <ul>
        <li class="active"><a class="glyphicons display" href="#overview" data-toggle="tab"><i></i>Thông tin cá nhân</a></li>
        <li><a class="glyphicons edit" href="#edit-account" data-toggle="tab"><i></i>Sửa thông tin</a></li>
        <li><a class="glyphicons luggage" href="#projects" data-toggle="tab"><i></i>Ứng dụng của bạn</a></li>
    </ul>
</div>
<!-- // Widget heading END -->

<div class="widget-body">

<form class="form-horizontal">
<div class="tab-content">

<div class="tab-pane active widget-body-regular padding-none" id="overview">

    <div class="row-fluid row-merge">
        <div class="span3 center innerL innerTB">

            <div class="innerR">
                <!-- Profile Photo -->
                <a href="" class="thumb"><img src="<?php XC_URL?>/xvn/avatar/<?php echo member::getInstance()->account($_SESSION['xID'],"avatar");?>" alt="Profile" /></a>
                <div class="separator bottom"></div>
                <!-- // Profile Photo END -->

                <!-- Social Icons -->
                <a href="" class="glyphicons standard primary facebook"><i></i></a>
                <a href="" class="glyphicons standard twitter"><i></i></a>
                <a href="" class="glyphicons standard linked_in"><i></i></a>
                <div class="clearfix separator bottom"></div>
                <!-- // Social Icons END -->

                <!-- Twitter Section -->
                <h5 class="glyphicons single twitter"><i></i> Latest Feed</h5>
                <section class="twitter-feed">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="tweet"><?php echo application::getInstance()->get_feed($_SESSION['xID'])[0]->feedcontent;?>. <span class="label label-inverse"><?php echo application::getInstance()->get_feed($_SESSION['xID'])[0]->updatetime;?></span></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </section>
                <!-- Twitter Section END -->

            </div>

        </div>
        <div class="span9 containerBg innerTB">

            <div class="innerLR">
                <div class="row-fluid innerB">
                    <div class="span7">

                        <!-- About -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                            <div class="widget-head"><h4 class="heading glyphicons user"><i></i><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"firstname");?>&nbsp;<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?></h4></div>
                            <div class="widget-body">
                                <p><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?>.</p>
                            </div>
                        </div>
                        <!-- // About END -->

                    </div>
                    <div class="span5">

                        <!-- Bio -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                            <div class="widget-head"><h4 class="heading glyphicons calendar"><i></i>Thông tin <span>cá nhân</span></h4></div>
                            <div class="widget-body">
                                <ul class="unstyled icons margin-none">
                                    <li class="glyphicons birthday_cake"><i></i> <span class="label"><?php echo date("d",strtotime(member::getInstance()->get_member_info($_SESSION['xID'],"birthday")));?></span> <span class="label"><?php echo date("m",strtotime(member::getInstance()->get_member_info($_SESSION['xID'],"birthday")));?></span> <span class="label"><?php echo date("Y",strtotime(member::getInstance()->get_member_info($_SESSION['xID'],"birthday")));?></span></li>
                                    <li class="glyphicons tie"><i></i> <?php echo $xtype;?> <a href=""><?php echo member::getInstance()->bio($_SESSION['xID'],"workat");?></a></li>
                                    <li class="glyphicons certificate"><i></i> Độc thân</li>
                                    <li class="glyphicons microphone"><i></i> Biết Tiếng Anh ::: Tiếng Việt</li>
                                </ul>
                            </div>
                        </div>
                        <!-- // Bio END -->

                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span7">

                        <!-- Latest Orders/List Widget -->
                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">
                        <?php
                        $booklist = book::getInstance()->get_book_by_xid($_SESSION['xID']);
                        ?>
                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons shopping_cart"><i></i>Sách mới gửi</h4>
                                <a href="" class="details pull-right">xem tất cả</a>
                            </div>
                            <!-- // Widget Heading -->

                            <div class="widget-body list products">
                                <ul>
                                    <?php
                                    foreach($booklist as $book)
                                    {
                                        ?>
                                        <li>
                                            <span class="img"><img src="http://thuviengiaoduc.org/upload/thumb/<?php echo $book->bookimage;?>" alt="<?php echo $book->bookname;?>"></span>
                                            <span class="title"><?php echo substr($book->bookname,0,53);?><br/><strong>Lượt xem: <?php echo $book->bookview;?></strong></span>
                                            <span class="count"></span>
                                        </li>
                                        <?php

                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <!-- // Latest Orders/List Widget END -->

                        <div class="alert alert-primary">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <p>bla bla.</p>
                        </div>

                    </div>
                    <div class="span5">

                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons history"><i></i>Tài khoản</h4>
                                <a href="" class="details pull-right">xem tất cả</a>
                            </div>
                            <!-- // Widget Heading END -->

                            <div class="widget-body list">
                                <ul>
                                    <!-- List item -->
                                    <li>
                                        <span>Số dư</span>
                                        <span class="count">$ <?php echo member::getInstance()->bank($_SESSION['xID'],"xcoin");?></span>
                                    </li>
                                    <!-- // List item END -->

                                    <!-- List item -->
                                    <li>
                                        <span>SMS còn lại</span>
                                        <span class="count"><?php echo member::getInstance()->bank($_SESSION['xID'],"xsms");?></span>
                                    </li>
                                    <!-- // List item END -->
                                    <!-- List item -->
                                    <li>
                                        <span>Số bài viết</span>
                                        <span class="count"><?php echo member::getInstance()->bank($_SESSION['xID'],"xpost");?></span>
                                    </li>
                                    <!-- // List item END -->

                                </ul>
                            </div>
                        </div>

                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                            <!-- Widget Heading -->
                            <div class="widget-head">
                                <h4 class="heading glyphicons history"><i></i>Bài viết mới nhất</h4>
                            </div>
                            <!-- // Widget Heading END -->
                            <?php $blogest = application::getInstance()->get_blog_by_xid($_SESSION['xID'],true);?>
                            <div class="widget-body">
                                <?php echo  substr($blogest->blogcontent,0,200);?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Tab content -->
<div class="tab-pane widget-body-regular containerBg" id="edit-account">

<div class="widget widget-tabs widget-tabs-vertical row-fluid row-merge margin-none widget-body-white">

<!-- Widget heading -->
<div class="widget-head span3">
    <ul>
        <li class="active"><a class="glyphicons pencil" href="#account-details" data-toggle="tab"><i></i>Thông tin cá nhân</a></li>
        <li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i>Cài đặt tài khoản</a></li>
        <li><a class="glyphicons eye_open" href="#privacy-settings" data-toggle="tab"><i></i>Thiết lập bảo mật</a></li>
    </ul>
</div>
<!-- // Widget heading END -->

<div class="widget-body span9">

<div class="tab-content">
<div class="tab-pane active" id="account-details">

    <!-- Row -->
    <div class="row-fluid">

        <!-- Column -->
        <div class="span6">

            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Họ</label>
                <div class="controls">
                    <input type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"firstname");?>" class="span10" />
                    <span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="First name is mandatory"><i></i></span>
                </div>
            </div>
            <!-- // Group END -->

            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Tên</label>
                <div class="controls">
                    <input type="text" value="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?>" class="span10" />
                    <span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Last name is mandatory"><i></i></span>
                </div>
            </div>
            <!-- // Group END -->

            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Ngày sinh</label>
                <div class="controls">
                    <div class="input-append">
                        <input type="text" id="datepicker" class="span12" value="<?php echo date("d-m-Y",strtotime(member::getInstance()->get_member_info($_SESSION['xID'],"birthday")));?>" />
                        <span class="add-on glyphicons calendar"><i></i></span>
                    </div>
                </div>
            </div>
            <!-- // Group END -->

        </div>
        <!-- // Column END -->

        <!-- Column -->
        <div class="span6">

            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Giới tính</label>
                <div class="controls">
                    <select class="span12">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </div>
            </div>
            <!-- // Group END -->

            <!-- Group -->
            <div class="control-group">
                <label class="control-label">Quê quán</label>
                <div class="controls">
                    <input type="text" value="<?php echo member::getInstance()->tinh(member::getInstance()->get_member_info($_SESSION['xID'],"quequan_tinh"));?>" class="input-mini" />
                </div>
            </div>
            <!-- // Group END -->

        </div>
        <!-- // Column END -->

    </div>
    <!-- // Row END -->

    <div class="separator line bottom"></div>

    <!-- Group -->
    <div class="control-group row-fluid">
        <label class="control-label">Giới thiệu</label>
        <div class="controls">
            <textarea id="mustHaveId" class="wysihtml5 span12" rows="5"><?php echo member::getInstance()->get_member_info($_SESSION['xID'],"slogan");?>.</textarea>
        </div>
    </div>
    <!-- // Group END -->

    <!-- Form actions -->
    <div class="form-actions" style="margin: 0;">
        <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Lưu thay đổi</button>
        <button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Hủy bỏ</button>
    </div>
    <!-- // Form actions END -->

</div>
<div class="tab-pane" id="account-settings">

    <!-- Row -->
    <div class="row-fluid">

        <!-- Column -->
        <div class="span3">
            <strong>Thông tin đăng nhập</strong>
            <p class="muted">Thông tin đăng nhập sử dụng cho tất cả ứng dụng tại hệ thống giáo dục Xiao.</p>
        </div>
        <!-- // Column END -->

        <!-- Column -->
        <div class="span9">
            <label for="inputUsername">Mã thành viên</label>
            <input type="text" id="inputUsername" class="span10" value="<?php echo $_SESSION['xID']?>" disabled="disabled" />
            <span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Username can't be changed"><i></i></span>
            <div class="separator"></div>

            <label for="inputUsername">Tài khoản</label>
            <input type="text" id="inputUsername" class="span10" value="<?php echo $_SESSION['xUser']?>" disabled="disabled" />
            <span style="margin: 0;" class="btn-action single glyphicons circle_question_mark" data-toggle="tooltip" data-placement="top" data-original-title="Username can't be changed"><i></i></span>
            <div class="separator"></div>


            <label for="inputPasswordNew">Mật khẩu mới</label>
            <input type="password" id="inputPasswordNew" class="span12" value="" placeholder="Để trống nếu không muốn thay đổi" />
            <div class="separator"></div>

            <label for="inputPasswordNew2">Nhập lại mật khẩu mới</label>
            <input type="password" id="inputPasswordNew2" class="span12" value="" placeholder="Để trống nếu không muốn thay đổi" />
            <div class="separator"></div>
        </div>
        <!-- // Column END -->

    </div>
    <!-- // Row END -->

    <div class="separator line bottom"></div>

    <!-- Row -->
    <div class="row-fluid">

        <!-- Column -->
        <div class="span3">
            <strong>Thông tin liên hệ</strong>
            <p class="muted">Để đảm bảo quyền lợi của thành viên, hãy vui lòng cung cấp cho chúng tôi thông tin thật của bạn.</p>
        </div>
        <!-- // Column END -->

        <!-- Column -->
        <div class="span9">
            <div class="row-fluid">
                <div class="span6">
                    <label for="inputPhone">Điện thoại</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons phone"><i></i></span>
                        <input type="text" id="inputPhone" class="input-large" placeholder="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong");?>" />
                    </div>
                    <div class="separator"></div>

                    <label for="inputEmail">E-mail</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons envelope"><i></i></span>
                        <input type="text" id="inputEmail" class="input-large" placeholder="<?php echo member::getInstance()->account($_SESSION['xID'],"email");?>" />
                    </div>
                    <div class="separator"></div>

                    <label for="inputWebsite">Website</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons link"><i></i></span>
                        <input type="text" id="inputWebsite" class="input-large" placeholder="http://xem.xiao.vn/u/<?php echo member::getInstance()->account($_SESSION['xID'],"username");?>" />
                    </div>
                    <div class="separator"></div>
                </div>
                <div class="span6">
                    <label for="inputFacebook">Facebook</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons facebook"><i></i></span>
                        <input type="text" id="inputFacebook" class="input-large" placeholder="/<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"facebook");?>" />
                    </div>
                    <div class="separator"></div>

                    <label for="inputTwitter">Twitter</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons twitter"><i></i></span>
                        <input type="text" id="inputTwitter" class="input-large" placeholder="/<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"twitter");?>" />
                    </div>
                    <div class="separator"></div>

                    <label for="inputSkype">Skype ID</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons skype"><i></i></span>
                        <input type="text" id="inputSkype" class="input-large" placeholder="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"skype");?>" />
                    </div>
                    <div class="separator"></div>

                    <label for="inputYahoo">Yahoo ID</label>
                    <div class="input-prepend">
                        <span class="add-on glyphicons yahoo"><i></i></span>
                        <input type="text" id="inputYahoo" class="input-large" placeholder="<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"yahoo");?>" />
                    </div>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <!-- // Column END -->

    </div>
    <!-- // Row END -->

    <!-- Form actions -->
    <div class="form-actions" style="margin: 0;">
        <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Lưu thay đổi</button>
    </div>
    <!-- // Form actions END -->

</div>
<div class="tab-pane" id="privacy-settings">
    <div class="uniformjs">
        <label class="checkbox"><input type="checkbox" checked="checked" /> Gửi tất cả thông báo về email.</label>
        <label class="checkbox"><input type="checkbox" /> Cho phép xem thông tin cá nhân của bạn.</label>
        <label class="checkbox"><input type="checkbox" /> Nhận tin nhắn từ các thành viên khác.</label>
        <div class="alert alert-primary">
            <a class="close" data-dismiss="alert">&times;</a>
            <p>Tùy chỉnh các thiết lập để bảo mật tài khoản của bạn tốt hơn. Bất cứ nghi ngờ nào về việc tài khoản bị xâm nhập, hãy liên hệ ngay với BQT để được trợ giúp.</p>
        </div>
    </div>
</div>
</div>

</div>
</div>

</div>
<!-- // Tab content END -->

<!-- Tab content -->
<div class="tab-pane widget-body-regular" id="projects">

    <div class="well">
        <button type="button" class="btn btn-primary btn-icon glyphicons circle_plus pull-right"><i></i>Ứng dụng khác</button>
        <p class="lead margin-none"><strong>1024</strong> hoạt động trong tuần</p>
        <div class="clearfix"></div>
    </div>

    <table class="table table-striped table-vertical-center table-projects table-bordered">
        <thead>
        <tr>
            <th colspan="2">Ứng dụng</th>
            <th width="100" class="center"></th>
            <th width="100" class="center"></th>
            <th width="140" class="center"></th>
            <th width="120" class="center"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="80" class="center"><span class="thumb"><img src="80-avatar.jpg" alt="" /></span></td>
            <td class="important">Thư viện trực tuyến</td>
            <td class="center stats"><span>Điểm của bạn</span><span class="count"><?php echo member::getInstance()->get_score($_SESSION['xID'],'8317808');?></span></td>
            <td class="center stats"><span>Điểm cao nhất</span><span class="count"><?php echo member::getInstance()->get_max_score("8317808")?></span></td>
            <td class="center stats"><span>Thứ hạng của bạn</span><span class="count"><?php echo member::getInstance()->get_rank_of_xid($_SESSION['xID'],"8317808");?></span></td>
            <td class="center"><button type="button" class="btn btn-default">Thông tin</button></td>
        </tr>
        <tr>
            <td width="80" class="center"><span class="thumb"><img src="admin-avatar-12.jpg" alt="" /></span></td>
            <td class="important">Học trực tuyến</td>
            <td class="center stats"><span>Điểm của bạn</span><span class="count"><?php echo member::getInstance()->get_score($_SESSION['xID'],'8313824');?></span></td>
            <td class="center stats"><span>Điểm cao nhất</span><span class="count"><?php echo member::getInstance()->get_max_score("8313824")?></span></td>
            <td class="center stats"><span>Thứ hạng của bạn</span><span class="count"><?php echo member::getInstance()->get_rank_of_xid($_SESSION['xID'],"8313824");?></span></td>
            <td class="center"><button type="button" class="btn btn-default">Thông tin</button></td>
        </tr>
        <tr>
            <td width="80" class="center"><span class="thumb"><img src="avatar80.jpg" alt="" /></span></td>
            <td class="important">Luyện thi trắc nghiệm</td>
            <td class="center stats"><span>Điểm của bạn</span><span class="count"><?php echo member::getInstance()->get_score($_SESSION['xID'],'8318053');?></span></td>
            <td class="center stats"><span>Điểm cao nhất</span><span class="count"><?php echo member::getInstance()->get_max_score("8318053")?></span></td>
            <td class="center stats"><span>Thứ hạng của bạn</span><span class="count"><?php echo member::getInstance()->get_rank_of_xid($_SESSION['xID'],"8318053");?></span></td>
            <td class="center"><button type="button" class="btn btn-default">Thông tin</button></td>
        </tr>
        <tr>
            <td width="80" class="center"><span class="thumb"><img src="boot-admin-80_v13.jpg" alt="" /></span></td>
            <td class="important">Cuộc thi - Phượng Hồng</td>
            <td class="center stats"><span>Điểm của bạn</span><span class="count"><?php echo member::getInstance()->get_score($_SESSION['xID'],'8316331');?></span></td>
            <td class="center stats"><span>Điểm cao nhất</span><span class="count"><?php echo member::getInstance()->get_max_score("8316331")?></span></td>
            <td class="center stats"><span>Thứ hạng của bạn</span><span class="count"><?php echo member::getInstance()->get_rank_of_xid($_SESSION['xID'],"8316331");?></span></td>
            <td class="center"><button type="button" class="btn btn-default">Thông tin</button></td>
        </tr>
        </tbody>
    </table>

</div>
<!-- // Tab content END -->
</div>
</form>
</div>
</div>
<!-- // Widget END -->

</div>


</div>
</div>
<script>
    var username = '<?php echo member::getInstance()->account($_SESSION['xID'],"username");?>',
        name = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"name");?>',
        phone = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"didong");?>',
        yahoo = '<?php echo member::getInstance()->get_member_info($_SESSION['xID'],"yahoo");?>';
</script>
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