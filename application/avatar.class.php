<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/9/13
 * Time: 2:37 PM
 * To change this template use File | Settings | File Templates.
 */
Class avatar{


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
            self::$instance = new avatar();
        }
        return self::$instance;
    }
    public static function xg()
    {

    }
    public function abcd()
    {
    }
}