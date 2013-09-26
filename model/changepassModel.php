<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hyo Sun
 * Date: 8/8/13
 * Time: 4:11 PM
 * To change this template use File | Settings | File Templates.
 */
class changepassModel extends  baseModel
{
    public function ktmkc($pw,$xid)
    {   //KTra Mat khau cu.
        global $db;
        $abc=$db->query('SELECT * FROM xdata_account WHERE xid='.$xid.' and password='.$pw);
        if(mysql_num_rows($abc) >= 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function doimk($new_pwd,$xid)
    {
        global $db;
        $db->query("UPDATE xdata_account SET password='".$new_pwd."' WHERE xid='".$xid."'");
    }
    public function changeim($xid,$ho,$ten,$tenkhac,$tthonnhan,$tongiao,$dienthoai,$didong,$slogan)
    {
        global $db;
        $db->query('UPDATE xdata_info SET firstname='.$ho.',name='.$ten.',othernamme='.$tenkhac.',honnhan='.$tthonnhan.',tongiao='.$tongiao.',dienthoai='.$dienthoai.',didong='.$didong.',slogan='.$slogan.' WHERE xid='.$xid);
    }
}
?>