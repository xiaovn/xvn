<?php
/**
 * Project: xvn.
 * File: application.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:59 PM - 8/29/13
 * Website: www.xiao.vn
 */
Class application{
    private static $instance;
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new application();
        }
        return self::$instance;
    }
    // SELECT QUERY CONTROL
    public function get_tenmon($mamon)
    {
        global $db;
        $db->query("SELECT tenmon FROM xdata_monhoc WHERE mamon=".$mamon);
        $mon = $db->fetch_object($first_row = true);
        return $mon->tenmon;
    }
    // UPDATE QUERY CONTROL
    // INSERT QUERY CONTROL
    // DELETE QUERY CONTROL
    //07/97/2013_ viet
    public function get_subj_name($subj_id)
    {
        if($subj_id != "")
        {
            global $db;
            $blog = $db->query("SELECT tenmon FROM xdata_monhoc WHERE mamon=".$subj_id);
            $me = $db->fetch_object($first_row = true);
            return $me->tenmon;
        }
        else return "";

    }
    public function get_question_list($testid)
    {
        global $db;
        $db->query("SELECT * FROM tracnghiem_tests_questions WHERE testid = '".$testid."'");
        return $db->fetch_object();
    }
    public function get_question($questionid)
    {
        global $db;
        $db->query("SELECT * FROM tracnghiem_questions WHERE questionid = '".$questionid."'");
        return $db->fetch_object($first_row = true);
    }
    public function get_answer($questionid)
    {
        global $db;
        $db->query("SELECT * FROM tracnghiem_answers WHERE questionid = '".$questionid."'");
        return $db->fetch_object();
    }
    public function get_tests()
    {
        global $db;
        $db->query("SELECT * FROM tracnghiem_tests");
        return $db->fetch_object();
    }
    public function get_blog($xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_blog WHERE author=".$xid." ORDER BY id DESC LIMIT 5");
        return $db->fetch_object();
    }
    public function activity($actid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_activity_flat WHERE acti_id = ".$actid);
        $act = $db->fetch_object($first_row = true);
        return $act->acti_name;
    }
    public function get_feed($xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_feed WHERE feedauthor = '".$xid."' ORDER BY feedid DESC");
        return $db->fetch_object();
    }
    public function application($appid,$info)
    {
        if(isset($appid) && $appid != "" && isset($info) && $info != "")
        {
            global $db;
            $db->query("SELECT ".$info." FROM xdata_application WHERE appid = ".$appid);
            $app = $db->fetch_object($first_row = true);
            return $app->$info;
        }
        else
        {
            return "";
        }
    }
    public function get_blog_by_xid($xid,$fr)
    {
        if(isset($xid) && $xid != "" && isset($fr) && $fr != "")
        {
                global $db;
                $db->query("SELECT * FROM xdata_blog WHERE author = '".$xid."' ORDER BY id DESC");
                return $db->fetch_object($first_row = $fr);

        }
        else
        {
            return "";
        }
    }
    public function get_blog_list($type = "feature")
    {
        global $db;
        switch($type)
        {
            case "feature":
                $db->query("SELECT * FROM xdata_blog ORDER BY viewcount DESC LIMIT 5");
                break;
            case "topcomment":
                $db->query("SELECT * FROM xdata_blog ORDER BY commentcount DESC LIMIT 5");
                break;
            case "topview":
                $db->query("SELECT * FROM xdata_blog ORDER BY viewcount DESC LIMIT 5");
                break;
            case "toplike":
                $db->query("SELECT * FROM xdata_blog ORDER BY likecount DESC LIMIT 5");
                break;
            case "topshare":
                $db->query("SELECT * FROM xdata_blog ORDER BY sharecount DESC LIMIT 5");
                break;
            case "newest":
                $db->query("SELECT * FROM xdata_blog ORDER BY id DESC LIMIT 5");
                break;
            default:
                $db->query("SELECT * FROM xdata_blog ORDER BY id DESC LIMIT 5");
                break;
        }
        return $db->fetch_object($first_row = false);
    }
    public function findmon($tenmon)
    {
        global $db;
        $db->query("SELECT mamon FROM xdata_monhoc WHERE tenmon like '$tenmon' OR viettat like '%$tenmon%'");
        $gv = $db->fetch_object($firstrow = true);
        return $gv->mamon;
    }
    function sosanh($xid,$mamon)
    {
        global $db;
        $db->query("SELECT * FROM xdata_giaovien WHERE xid = $xid");
        $gv = $db->fetch_object($first_row = true);
        if($gv->mamom == $mamon)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function analytic($strings)
    {
        global $db;
        $ct = explode("-", $strings);
        $gv = $ct[1];
        $mon = $ct[0];
        $magv = "";
        $tenmon = $this->findmon($mon);
        $db->query("SELECT * FROM xdata_info");
        $ck = 1;
        $dem = 1;
        $giaovien = "";
        $ketqua = 0;
        $result[] = null;
        $gvss = $db->fetch_object();
        foreach($gvss as $gvs)
        {
            if($ketqua != 1)
            {
                $magv = $gvs->xid;
                $tengv = $gvs->name;
                $orname = trim(strtolower($tengv));
                $orinput = trim(strtolower($gv));
                if (preg_match("/".$orname."/", $orinput))
                {
                    if($this->sosanh($magv,$tenmon))
                    {
                        $giaovien = $gvs->xid;
                        $ketqua = 1;
                    }
                    else
                    {
                        $giaovien = $gvs->xid;
                        $ketqua = "Not same";
                    }
                }
            }

        }
        if($ketqua)
        {
            $result['mamom'] = "";
            $result['magiaovien'] = "";
            $result['found'] = 1;
        }
        else
        {
            $result['mamom'] = "";
            $result['magiaovien'] = "";
            $result['found'] = 0;
        }
        return $result;
    }
    public function get_app_by_category($catid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_application WHERE appcategory = '".$catid."'");
        return $db->fetch_object();
    }
    public function get_num_app_by_category($catid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_application WHERE appcategory = '".$catid."'");
        return $db->num_row();
    }
    public function get_app_category_list()
    {
        global $db;
        $db->query("SELECT * FROM xdata_application_cat");
        return $db->fetch_object();
    }
    public function get_app_comment($appid,$top)
    {
        global $db;
        $db->query("SELECT * FROM xdata_app_comment WHERE appid = '".$appid."' AND status = 1 ORDER BY id DESC LIMIT ".$top);
        return $db->fetch_object();
    }
    public function get_logs_application($appid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_logs WHERE appid = '".$appid."' ORDER BY id DESC");
        return $db->fetch_object();
    }
    public function type_log($typeid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_log_types WHERE typeid = '".$typeid."'");
        $a = $db->fetch_object($first_row = true);
        return $a->typename;
    }
    public function type_log_icon($typeid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_log_types WHERE typeid = '".$typeid."'");
        $a = $db->fetch_object($first_row = true);
        return $a->typeicon;
    }
    public function get_registed_list($appid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_app_log WHERE appid = '".$appid."' ORDER BY id DESC LIMIT 4");
        return $db->fetch_object();
    }
    public function check_regis_app($appid,$xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_app_log WHERE appid = '".$appid."' AND xid = '".$xid."'");
        if($db->num_row())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}