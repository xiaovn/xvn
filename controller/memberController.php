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
        $this->view->data['members'] =  $this->model->get("memberModel")->get_mem();
        $this->view->data['member_heading'] = 'This is the member Index';
        $this->view->show('member_index');
    }
    public function view($args){
        $id_mem = $args[1];
        $member_info = $this->model->get('memberModel')->get_member_detail($id_mem);
        $this->view->data['member_heading'] = $member_info->user;
        $this->view->data['member_info'] = $member_info->email;
        $this->view->show('member_view');
    }
    public function login()
    {
        $this->view->data['member_heading'] = 'This is the member Login';
        $this->view->show('member_login');
    }

}