<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 9/3/13
 * Time: 7:55 AM
 * To change this template use File | Settings | File Templates.
 */
class classModel extends baseModel
{
    public function addclass($malop,$tenlop,$phonghoc,$buoihoc,$gvcn,$siso,$matruong)
    {
        global $db;
        $db->query("INSERT INTO xdata_lop(malop,tenlop,phonghoc,buoihoc,gvcn,siso,matruong) VALUE (".$malop.",".$tenlop.",".$phonghoc.",".$buoihoc.",".$gvcn.",".$siso.",".$matruong.")");
        return true;
    }
}
?>