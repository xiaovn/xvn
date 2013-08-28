<?php
/**
 * Project: xvn.
 * File: adminbookModel.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 3:02 PM - 8/26/13
 * Website: www.xiao.vn
 */
Class adminbookModel extends baseModel
{
    public function getlistbook()
    {
        global $db;
        $listbook = $db->query('SELECT * FROM xiaob_book LIMIT 10');
        return $db->fetch_object();
    }
    public function bookquery($sql,$fr)
    {
        global $db;
        $result = $db->query($sql);
        return $db->fetch_object($first_row = $fr);
    }
    public function approve($bookid)
    {
        global $db;
        $db->query("UPDATE xiaob_book SET bookstatus = 1 WHERE bookid = ".$bookid);
    }
    public function del($bookid)
    {
        global $db;
        $db->query("UPDATE xiaob_book SET bookstatus = 4 WHERE bookid = ".$bookid);
    }
}