<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/10/13
 * Time: 3:02 PM
 * To change this template use File | Settings | File Templates.
 */
Class ngocvietModel extends baseModel
{
    public function mo_bung_thang_hoc($xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_info WHERE xid = '".$xid."'");
        return $db->fetch_object($first_row = true);
    }
}