<?php
/**
 * Project: xvn.
 * File: upload.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 11:46 AM - 8/27/13
 * Website: www.xiao.vn
 */

$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'uploads';   //2

if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile); //6

}