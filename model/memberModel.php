<?php
/**
 * Project: xvn.
 * File: memberModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:38 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class memberModel Extends baseModel
{
    public function get_mem()
    {
        global $db;
        $mem = $db->query('SELECT * FROM xdata_account');
        return $db->fetch_object();
    }
    public function get_member_detail($id)
    {
        global $db;
        $blog = $db->query('SELECT * FROM xdata_account where xid = '.$db->sqlQuote($id));
        return $db->fetch_object($first_row = true);
    }
    public function set_member_info($xid,$info,$value)
    {
        global $db;
        switch($info)
        {
            case "name":
                $db->query("UPDATE FROM xdata_info");
                break;
            case "age":
                break;
            case "birthday":
                break;
            default:
                break;
        }

    }
    public function addfriend($xid1,$xid2)
    {
        global $db;
        $db->query("INSERT INTO xdata_friend(`xid1`,`xid2`,`from`) VALUE ('".$xid1."','".$xid2."',CURRENT_TIMESTAMP)");
    }
}
