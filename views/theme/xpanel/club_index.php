<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/18/13
 * Time: 4:02 PM
 * To change this template use File | Settings | File Templates.
 */
require_once "header_login.php";
?>
    <!-- Content -->
    <div id="content">

        <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
        <?php
        require_once "nav.php";
        ?>
        <!-- Top navbar END --><!-- Wrapper -->
        <div id="login">

            <div class="container">

                <div class="wrapper">

                    <!-- Box -->
                    <div class="widget widget-heading-simple widget-body-gray">

                        <div class="widget-body">

                            <!-- Form -->
                            <form method="post" action="">
                                <tr>
                                    <label>Chọn loại nhóm</label>
                                    <td>
                                        <select name="clubgroup" id="clubgroup" style="width:322px;">
                                            <option value="0"><?php echo "Club Group";?></option>
                                            <option value="7777701"><?php echo "Học tập";?></option>
                                            <option value="7777702"><?php echo "Giải trí";?></option>
                                            <option value="7777703"><?php echo "Ý tưởng hoặc Cộng đồng";?></option>
                                            <option value="7777704"><?php echo "Địa phương hoặc Địa điểm";?></option>
                                            <option value="7777705"><?php echo "Nghệ sĩ, ban nhạc hoặc người của công chúng";?></option>
                                        </select>
                                    </td>
                                </tr>
                                <label>Nhập tên nhóm</label>
                                <input type="text" name="clubname" class="input-block-level" placeholder="Club Name"/>
                                <label>Nhập mã nhóm</label>
                                <input type="text" name="clubid" class="input-block-level" placeholder="Club ID"/>
                                <label>Ảnh đại diện</label>
                                <div class = "col_right">
                                    <input type="file" name="clublogo" id="ct100_ContentPlaceHolder1_fFileUpload1" tabindex="10" title="Giới hạn cho phép dung lượng ảnh là 10 megabyte. Định dạng file được phép upload: .jpg, .gif, .png, .jpeg, .bmp" style="height: 30px;width: 250px;">
                                </div>
                                <div class="separator bottom"></div>
                                <div class="row-fluid">
                                    <div class="span8">
                                    </div>
                                    <div class="span4 center">
                                        <button class="btn btn-block btn-inverse" type="submit">Tạo nhóm</button>
                                    </div>
                                </div>
                            </form>
                            <!-- // Form END -->

                        </div>
                        <div class="widget-footer">
                            <p class="glyphicons restart"><i></i>Nhóm là nơi các thành viên giao lưu học hỏi...
                            </p>
                        </div>
                    </div>
                    <!-- // Box END -->

                </div>

            </div>

        </div>
        <!-- // Wrapper END -->
    </div>
<?php
require_once "footer.php";
?>