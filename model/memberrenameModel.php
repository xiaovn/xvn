<?php
/**
 * Created by JetBrains PhpStorm.
 * User: XIAO
 * Date: 8/8/13
 * Time: 5:45 PM
 * To change this template use File | Settings | File Templates.
 */
Class memberrenameModel extends baseModel
{
    // Đổi tên tài khoản
    public function get_member_checkusername($xid,$username)
    {
        global $db;
        $check = $db->query('SELECT * FROM xdata_account where username = '.$username.' and xid = '.$xid);
        if(mysql_num_rows($check)>=1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_member_changeusername($xid,$username)
    {
        global $db;
        $db->query('UPDATE xdata_account SET username = '.$username.' WHERE xid = '.$xid);
    }
}