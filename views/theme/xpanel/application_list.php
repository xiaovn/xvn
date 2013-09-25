<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 11:28 AM
 * To change this template use File | Settings | File Templates.
 **/
echo "Danh sach ung dung";
echo "" .$applist->appname;
//$dsblog = application::getInstance()->get_blog($_SESSION['xID']);
$i = 1;
$active = "";
foreach(applist as $app)
{
    echo $app->appid;
    echo $app->appname;
    echo $app->apppermission;
    $i ++;
}