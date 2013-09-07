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
    //07/97/2013_ viet
    public function show_exm()
    {
        return "aaaaaaaaaaab";
    }
    public function get_subj_name($subj_id)
    {
        if($subj_id != "")
        {
            global $db;
            $blog = $db->query("SELECT tenmon FROM xdata_monhoc WHERE mamon=".$subj_id);
            $me = $db->fetch_object($first_row = true);
            return $me->tenmon;
        }
        else return "";

    }
    public function get_blog_list($type = "feature")
    {
        global $db;
        switch($type)
        {
            case "feature":
                $db->query("SELECT * FROM xdata_blog ORDER BY viewcount DESC LIMIT 5");
                break;
            case "topcomment":
                $db->query("SELECT * FROM xdata_blog ORDER BY commentcount DESC LIMIT 5");
                break;
            case "topview":
                $db->query("SELECT * FROM xdata_blog ORDER BY viewcount DESC LIMIT 5");
                break;
            case "toplike":
                $db->query("SELECT * FROM xdata_blog ORDER BY likecount DESC LIMIT 5");
                break;
            case "topshare":
                $db->query("SELECT * FROM xdata_blog ORDER BY sharecount DESC LIMIT 5");
                break;
            case "newest":
                $db->query("SELECT * FROM xdata_blog ORDER BY id DESC LIMIT 5");
                break;
            default:
                $db->query("SELECT * FROM xdata_blog ORDER BY id DESC LIMIT 5");
                break;
        }
        return $db->fetch_object($first_row = false);
    }
}