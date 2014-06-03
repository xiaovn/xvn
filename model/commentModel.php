<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 9/6/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 */
Class commentModel extends baseModel
{
    public function get_binhluan($comment_blog_id)
    {
        global $db;
        $view = $db->query("SELECT * FROM xdata_blog_comment where comment_blog_id = ".$comment_blog_id." ORDER BY commentid DESC");
        return $db->fetch_object($first_row = false);
    }
}