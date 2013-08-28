<?php
/**
 * Project: xvn.
 * File: testModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:48 PM - 8/27/13
 * Website: www.xiao.vn
 */
Class testModel extends baseModel
{
    public function get_ten_mon($mamon,$manhom)
    {
        global $db;
        $db->query("SELECT * FROM xdata_monhoc WHERE mamon = ".$mamon." AND nhommon=".$manhom);
        return $db->fetch_object();
    }
}