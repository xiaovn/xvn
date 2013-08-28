<?php
/**
 * Project: xvn.
 * File: tkbModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 9:21 PM - 8/27/13
 * Website: www.xiao.vn
 */
Class tkbModel extends baseModel
{
    public function getmon($thu, $tiet, $buoi,$lop, $nhommon)
    {
        global $db;
        $db->query("SELECT mon FROM xdata_tkb WHERE thu= ".$thu." AND tiet=".$tiet." AND buoi=".$buoi." AND lop=".$lop." AND nhommon=".$nhommon);
        $a =  $db->fetch_object($first_row = true);
        return $a->mon;
    }
    public function gettkb($lop)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE lop=".$lop);
        return $db->fetch_object();
    }

}