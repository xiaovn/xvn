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
    public function doimk($pass,$xid)
    {
        global $db;
        $db->query('UPDATE xdata_account SET password='.$pass.' WHERE xid='.$xid);
    }
    public function changeim($xid,$ho,$ten,$tenkhac,$ngaysinh,$gioitinh,$tthonnhan,$tongiao,$hkxa,$hkhuyen,$hktinh,$dienthoai,$didong,$slogan)
    {
        global $db;
        $db->query('UPDATE xdata_info SET firstname='.$ho.',name='.$ten.',othernamme='.$tenkhac.',birthday='.$ngaysinh.',sex='.$gioitinh.',honnhan='.$tthonnhan.',tongiao='.$tongiao.',hokhau_xa='.$hkxa.',hokhau_huyen='.$hkhuyen.',hokhau_tinh='.$hktinh.',dienthoai='.$dienthoai.',didong='.$didong.',slogan='.$slogan.' WHERE xid='.$xid);
    }
}
?>