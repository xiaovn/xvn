<?php
/**
 * Project: xvn.
 * File: memberController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class memberController extends baseController
{
    public function index()
    {
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1)
        {
            $this->view->data['members'] =  $this->model->get("memberModel")->get_mem();
            $this->view->data['member_heading'] = 'This is the member Index';
            $this->view->show('member_index');
        }
        else
        {
            $this->redirect->redirect("member","login");
        }

    }
    public function view($args){
        $id_mem = $args[1];
        $member_info = $this->model->get('memberModel')->get_member_detail($id_mem);
        $this->view->data['member_heading'] = $member_info->username;
        $this->view->data['member_info'] = $member_info->email;
        $this->view->show('member_view');
    }
    public function logout()
    {
        session_destroy();
        $this->redirect->redirect("index");
    }
    public function login()
    {
        if(isset($_POST['username']))
        {
            $username = mysql_real_escape_string($_POST["username"]);
            $password = md5(mysql_real_escape_string($_POST["password"]));
            $member_login = $this->model->get('memberloginModel')->check_login($username,$password);
            if($member_login)
            {
                $this->view->data['member_heading'] = 'This is the member Login with'.$_SESSION['xID'];
                //$this->view->show('member_index');
                $this->redirect->redirect("member","index");
            }
            else
            {
                $this->view->data['member_heading'] = 'Khong thanh cong';
                $this->view->show('member_login');
            }
        }
        else
        {
            $this->view->data['member_heading'] = 'Đăng nhập';
            $this->view->show('member_login');
        }
    }
    public function signup()
    {
        $this->view->data['member_heading'] = 'This is the member Signup';
        $this->view->show('member_signup');
    }
    public function account()
    {
        $this->view->data['member_heading'] = 'This is the member Signup';
        $this->view->show('member_account');
    }
    public function thongtin()
    {
        //$xid = '2254489252';
        $xid = $_SESSION['xID'];
        $this->view->data['hoten'] = member::getInstance()->get_member_info($xid,'name');
        $this->view->data['ngaysinh'] = member::getInstance()->get_member_info($xid,'birthday');
        $this->view->data['namhoc']=member::getInstance()->get_member_hocsinh($xid,'namhoc');
        $this->view->data['hsmail']=member::getInstance()->get_member_account($xid,'email');
        $this->view->data['hsyahoo']=member::getInstance()->get_member_account($xid,'yahoo');
        $this->view->data['didong']=member::getInstance()->get_member_info($xid,'didong');
        $this->view->data['dienthoai'] = member::getInstance()->get_member_info($xid,'dienthoai');
        $this->view->data['lop'] = member::getInstance()->tenlop(member::getInstance()->getlop($xid));
        if((member::getInstance()->get_member_info($xid,'sex'))==1)
        {
            $this->view->data['gioitinh'] = "Nam";
        }
        elseif((member::getInstance()->get_member_info($xid,'sex'))==0)
        {
            $this->view->data['gioitinh'] = "Nữ";
        }
        else
        {
            $this->view->data['gioitinh'] = "Khác";
        }
        $this->view->data['honnhan']=member::getInstance()->get_honnhan(member::getInstance()->get_mahonnhan($xid));
        $this->view->data['avatar']=member::getInstance()->anhdaidien(member::getInstance()->idfriend($xid));
        $this->view->show('member_index');
    }
}