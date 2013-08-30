<?php
/**
 * Project: xvn.
 * File: thoikhoabieuController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:40 PM - 8/24/13
 * Website: www.xiao.vn
 */

Class thoikhoabieuController extends baseController
{
    public function index()
    {
        $lop ='8226572';
        $dstkb = $this->model->get('tkbModel')->gettkb($lop);
        $xid = "a";
        $a = $this->member->get_member_info($xid,"name");
        $lop = $this->member->getlop($xid);
        school::getInstance()->tenlop($lop);
        $t = "";
        foreach($dstkb as $tkb)
        {
            $t[$tkb->thu][$tkb->tiet] = $tkb->mon;
        }
        $this->view->data['tkbs'] = $t;
        $this->view->show('app_tkb');
    }
}