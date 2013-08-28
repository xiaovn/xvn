<?php
/**
 * Project: xvn.
 * File: book.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:19 PM - 8/26/13
 * Website: www.xiao.vn
 */
Class book{


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
            self::$instance = new book();
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
    public function get_top_post()
    {
        global $db;
        $blog = $db->query("SELECT * FROM xiaob_memlog ORDER BY upload DESC LIMIT 1");
        $me = $db->fetch_object($first_row = true);
        return $me;

    }
    public function countbook($catid)
    {
        global $db;
        if($catid == 0)
        {
            $co = $db->query("SELECT * FROM xiaob_book");
            return $db->num_row();
        }
        else
        {
            $co = $db->query("SELECT * FROM xiaob_book WHERE bookcat = ".$catid);
            return $db->num_row();
        }
    }
    public function bookthumb($bookimage)
    {
        $bt = "noimage.png";
        if($bookimage == "")
        {
            $bt = "noimage.png";
        }
        else
        {
            $bt = $bookimage;
        }
        return $bt;
    }
}