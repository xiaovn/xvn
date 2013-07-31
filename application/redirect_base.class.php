<?php
/**
 * Project: xvn.
 * File: redirect_base.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 10:43 AM - 7/31/13
 * Website: www.xiao.vn
 */
Class baseRedirect {


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
            self::$instance = new baseRedirect();
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

    function redirect($controller,$method = "index") {
        global $core; /* Guess Obviously */

        $location = XC_URL . "/" . $controller . "/" . $method;
        /*
            * Use @header to redirect the page:
        */
        header("Location: " . $location);
    }

}

?>
