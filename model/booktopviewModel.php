<?php
/**
 * Project: xvn.
 * File: booktopviewModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:05 AM - 8/27/13
 * Website: www.xiao.vn
 */
Class booktopviewModel extends baseModel
{
    public function gettopbook()
    {
        global $db;
        $db->query("SELECT * FROM xiaob_book ORDER BY bookview DESC");
        return $db->fetch_object($first_row = true);
    }
}