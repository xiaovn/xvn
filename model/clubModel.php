<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/18/13
 * Time: 4:01 PM
 * To change this template use File | Settings | File Templates.
 */
class clubModel extends baseModel
{
    public function get_createclub($clubid,$clubname,$clubgroup,$clubadmin,$clublogo)
    {
        global $db;
        $db->query('INSERT INTO xdata_clb(clubid,clubname,clubgroup,clubadmin,createdate,lastactiondate,postcount,memcount,clublogo) VALUE ('.$clubid.','.$clubname.','.$clubgroup.','.$clubadmin.',"","","0","0",'.$clublogo.')');
        return true;
    }
    public function get_viewclub($clubid)
    {
        global $db;
        $db->query("SELECT * FROM xdata_clb WHERE clubid =".$clubid);
        return $db->fetch_object($first_row = true);
    }
    public function thamgianhom($clbid,$xid)
    {
        global $db;
        $db->query('INSERT INTO xdata_clb_member(clbid,xid,permission,status) VALUE ('.$clbid.','.$xid.',"2264321","0")');
        return true;
    }
}
?>