<?php
/**
 * Project: xvn.
 * File: resetController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 12:11 - 30/12/2013
 * Website: www.xiao.vn
 */
Class resetController extends baseController
{
    public function index()
    {

    }
    private function newpassword($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    public function password()
    {
        $token = $_GET['key'];
        $xid = $_GET['xid'];
        if(member::getInstance()->account($xid,"xtoken") == $token)
        {
            $newpass = $this->newpassword(10);
            $name = member::getInstance()->info($xid,"firstname")." ".member::getInstance()->info($xid,"name");
            $email = member::getInstance()->account($xid,"email");
            global $db;
            $db->query("UPDATE xdata_account SET password = '".md5($newpass)."',xtoken = '' WHERE xid = '".$xid."'");
            $this->mail->sendersmtp($name,$email,"newpass","",$newpass);
            $this->view->data['result'] = "Khôi phục mật khẩu thành công, vì tính chất bảo mật, mật khẩu mới sẽ được gửi đến email của bạn, vui lòng kiểm tra email để tiếp tục. Xin cảm ơn!";
        }
        else
        {
            $this->view->data['result'] = "Lỗi: 8221 - Liên kết này không đúng hoặc không còn hiệu lực! Vui lòng kiểm tra lại hoặc liên hệ với BQT!";
        }
        $this->view->show("newpass_view");
    }
}