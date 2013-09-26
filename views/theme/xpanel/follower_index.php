<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 5:33 PM
 * To change this template use File | Settings | File Templates.
 */
$dem = 0;
foreach($toitheodoi as $app):?>
    <?php  $dem ++;?>
<?php endforeach;
echo "Số người tôi theo dõi: ".$dem;
echo "Danh sách bạn bè được tôi theo dõi:";?>
<?php
    foreach($toitheodoi as $bb)
    {
        ?>
        <?php echo member::getInstance()->account($bb->xid2,"username");?>
    <?php
    }
$count = 0;
foreach($theodoitoi as $app):?>
    <?php  $count ++;?>
<?php endforeach;
echo "Số bạn bè theo dõi tôi: ".$count;
echo "Danh sách bạn bè theo dõi tôi:";?>
<?php
foreach($theodoitoi as $bb)
{
    ?>
    <?php echo member::getInstance()->account($bb->xid2,"username");?>
<?php
}
?>