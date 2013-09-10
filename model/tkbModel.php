<?php
/**
 * Project: xvn.
 * File: tkbModel.php.
 * Author: Kim Hyo Sun
 * Email: ngocviet@xiao.vn
 * Create Date: 9:21 PM - 8/27/13
 * Website: www.xiao.vn
 */
Class tkbModel extends baseModel
{
    public function getmon($thu, $tiet, $buoi,$malop, $nhommon)
    {
        global $db;
        $db->query("SELECT mon FROM xdata_tkb WHERE thu= ".$thu." AND tiet=".$tiet." AND buoi=".$buoi." AND lop=".$malop." AND nhommon=".$nhommon);
        $a =  $db->fetch_object($first_row = true);
        return $a->mon;
    }
    public function gettkb($malop)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE lop=".$malop);
        return $db->fetch_object();
    }
    public function gettkb_gv($magv)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE giaovien=".$magv);
        return $db->fetch_object();
    }
}