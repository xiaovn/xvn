<?php
/**
 * Project: xvn.
 * File: diemController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:52 AM - 8/24/13
 * Website: www.xiao.vn
 */

Class diemController extends baseController
{
    public function index()
    {
        $this->view->data['a'] = $this->model->get('diemModel')->getdiem();
        $this->view->show('app_diemthi');

    }
    public  function diem()
    {
        $this->view->data['diem'] = $this->model->get('xemdiemModel')->getdiem();
        $this->view->show('diemthi');
    }
}
?>