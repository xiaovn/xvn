<?php
/**
 * Created by: Xiao Inc.
 * User: Hyo Sun
 * Date: 12/08/2013
 * Time: TIME
 * To change this template use File | Settings | File Templates.
 */
class newgroupModel extends baseModel
{
//Tao moi mot Group
    public function newgroup($manhom,$tennhom,$manangkhieu)
    {
        global $db;
        $db->query('INSERT INTO xdata_nhom(manhom,tennhom,manangkhieu) VALUE ('.$manhom.','.$tennhom.','.$manangkhieu.')');
    }
}
?>
