<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 9/10/13
 * Time: 3:20 PM
 * To change this template use File | Settings | File Templates.
 * To change this template use File | Settings | File Templates.
 * To change this template use File | Settings | File Templates.
 * To change this template use File | Settings | File Templates.
 * To change this template use File | Settings | File Templates.
 */

echo "XID:  ".$thangkhung->xid; echo "<br>";
echo "Ten:  ".$thangkhung->name; echo "<br>";
echo "GT:  ".$thangkhung->sex; echo "<br>";
echo "GT:  ".member::getInstance()->sex($thangkhung->sex);
echo "<br>";
echo "Hon Nhan:  ".member::getInstance()->honnhan($thangkhung->honnhan);
echo "<br>";
$matruong = school::getInstance()->get_learning_year($thangkhung->xid,"2013");
//echo "Mã trường: ".$matruong->school;
echo "<br>";
echo "Trường:  ".school::getInstance()->truong($matruong->school,"tentruong");
echo "<br>";
echo "Dan toc:  ".$thangkhung->dantoc; echo "<br>";
echo "Ton giao:  ".$thangkhung->tongiao."<br>";
echo "Tinh:  ".$thangkhung->quequan_tinh; echo "<br>";
echo "Huyen:  ".$thangkhung->quequan_huyen; echo "<br>";
echo "Xa:  ".$thangkhung->quequan_xa; echo "<br>";