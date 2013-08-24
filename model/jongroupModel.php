<?php
/**
 * Created by: Xiao Inc.
 * User: Hsnoval_
 * Date: 12/08/2013
 * Time: TIME
 * To change this template use File | Settings | File Templates.
 */
class joingroupModel extends baseModel
{
    public function joingroup($xid,$manhom,$pemission,$joindate,$nguoigioithieu)
    {
        global $db;
        $db->query('INSERT INTO xdata_thanhviennhom(xid,manhom,pemission,joindate,nguoigioithieu) VALUE('.$xid.','.$manhom.','.$pemission.','.$joindate.','.$nguoigioithieu.')');
    }
}
?>