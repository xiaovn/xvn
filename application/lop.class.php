<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 9/3/13
 * Time: 8:22 AM
 * To change this template use File | Settings | File Templates.
 */
Class lop{
    private static $instance;
    function __construct(){

    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new lop();
        }
        return self::$instance;
    }
    //Function here
    public function xoalop($malop)
    {
        global $db;
        $db->query("DELETE FROM xdata_lop WHERE malop =".$malop);
        return true;
    }
    public function suathongtinlop($malop,$info)
    {
        global $db;
        $db->query("UPDATE FROM xdata_lop SET ".$info."  WHERE malop = ".$malop);
        return true;
    }
    public function themhocsinhvaolop($xid,$loaihs,$namhoc,$matruong,$malop,$nguonhs,$nghihoc)
    {
        global $db;
        $db->query("UPDATE FROM xdata_hocsinh SET xid = ".$xid.",loaihs = ".$loaihs.",namhoc = ".$namhoc.", matruong = ".$matruong.", malop = ".$malop.", nguonhs = ".$nguonhs.", nghihoc = ".$nghihoc." WHERE xid");
    }
    return true;
}
?>