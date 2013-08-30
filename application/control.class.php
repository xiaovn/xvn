<?php
/**
 * Project: xvn.
 * File: control.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:04 AM - 8/30/13
 * Website: www.xiao.vn
 */
Class control{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new control();
        }
        return self::$instance;
    }

    public function xselect($table,$field = "*",$ws,$ob,$sort = "ASC")
    {
        $whe = "";
        $orderb = "";
        $sql = "SELECT ".$field." FROM ".$table;
        if($ws != "")
        {
            $sql .= " WHERE ".$ws;
        }
        if($ob != "")
        {
            $orderb = " ORDER BY ".$ob." ".$sort;
        }
            global $db;
            $db->query($sql);
            return $db->fetch_object();
    }
}