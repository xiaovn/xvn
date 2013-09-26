<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 5:33 PM
 * To change this template use File | Settings | File Templates.
 */
foreach($toitheodoi as $app):?>
    <?php echo "Tôi theo dõi  ".$app->xid2;?><Br>
<?php endforeach;

$theodoitoi = member::getInstance()->get_follower_anyone($xid);
foreach($theodoitoi as $apps):?>
    <?php echo "Tôi theo dõi" .$apps->xid1;?><Br>
<?php endforeach;
?>