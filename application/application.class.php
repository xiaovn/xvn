<?php
/**
 * Project: xvn.
 * File: application.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:59 PM - 8/29/13
 * Website: www.xiao.vn
 */
Class application{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new application();
        }
        return self::$instance;
    }
    // SELECT QUERY CONTROL
    public function get_tenmon($mamon)
    {
        global $db;
        $db->query("SELECT tenmon FROM xdata_monhoc WHERE mamon=".$mamon);
        $mon = $db->fetch_object($first_row = true);
        return $mon->tenmon;
    }
    // UPDATE QUERY CONTROL
    // INSERT QUERY CONTROL
    // DELETE QUERY CONTROL
}