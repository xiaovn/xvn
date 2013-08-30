<?php
/**
 * Project: xvn.
 * File: contactController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 1:11 PM - 7/31/13
 * Website: www.xiao.vn
 */
Class contactController extends baseController
{
    public function index()
    {
        if(isset($_POST['name']))
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $this->mail->send("guest@xiao.vn",$name,"xiao-all@xiao.vn","Contact from Web",$message.$phone);
            $this->view->show('contact_index');
        }
        else
        {
            $this->view->data['contact_heading'] = 'Liên hệ/Trợ giúp';
            $this->view->show('contact_index');
        }
    }
}