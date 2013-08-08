<?php
/**
 * Project: xvn.
 * File: tagsModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:29 PM - 8/3/13
 * Website: www.xiao.vn
 */
Class tagsModel extends baseModel
{
    public function get_tags_list()
    {
        global $db;
        $blog = $db->query('SELECT * FROM xdata_blog_tags');
        return $db->fetch_object();
    }
}