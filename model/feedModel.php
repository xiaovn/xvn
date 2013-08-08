<?php
/**
 * Project: xvn.
 * File: feedModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 7:49 PM - 8/3/13
 * Website: www.xiao.vn
 */
Class feedModel extends baseModel
{
    public function get_newest_feed()
    {
        global $db;
        $newest_feed = $db->query("SELECT * FROM xdata_feed");
        return $db->fetch_object($first_row = true);
    }
}