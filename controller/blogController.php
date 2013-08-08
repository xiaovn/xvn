<?php
/**
 * Project: xvn.
 * File: blogController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class blogController Extends baseController {

	public function index() 
	{
		// Get blog categories
        $this->view->data['cats'] = $this->model->get('catModel')->get_cat();

        // Get blog post
        $this->view->data['posts'] = $this->model->get('blogModel')->get_blogs();

        // Get blog tags
        $this->view->data['tags'] = $this->model->get('tagsModel')->get_tags_list();

        // Set blog heading
        $this->view->data['blog_heading'] = 'This is the blog Index';

        // Get newest feed
        $feed_detail = $this->model->get('feedModel')->get_newest_feed();
        $this->view->data['feed_author'] = $feed_detail->feedauthor;
        $this->view->data['feed_content'] = $feed_detail->feedcontent;
        $this->view->data['feed_id'] = $feed_detail->feedid;

        // Get member name
		$this->view->show('blog_index');

	}
    public function timeline()
    {
        //$this->view->data['blogs'] = $this->model->get('blogModel')->get_blogs();
        $this->view->data['blog_heading'] = 'This is the blog timeline';
        $this->view->show('blog_timeline');
    }
	public function view($args){
		$id_blog = $args[1];
		//$blog_detail = $this->model->get('blogModel')->get_blog_detail($id_blog);
		//$this->view->data['blog_heading'] = $blog_detail->name;
		//$this->view->data['blog_content'] = $blog_detail->content;
		$this->view->show('blog_view');
	}
    public function create_blog()
    {
        $this->view->show('blog_write');
    }
    public function edit_blog($blogid)
    {
        $this->view->show('blog_edit');
    }
    public function show_cat($catid)
    {
        $this->view->show('blog_cat');
    }
    public function show_mem_blog($xid)
    {
        $this->view->show('blog_mem');
    }
}
?>
