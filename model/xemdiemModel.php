<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kim Hyo Sun
 * Date: 8/8/13
 * Time: 8:28 PM
 * To change this template use File | Settings | File Templates.
 */
class xemdiemModel extends baseModel
{
    public function get_diem($xid,$diem)
    {
        global $db;
        $db->query('SELECT '.$diem.' FROM xdata_diem WHERE xid='.$xid);
        return $db->fetch_object();
    }
}
?>