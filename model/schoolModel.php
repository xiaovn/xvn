<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/9/13
 * Time: 2:21 PM
 * To change this template use File | Settings | File Templates.
 */
Class schoolModel extends baseModel
{
    public function get_truong($xfun)
    {
        global $db;
        $db->query("SELECT ".$xfun." FROM xdata_truong");
        return $db->fetch_object();
    }
}