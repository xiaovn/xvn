<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hyo Sun
 * Date: 8/8/13
 * Time: 4:11 PM
 * To change this template use File | Settings | File Templates.
 */
class changepassModel extends  baseModel
{
    public function ktmkc($pw,$xid)
    {   //KTra Mat khau cu.
        global $db;
        $abc=$db->query('SELECT * FROM xdata_account WHERE xid='.$xid.' and password='.$pw);
        if(mysql_num_rows($abc) >= 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function doimk($pass,$xid)
    {
        global $db;
        $db->query('UPDATE xdata_account SET password='.$pass.' WHERE xid='.$xid);
    }

   /* public function changepw()
    {
        global $db;
        $change = $db->query('SELECT * FROM xdata_account');
        $user = $_SESSION['user'];
        $pass = $_SESSION['pass'];
        echo $user;
        $old_pass=md5($_POST["old_pass"]);
        $new_pass=md5($_POST["new_pass"]);
        $pre_pass=md5($_POST["pre_pass"]);

        If(isset($_POST["ok"]))
        {
         if(!$old_pass||!$new_pass||!$pre_pass)
         {
             return
             exit;
         }

         else if($old_pass=!$pass)
         {
             echo"Mat Khau Cu Ko Dung";
             exit;
         }
            else if($new_pass!=$pre_pass)
            {
                echo"Nhap mat khau xac nhan sai";
                exit;
            }
            else
            {
                $sql=mysql_query(" UPDATE memberModel SET password='$new_pass' WHERE username='$user'");
                echo"mật khẩu đã thay đổi";
            }
        }
    }
*/
}
?>