<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/11/13
 * Time: 3:10 PM
 * To change this template use File | Settings | File Templates.
 */
Class adminmemberModel extends baseModel
{
    public function memberquery($sql,$fr)
    {
        global $db;
        $result = $db->query($sql);
        return $db->fetch_object($first_row = $fr);
    }
}