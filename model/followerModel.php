<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 */
Class followerModel extends baseModel
{
    //Tôi theo dõi mọi người
    public function get_follower($xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_friend WHERE xid1 = '".$xid."'");
        return $db->fetch_object();
    }
    //Người theo dõi tôi
  /*  public function get_follower_anyone($xid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_friend WHERE xid2 = '".$xid."'");
        return $db->fetch_object();
    }
  */
}