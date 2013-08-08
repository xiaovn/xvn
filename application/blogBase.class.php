<?php
/**
 * Project: xvn.
 * File: blogBase.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 6:44 AM - 8/4/13
 * Website: www.xiao.vn
 */
class blogBase{

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
            self::$instance = new blogBase();
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
    public function get_cat_name($cid)
    {
        global $db;
        $blog = $db->query("SELECT * FROM xdata_blog_category WHERE catid=".$cid);
        $me = $db->fetch_object($first_row = true);
        return $me->catname;
    }
}