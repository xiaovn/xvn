<?php
/**
 * Project: xvn.
 * File: member.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 6:31 AM - 8/4/13
 * Website: www.xiao.vn
 */
Class member{


    /*
     * @Variables array
     * @access public
     */
    private static $instance;

    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new member();
        }
        return self::$instance;
    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    public function show_exm()
    {
        return "aaaaaaaaaaab";
    }
    public function get_member_info($xid,$xfunc)
    {
        global $db;
        $blog = $db->query("SELECT * FROM xdata_info WHERE xid=".$xid);
        $me = $db->fetch_object($first_row = true);
        switch($xfunc)
        {
            case "name":
                return $me->name;
                break;
            default:
                break;
        }
    }
}