<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 11:30 AM
 * To change this template use File | Settings | File Templates.
 */
Class applicationModel Extends baseModel
{
    public function get_applist()
    {
        global $db;
        $app = $db->query('SELECT * FROM xdata_application');
        return $db->fetch_object();
    }
    //module view application list
}