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
    public function addfriend($user1,$info,$user2)
    {
        global $db;
        $db->query('INSERT INTO xdata_friend(user1,user2,info) VALUE ('.$user1.','.$user2.','.$info.')');
    }
}
?>

