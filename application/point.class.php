<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 26/09/2013
 * Time: 13:21
 * To change this template use File | Settings | File Templates.
 */
Class Point{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new Point();
        }
        return self::$instance;
    }
    public function get()
    {
        global $db;
        $db->query("SELECT * FROM xdata_account WHERE id=1");
        $mon = $db->fetch_object($first_row = true);
        return $mon->xid;
    }
    // UPDATE QUERY CONTROL

}