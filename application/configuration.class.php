<?php
/**
 * Project: xvn.
 * File: configuration.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:01 PM - 8/29/13
 * Website: www.xiao.vn
 */
Class configuration{
    private static $instance;
    function __construct(){

    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new configuration();
        }
        return self::$instance;
    }
    //Function here
}