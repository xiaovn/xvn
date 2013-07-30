<?php
/**
 * Project: xvn.
 * File: error404.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 */
Class error404Controller Extends baseController {

public function index() 
{
        $this->view->data['blog_heading'] = 'This is the 404';
        $this->view->show('error404');
}


}
?>
