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
}