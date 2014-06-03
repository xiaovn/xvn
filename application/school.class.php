<?php
/**
 * Project: xvn.
 * File: school.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:00 PM - 8/29/13
 * Website: www.xiao.vn
 */
Class school{
    private static $instance;
    function __construct(){

    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new school();
        }
        return self::$instance;
    }
    //Function here
    public function truong($matruong,$info)
    {
        if(isset($matruong) && $matruong != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_truong WHERE sid=".$matruong);
            $truong = $db->fetch_object($first_row = true);
            return $truong->$info;
        }
        else
        {
            return "";
        }
    }
    public function lop($malop,$info)
    {
        if(isset($malop) && $malop != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_lop WHERE malop=".$malop);
            $me = $db->fetch_object($first_row = true);
            return $me->$info;
        }
        else
        {
            return "";
        }
    }

    public function hocsinh($xid,$info)
    {
        if(isset($xid) && $xid != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_hocsinh WHERE xid=".$xid);
            $hs = $db->fetch_object($first_row = true);
            return $hs->$info;
        }
        else
        {
            return "";
        }
    }
    public function giaovien($xid,$info)
    {
        if(isset($xid) && $xid != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_giaovien WHERE xid=".$xid);
            $gv = $db->fetch_object($first_row = true);
            return $gv->$info;
        }
        else
        {
            return "";
        }
    }
    // VD: Muon lay ten mon:
    //$tenmon = school::getInstance()->monhoc($mamon,"tenmon");
    public function monhoc($mamon,$info)
    {
        if(isset($mamon) && $mamon != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_monhoc WHERE mamon=".$mamon);
            $mon = $db->fetch_object($first_row = true);
            return $mon->$info;
        }
        else
        {
            return "";
        }
    }
    public function dsmonhoc()
    {
            global $db;
            $db->query("SELECT * FROM xdata_monhoc WHERE mamon != '8258378' ORDER BY tenmon");
            return $db->fetch_object($first_row = false);
    }
    public function dsnhommon()
    {
        global $db;
        $db->query("SELECT * FROM xdata_nhommon ORDER BY manhommon");
        return $db->fetch_object($first_row = false);
    }
    public function nhommon($manhom,$info)
    {
        if(isset($manhom) && $manhom != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_nhommon WHERE manhommon=".$manhom);
            $nmon = $db->fetch_object($first_row = true);
            return $nmon->$info;
        }
        else
        {
            return "";
        }
    }
    public function phonghoc($maphong,$info)
    {
        if(isset($maphong) && $maphong != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_phonghoc WHERE maphonghoc=".$maphong);
            $phonghoc = $db->fetch_object($first_row = true);
            return $phonghoc->$info;
        }
        else
        {
            return "";
        }
    }
    public function get_learning_year($xid,$ly)
    {
        if(isset($xid) && $xid != "" && isset($ly) && $ly != "")
        {
            global $db;
            $db->query("SELECT * FROM xdata_student_year WHERE xid=".$xid." AND year = ".$ly);
            if($db->num_row())
            {
                return $db->fetch_object($first_row = true);
            }
            else
            {
                return "";
            }

        }
        else
        {
            return "";
        }
    }
    public function styear($xid,$ly,$info)
    {
        if(isset($xid) && $xid != "" && isset($info) && $info != "" && isset($ly) && $ly != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_student_year WHERE xid=".$xid." AND year = ".$ly);
            $stye = $db->fetch_object($first_row = true);
            return $stye->$info;
        }
        else
        {
            return "";
        }
    }
    public function tesst($s)
    {
        $s = "a";
        substr($s,1,1);
    }
    public function tkb($lop,$nhommon)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE lop='".$lop."' AND nhommon = ".$nhommon);
        return $db->fetch_object();
    }
    public function tkbdata($tkbs)
    {
        $t = "";
        foreach($tkbs as $tkb)
        {
            $t[$tkb->buoi][$tkb->thu][$tkb->tiet] = $tkb->mon;
        }
        return $t;
    }
    public function hang($hang)
    {
        if(isset($hang) && $hang != "")
        {
            global $db;
            $db->query("SELECT tenhang FROM xdata_hangtruong WHERE hang = ".$hang);
            $ifo = $db->fetch_object($first_row = true);
            return $ifo->tenhang;
        }
        else
        {
            return "";
        }
    }
    public function cap($cap)
    {
        if(isset($cap) && $cap != "")
        {
            global $db;
            $db->query("SELECT tencap FROM xdata_cap WHERE cap = '".$cap."'");
            $ifo = $db->fetch_object($first_row = true);
            return $ifo->tencap;
        }
        else
        {
            return "";
        }
    }
}