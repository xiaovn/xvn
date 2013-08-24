<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 8/24/13
 * Time: 8:40 AM
 * To change this template use File | Settings | File Templates.
 */

Class showtkbModel extends baseModel
{

    public function get_tkb_teacher($magiaovien,$nhommon)
    {
        global $db;
        $db->query('SELECT * FROM xdata_tkb WHERE magiaovien = '.$magiaovien.' AND nhommon = '.$nhommon);
        Return $db->fetch_object();
    }

    public function get_tkb_student($malop,$nhommon)
    {
        global $db;
        $db->query('SELECT * FROM xdata_tkb WHERE lop = '.$malop.' AND nhommon = '.$nhommon);
        Return $db->fetch_object();
    }

}