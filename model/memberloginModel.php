<?php
/**
 * Project: xvn.
 * File: memberloginModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:31 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class memberloginModel extends baseModel
{
    public function check_login()
    {
        global $db;
        $count_mem = $db->query('SELECT count(*) FROM mem');
        if($count_mem)
        {
            return true;
        }
        else
            return false;
    }
}