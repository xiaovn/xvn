<?php
/**
* Project: xvn.
* File: blog_index.php.
* Author: Ken Zaki
* Email: kenzaki@xiao.vn
* Create Date: 2:28 PM - 7/30/13
* Website: www.xiao.vn
*/
?>
<h1><?php echo $blog_heading; ?></h1>

<ul>
<?php foreach($blogs as $blog) : ?>
<li>Blog id <?php echo $blog->id; ?>: 
	<a href="blog/view/<?php echo $blog->id; ?>"><?php echo $blog->name; ?></a></li> 
<?php endforeach; ?>
</ul>