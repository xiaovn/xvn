<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/9/13
 * Time: 4:22 PM
 * To change this template use File | Settings | File Templates.
 */
Class avatarupdateModel extends baseModel
{
    public function updateavatar($xid,$file)
    {
        global $db;
        $db->query("UPDATE xdata_account SET avatar = '".$file."' WHERE xid = '".$xid."'");
    }
}