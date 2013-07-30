<?php
/**
 * Project: xvn.
 * File: memberModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:38 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class memberModel Extends baseModel
{
    public function get_blog()
    {
        global $db;
        $blog = $db->query('SELECT id, name, content FROM blog');
        return $db->fetch_object();
    }
    public function get_blog_detail($id)
    {
        global $db;
        $blog = $db->query('SELECT id, name, content FROM blog where id = '.$db->sqlQuote($id));
        return $db->fetch_object($first_row = true);
    }
}