<?php
/**
 * Project: xvn.
 * File: catModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 5:45 AM - 8/4/13
 * Website: www.xiao.vn
 */
Class catModel extends baseModel{
    public function get_cat()
    {
        global $db;
        $cat = $db->query('SELECT * from xdata_blog_category');
        return $db->fetch_object();
    }
}