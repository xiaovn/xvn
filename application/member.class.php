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
    public function sex($sex)
    {
        if(isset($sex) && $sex != "")
        {
            if($sex == 1)
            {
                return "Nam";
            }
            elseif($sex == 0)
            {
                return "Nữ";
            }
            else
            {
                return "Khác";
            }
        }
        else
        {
            return "";
        }
    }
    public function get_member_info($xid,$xfunc)
    {
        global $db;
        $blog = $db->query("SELECT ".$xfunc." FROM xdata_info WHERE xid=".$xid);
        $me = $db->fetch_object($first_row = true);
        return $me->$xfunc;
    }
    public function account($xid,$info)
    {
        if(isset($xid) && $xid != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_account WHERE xid = ".$xid);
            $acc = $db->fetch_object($first_row = true);
            return $acc->$info;
        }
        else
        {
            return "";
        }
    }
    public function info($xid,$info)
    {
        if(isset($xid) && $xid != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_info WHERE xid = ".$xid);
            $ifo = $db->fetch_object($first_row = true);
            return $ifo->$info;
        }
        else
        {
            return "";
        }
    }
}