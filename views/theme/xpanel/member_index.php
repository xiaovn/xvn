<?php
/**
 * Project: xvn.
 * File: member_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:40 PM - 7/30/13
 * Website: www.xiao.vn
 */
?>
<h1><?php echo $member_heading; ?></h1>

<ul>
    <?php foreach($members as $mem) : ?>
        <li>Member <?php echo $mem->id; ?>:
            <a href="mem/view/<?php echo $mem->id; ?>"><?php echo $mem->user; ?></a></li>
    <?php endforeach; ?>
</ul>