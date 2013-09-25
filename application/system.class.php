<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 21/09/2013
 * Time: 09:02
 * To change this template use File | Settings | File Templates.
 */
Class system{


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
            self::$instance = new system();
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

}