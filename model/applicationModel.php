<?php
/***
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 2:15 PM
 * To change this template use File | Settings | File Templates.
 ***/
Class applicationModel Extends baseModel
{
    public function get_applist()
    {
        global $db;
        $app = $db->query('SELECT * FROM xdata_application');
        return $db->fetch_object();
    }
    public function get_app_detail($appid)
    {
        global $db;
        $app = $db->query("SELECT * FROM xdata_application WHERE appid =
        '".$appid."'");
        return $db->fetch_object($first_row = true);
    }
}
?>