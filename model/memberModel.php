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
    public function actionLogin($user,$pass)
    {
        global $db;
        $member = $db->query('SELECT * FROM xdata_account where username = '.$user.' and password='.$pass);
        $_SESSION['member']['xID'] = $member['xid'];
    }
}
