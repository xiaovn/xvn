<?php
/**
 * Project: xvn.
 * File: tkbModel.php.
 * Author: Kim Hyo Sun
 * Email: ngocviet@xiao.vn
 * Create Date: 9:21 PM - 8/27/13
 * Website: www.xiao.vn
 */
Class tkbModel extends baseModel
{
    public function getmon($thu, $tiet, $buoi,$malop, $nhommon)
    {
        global $db;
        $db->query("SELECT mon FROM xdata_tkb WHERE thu= ".$thu." AND tiet=".$tiet." AND buoi=".$buoi." AND lop=".$malop." AND nhommon=".$nhommon);
        $a =  $db->fetch_object($first_row = true);
        return $a->mon;
    }
    public function gettkb($malop)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE lop=".$malop);
        return $db->fetch_object();
    }
    //Show thông tin trong bảng xdata_tkb
    public function gettkb_gv($magv)
    {
        global $db;
        $db->query("SELECT * FROM xdata_tkb WHERE giaovien=".$magv);
        return $db->fetch_object();
    }
    //Thêm 1 bảng ghi trong bảng xdata_tkb
    public function them_tkb($buoi,$thu,$tiet,$mon,$giaovien,$lop,$nhommon)
    {
        global $db;
        $them = $db->query('INSERT INTO xdata_tkb(buoi,thu,tiet,mon,giaovien,lop,nhommon) VALUES('.$buoi.','.$thu.','.$tiet.','.$mon.','.$giaovien.','.$lop.','.$nhommon.')');
        return true;
    }
    //Cập nhật 2 trường là: mon và giaovien
    public function sua_tkb($id,$mon,$giaovien)
    {
        global $db;
        $suatkb=$db->query("UPDATE xdata_tkb SET mon = '".$mon."',giaovien= '".$giaovien."' WHERE id = '".$id."'");
    }
    //Xóa đi 1 bảng ghi tương ứng với id.
    public function xoa_tkb($id)
    {
        global $db;
        $xoa = $db->query("DELETE FROM xdata_tkb WHERE id='".$id."'");
    }
}