<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kim Hyo Sun
 * Date: 8/8/13
 * Time: 8:29 PM
 * To change this template use File | Settings | File Templates.
 */
class upstatusModel extends  baseModel
{
    public function upstatus($feedcontent,$feedauthor)
    {
        global $db;
        $db->query('UPDATE xdata_account SET feedcontent='.$feedcontent.' WHERE feedauthor='.$feedauthor);
        return $db->fetch_object($first_row = true);
    }

}
?>