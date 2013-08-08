<?php
/**
 * Created by JetBrains PhpStorm.
 * User: XIAO
 * Date: 8/8/13
 * Time: 3:55 PM
 * To change this template use File | Settings | File Templates.
 */
//Đổi thông tin cá nhân
Class memberupdateinfoModel extends baseModel
{
    public function get_update_info($xid,$info,$value)
    {
        global $db;
        $db->query('UPDATE xdata_info SET '.$info.' = '.$value.' WHERE xid = '.$xid);
    }
}

