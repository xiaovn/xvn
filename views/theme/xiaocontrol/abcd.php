<?php
/**
 * Project: xvn.
 * File: abcd.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 09:47 - 02/01/2014
 * Website: www.xiao.vn
 */
session_start();
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
    //Start the long running process
    $.ajax({
        url: 'http://localhost/xvn/admin/importdiem',
        success: function(data) {
        }
    });
    //Start receiving progress
    function getProgress(){
        $.ajax({
            url: 'http://localhost/xvn/admin/processajax',
            success: function(data) {
                $("#progress").html(data);
                if(data<=101){
                    getProgress();
                }
            }
        });
    }
    getProgress();
</script>
<div id="progress"></div>