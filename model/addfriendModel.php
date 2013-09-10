<?php
/**
 * Created by: Xiao Inc.
 * User: Hsnoval _ Sang Edit.
 * Date: 12/08/2013
 * Time: TIME
 * To change this template use File | Settings | File Templates.
 */
class addfriendModel extends baseModel
{
    public function addfriend($user1,$user2)
    {
        global $db;
        $db->query('INSERT INTO xdata_friend(xid1,xid2,from) VALUE ('.$user1.','.$user2.',CURRENT_TIMESTAMP)');
    }
}
?>

