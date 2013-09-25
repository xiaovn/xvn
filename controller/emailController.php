<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/23/13
 * Time: 7:11 AM
 * To change this template use File | Settings | File Templates.
 */
Class emailController extends baseController
{
    public function index()
    {

    }
    public function email($pa)
    {
        $xid = $pa[1];
        $kt = $pa[2];
        if(isset($xid) && $xid != ""&&isset($kt) && $kt != "")
        {
            $from = "support@xiao.vn";
            $name = member::getInstance()->get_member_info($xid,'name');
            $to = member::getInstance()->get_account($xid,'email');
            switch($kt)
            {
                case "dangkytaikhoan";
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Thông tin từ Xiao.vn","<p><B>Chào mừng bạn đến với Xiao!</B> Bạn có thể đăng nhập vào tài khoản của mình tại http://xem.xiao.vn/.</p>
<p>Dưới đây là một số mẹo giúp bạn bắt đầu:</p>
<p>Sử dụng các dịch vụ tùy theo nhu cầu sử dụng sẽ mang lại hiệu quả cao nhất cho bạn!.</p>
<p>Nếu bạn gặp sự cố với tài khoản của mình hoặc quên mật khẩu, chúng tôi sẽ liên hệ với bạn theo địa chỉ này.</p>
<p>Hãy trải nghiệm!</p>

<p>Dịch vụ của chúng tôi</p>");
                    $this->view->show('dangky_email');
                    break;
                }
                case "sinhnhat":
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Chúc mừng sinh nhật","<p><B>Chúc mừng sinh nhật.</B><p><p>Cộng đồng Xiao chúc bạn một sinh nhật đầm ấm yêu thương và tràn đầy hạnh phúc!<p>");
                    $this->view->show('sinhnhat_email');
                    break;
                }
                case "doimatkhau":
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Hỗ trợ đổi mật khẩu","<p><B>Hãy truy cập vào liên kết bên dưới để tiến hành đổi mật khẩu:</B></p> <p>Liên kết http://www.xem.xiao.vn/newpass999.php</p>");
                    $this->view->show('doimatkhau_email');
                    break;
                }
                case "doimatkhauthanhcong":
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Thông báo tài khoản","<p><B>Bạn đã đổi mật khẩu thành công.</B></p> <p>Để sử dụng dịch vụ bạn truy cập vào: http://www.xem.xiao.vn</p>");
                    $this->view->show('doimatkhautc_email');
                    break;
                }
                case "capnhatthongtin":
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Thông tin đã cập nhật","<p></B>Thông báo hệ thống Xiao</B></p> <p>Bạn vừa thực hiện cập nhật thông tin tài khoản trên hệ thống</p>");
                    $this->view->show('capnhatthongtin_email');
                    break;
                }
                case "naptien":
                {
                    baseMailler::getInstance()->send($from,$name,$to,"Thống kê giao dịch","<p><B>Bạn đã thực hiện nạp tiền vào tài khoản thành công.</B></p> <p>Để xem số dư hiện tại của bạn vui lòng truy cập: http://www.xem.xiao.vn</p>");
                    $this->view->show('naptien_email');
                    break;
                }
                default;
                $this->view->show('error404');
            }
       }
        else
        {
            $this->view->show('error404');
        }
    }
}