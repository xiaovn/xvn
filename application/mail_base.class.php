<?php
/**
 * Project: xvn.
 * File: mail_base.class.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 1:56 PM - 7/31/13
 * Website: www.xiao.vn
 */

Class baseMailler {


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
            self::$instance = new baseRedirect();
        }
        return self::$instance;
    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    function send($from,$name,$to,$subject,$content) {
        include_once "phpmailer.class.php";
        include_once "smtp.class.php";
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = MAIL_HOST; // specify main and backup server
        $mail->Port = MAIL_PORT; // set the port to use
        $mail->SMTPAuth = MAIL_AUTH; // turn on SMTP authentication
        $mail->SMTPSecure = MAIL_SECURE;
        $mail->Username = MAIL_ACC; // your SMTP username or your gmail username
        $mail->Password = MAIL_PASS; // your SMTP password or your gmail password
        $mail->From = $from;
        $mail->FromName = "Cổng tài khoản Xiao"; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to,$name);
        $mail->AddReplyTo($from,$from);
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
        if(!$mail->Send())
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}

?>
