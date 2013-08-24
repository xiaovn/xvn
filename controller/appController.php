<?php
/**
 * Project: xvn.
 * File: appController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:52 AM - 7/31/13
 * Website: www.xiao.vn
 */

Class appController extends baseController
{
    public function index()
    {
        $this->view->data['app_heading'] = 'This is the application area';
        $this->view->show('app_index');
    }
    public function diemthi()
    {
        $this->view->data['a'] = $this->model->get('diemModel')->getdiem();
        $this->view->show('app_diemthi');
    }
    public function tkb()
    {
        $this->view->data['tkb_list'] = $this->model->get('ShowtkbModel')->get_tkb_student('8226572','2318869');
        $this->view->show('app_tkb');
    }
}