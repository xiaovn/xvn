<?php
/**
 * Project: xvn.
 * File: adminloginModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:57 AM - 8/26/13
 * Website: www.xiao.vn
 */
Class adminloginModel extends baseModel
{
    public function check_login($user,$pass)
    {
        global $db;
        $cl = $db->query("SELECT * FROM xdata_account WHERE (username = '".$user."' OR id = '".$user."' OR email = '".$user."')  AND (xgroup = 2261010 OR xgroup = 2263629) AND password = '".$pass."'");
        if(mysql_num_rows($cl) == 1)
        {
            $row = $db->fetch_object($first_row = true);
            $_SESSION['xID'] = $row->xid;
            $_SESSION['xUser'] = $row->username;
            $_SESSION['xEmail'] = $row->email;
            $_SESSION['xGroup'] = $row->xgroup;
            $_SESSION['LoggedIn'] = 1;
            return true;
        }
        else
        {
            return false;
        }
    }
}