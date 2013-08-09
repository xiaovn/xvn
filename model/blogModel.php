<?php
/**
 * Project: xvn.
 * File: blogModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class blogModel extends baseModel{

	public function get_blogs() 
	{
		 global $db;
		 $blog = $db->query('SELECT * FROM xdata_blog');
		 return $db->fetch_object();
	}
	public function get_blog_detail($id) 
	{	
		 global $db;
		 $blog = $db->query('SELECT id, name, content FROM blog where id = '.$db->sqlQuote($id));
		 return $db->fetch_object($first_row = true);
	}
    public function comment_post($blogid,$cmauthor,$cmemail,$cmip,$cmcontent)
    {
        global $db;
        $cmdate = "";
        $blog = $db->query('INSERT INTO xdata_blog_comment(comment_blog_id,comment_author,comment_author_email,comment_author_ip,comment_content,comment_approved,comment_date) VALUES('.$blogid.','.$cmauthor.','.$cmemail.','.$cmip.','.$cmcontent.',0,'.$cmdate.')');
        //return $db->fetch_object();
    }
}
?>
