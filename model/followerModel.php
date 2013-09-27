<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 ***/
Class followerModel extends baseModel
{
    public function theodoi($xid)
    {
        $a[] = null;
        global $db;
        $db->query("SELECT * FROM xdata_follow WHERE xid = '".$xid."'");
        $a['following'] = $db->num_row();
        if($a['following'])
        {
            $a['list1'] = $db->fetch_object();
        }
        else
        {
            $a['list1'] = "";
        }
        $db->query("SELECT * FROM xdata_follow WHERE follow = '".$xid."'");
        $a['follower'] = $db->num_row();
        if($a['follower'])
        {
            $a['list2'] = $db->fetch_object();
        }
        else
        {
            $a['list2'] = "";
        }
        return $a;
    }
}