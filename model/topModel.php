<?php
/**
 * Project: xvn.
 * File: topModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:59 PM - 8/26/13
 * Website: www.xiao.vn
 */

Class topModel extends baseModel
{
    public function gettop($table,$field)
    {
        global $db;
        $db->query("SELECT * FROM ".$table." ORDER BY ".$field." DESC LIMIT 1");
        return $db->fetch_object($first_row = true);
    }
}