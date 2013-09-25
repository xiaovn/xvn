<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 25/09/2013
 * Time: 09:16
 * To change this template use File | Settings | File Templates.
 */
Class ExcelReader {


    /*
     * @Variables array
     * @access public
     */
    private static $instance;

    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct() {

    }

    public static function getInstance() {
        if (!self::$instance)
        {
            self::$instance = new ExcelReader();
        }
        return self::$instance;
    }
    public function reader($filename,$type)
    {
        $a = array();
        require_once 'readerlibrary.class.php'; // Thư viện xử lý
        $data = new Spreadsheet_Excel_Reader($filename,true,"UTF-8"); // Đọc file excel, hỗ trợ Unicode UTF-8
        $rowsnum = $data->rowcount($sheet_index=0); // Số hàng của sheet
        $colsnum =  $data->colcount($sheet_index=0);  //Số cột của sheet

        if($type == "TKB")
        {
            $count = 0;
            for ($i=3;$i<=$colsnum;$i++) // Duyệt từng cột, bắt đầu lấy dữ liệu từ cột 3
            {
                $a[$count][0] = $data->val(6,$i);
                $a[$count][1] = $data->val(7,$i);
                $a[$count][2] = $data->val(8,$i);
                $a[$count][3] = $data->val(9,$i);
                $a[$count][4] = $data->val(10,$i);
                $a[$count][5] = $data->val(11,$i);
                $a[$count][6] = $data->val(12,$i);
                $a[$count][7] = $data->val(13,$i);
                $a[$count][8] = $data->val(14,$i);
                $a[$count][9] = $data->val(15,$i);
                $a[$count][10] = $data->val(16,$i);
                $a[$count][11] = $data->val(17,$i);
                $a[$count][12] = $data->val(18,$i);
                $a[$count][13] = $data->val(19,$i);
                $a[$count][14] = $data->val(20,$i);
                $a[$count][15] = $data->val(21,$i);
                $a[$count][16] = $data->val(22,$i);
                $a[$count][17] = $data->val(23,$i);
                $a[$count][18] = $data->val(24,$i);
                $a[$count][19] = $data->val(25,$i);
                $a[$count][20] = $data->val(26,$i);
                $a[$count][21] = $data->val(27,$i);
                $a[$count][22] = $data->val(28,$i);
                $a[$count][23] = $data->val(29,$i);
                $a[$count][24] = $data->val(30,$i);
                $a[$count][25] = $data->val(31,$i);
                $a[$count][26] = $data->val(32,$i);
                $a[$count][27] = $data->val(33,$i);
                $a[$count][28] = $data->val(34,$i);
                $a[$count][29] = $data->val(35,$i);
                $count ++;
            }

        }
        elseif($type == "DIEM")
        {
            for ($i=1;$i<=$rowsnum;$i++) // Duyệt từng hàng, bắt đầu lấy dữ liệu từ hàng 2
            {
                $a[$i][4] = $data->val($i,4);
                $a[$i][5] = $data->val($i,5);
                $a[$i][6] = $data->val($i,6);
                $a[$i][7] = $data->val($i,7);
                $a[$i][8] = $data->val($i,8);
                $a[$i][9] = $data->val($i,9);
                $a[$i][10] = $data->val($i,10);
                $a[$i][11] = $data->val($i,11);
                $a[$i][12] = $data->val($i,12);
                $a[$i][13] = $data->val($i,13);
                $a[$i][14] = $data->val($i,14);
                $a[$i][15] = $data->val($i,15);
                $a[$i][16] = $data->val($i,16);
                $a[$i][17] = $data->val($i,17);
                $a[$i][18] = $data->val($i,18);
            }
        }
        else
        {
            $a = null;
        }
        $_SESSION['outputdata'] = $a;
        return $a;
    }

}