<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 26/09/2013
 * Time: 14:44
 * To change this template use File | Settings | File Templates.
 */
Class apiModel extends baseModel
{
    public function setpoint($xid,$type)
    {
        global $db;
        $db->query("SELECT * FROM xdata_score_setting WHERE feature_code = '".$type."'");
        $score_setting = $db->fetch_object($first_row = true);
        if($score_setting->feature_once)
        {
            $db->query("SELECT * FROM xdata_score_log WHERE xid = '".$xid."' AND score_code = '".$score_setting->feature_code."'");
            if($db->num_row())
            {
                return false;
            }
            else
            {
                $db->query("SELECT * FROM xdata_score_log WHERE xid = '".$xid."' AND feature_code = '".$type."'");
                if($db->num_row())
                {
                    $db->query("UPDATE xdata_score SET score = score + ".$score_setting->feature_score." WHERE xid = '".$xid."' AND appid = '".$score_setting->application_id."'");
                    $db->query("INSERT INTO xdata_score_log(xid, application_id,score_code,score_value) VALUE ('".$xid."','".$score_setting->application_id."','".$type."',".$score_setting->feature_score.")");
                }
                else
                {
                    $db->query("INSERT INTO xdata_score(xid, appid,score) VALUE ('".$xid."','".$score_setting->application_id."',".$score_setting->feature_score.")");
                    $db->query("INSERT INTO xdata_score_log(xid, application_id,score_code,score_value) VALUE ('".$xid."','".$score_setting->application_id."','".$type."',".$score_setting->feature_score.")");
                }
                return true;
            }
        }
        else
        {
            global $db;
            $db->query("SELECT * FROM xdata_score WHERE xid = '".$xid."' AND appid = '".$score_setting->application_id."'");
            if($db->num_row())
            {
                $db->query("UPDATE xdata_score SET score = score + ".$score_setting->feature_score." WHERE xid = '".$xid."' AND appid = '".$score_setting->application_id."'");
                $db->query("INSERT INTO xdata_score_log(xid,application_id,score_code,score_value) VALUES ('".$xid."','".$score_setting->application_id."','".$type."',".$score_setting->feature_score.")");
            }
            else
            {
                $db->query("INSERT INTO xdata_score(xid, appid,score) VALUE ('".$xid."','".$score_setting->application_id."',".$score_setting->feature_score.")");
                $db->query("INSERT INTO xdata_score_log(xid, application_id,score_code,score_value) VALUES ('".$xid."','".$score_setting->application_id."','".$type."',".$score_setting->feature_score.")");
                //global $db;
                //$db->query("INSERT INTO xdata_score_log(xid, application_id,score_code,score_value) VALUES ('2222222','223312','login_score',100)");
            }
            return true;
        }
    }
}