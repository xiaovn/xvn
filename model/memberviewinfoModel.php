<?php
/**
 * Created by JetBrains PhpStorm.
 * User: XIAO
 * Date: 8/8/13
 * Time: 5:50 PM
 * To change this template use File | Settings | File Templates.
 */
Class memberviewinfoModel extends baseModel
{
    //xem thông tin cá nhân
    public function  get_view_info($xid,$info)
    {
        global $db;
        $db->query('SERLECT '.$info.' FROM xdata_info WHERE xid = '.$xid);
        return $db->fetch_object();
    }
}