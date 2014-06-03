<?php
/**
 * Project: xvn.
 * File: appController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:52 AM - 7/31/13
 * Website: www.xiao.vn
 *******/

Class ungdungController extends baseController
{
    public function index()
    {
        $_SESSION['current_menu'] = "ungdung";	
		$this->view->data['app_heading'] = 'This is the application area';
        $this->view->data['applist'] = $this->model->get('applicationModel')->get_applist();
        $this->view->show('app_index');
    }
    public function registerapp()
    {
        $_SESSION['current_menu'] = "ungdung";
		$appid = $_POST['id'];
        $xid = $_SESSION['xID'];
        global $db;
        if(!application::getInstance()->check_regis_app($appid,$xid))
        {
            $db->query("INSERT INTO xdata_app_log(xid,appid,status) VALUES ('".$xid."','".$appid."',1)");
            $db->query("INSERT INTO xdata_logs(xid,appid,xtype,xip) VALUES ('".$xid."','".$appid."','4031225','".$_SERVER['REMOTE_ADDR']."')");
        }
    }
    public function detail($para)
    {
        $_SESSION['current_menu'] = "ungdung";
		$appid = $para[1];
        $this->view->data['app'] = $this->model->get("applicationModel")->get_app_detail($appid);
        $this->view->data['registed'] = application::getInstance()->check_regis_app($appid,$_SESSION['xID']);
        $this->view->show("app_detail");
    }
    public function diemthi()
    {
        //$this->view->data['a'] = $this->model->get('xemdiemModel')->getdiem();
        $this->view->show('app_diem');
    }
    public function tracnghiem()
    {
        $this->view->show("apptracnghiem");
    }
    public function tndetail()
    {
        $this->view->show("apptracnghiem_detail");
    }
    public function tntest()
    {
        $this->view->show("apptracnghiem_test");
    }
    public function ajaxlike()
    {
        $appid = $_POST['id'];
        global $db;
        $db->query("UPDATE xdata_application SET applike = applike + 1 WHERE appid = '".$appid."'");
        echo $appid;
    }
    public function thoikhoabieu()
    {
        $xid = $_SESSION['xID'];
        $this->view->data['xgroup'] = $_SESSION['xGroup'];
        if($_SESSION['xGroup'] != "2268470" && $_SESSION['xGroup'] != "2267588")
        {
            echo $_SESSION['xGroup']."Tài khoản của bạn không thể sử dụng chức năng này!";
        }
        else
        {
            if($_SESSION['xGroup'] == "2268470")
            {
                //Tải các thông số mặc định
                $namhoc = date("Y");

                //Xử lý thông tin tài khoản
                $lop = school::getInstance()->styear($xid,$namhoc,"class");

                //Lấy dữ liệu từ model
                $tkbs = $this->model->get("tkbModel")->gettkb($lop);
                //Thời khóa biểu thể dục - quốc phòng
                $tkbtd = school::getInstance()->tkb($lop,"2313708");
                //Thời khóa biểu phụ đạo
                //$tkbtd = school::getInstance()->tkb($lop,"2311896");

                //Xử lý dữ liệu hiển thị
                $this->view->data['tkb'] = school::getInstance()->tkbdata($tkbs);
                $this->view->data['tkbtd'] = school::getInstance()->tkbdata($tkbtd);
                $this->view->data['test'] = $lop;
                $this->view->show('app_tkb');
            }
            else
            {
                echo "Thời khóa biểu giáo viên";
            }
        }

    }
    public function dkmail()
    {
        if(isset($_REQUEST['username']))
        {
            $user = strip_tags(trim($_REQUEST['username']));

            if(strlen($user) <= 5)
            {
                echo json_encode(array('code'  =>  -1,
                    'result'  =>  'Tài khoản này không hợp lệ. Hãy thử lại.'.$user.''
                ));
                die;
            }

            $available = $this->model->get('mailregisterModel')->checkmail($user);

            if($available)
            {
                echo  json_encode(array('code'  =>  1,
                    'result'  =>  "Bạn có thể sử dụng tài khoản <b>$user.student@nguyentrai.edu.vn</b>."
                ));
                die;
            }
            else
            {
                echo json_encode(array('code'  =>  0,
                    'result'  =>  "Tài khoản này đã có người sử dụng"
                ));
                die;
            }
            die;
        }
        if(isset($_POST['uname']) && $_POST['uname'] != "")
        {
            $xid = "722222221";
            $email = $_POST['uname'];
            $regdate = date("Y-m-d H:i:s");
            $regip = $_SERVER['REMOTE_ADDR'];
            $status = "0";
            $a = $this->model->get('mailregisterModel')->dkmails($xid,$email,$regdate,$regip,$status);
            $this->view->show('app_dkmail');
        }
        //$t = $this->model->get('dkemailModel')->get_dkmail();
        $this->view->data['test'] = $this->model->get('dkmailModel')->get_dkmail();
        $this->view->show('app_dkmail');
    }
	private function generater_link($xid)
    {
        $string = $_SERVER['HTTP_USER_AGENT'];
        $string .= $xid;
        $key = md5($string);
        $link = XC_URL."/reset/password/?key=".$key."&xid=".$xid;
        global $db;
        $db->query("UPDATE xdata_account SET xtoken = '".$key."' WHERE xid = '".$xid."'");
        return $link;
    }
    public function resetpass()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $xid = member::getInstance()->checkuser($username);
        if($xid != null)
        {
            if(member::getInstance()->account($xid,"email") == $email)
            {
                $name = member::getInstance()->info($xid,"firstname")." ".member::getInstance()->info($xid,"name");
                $link = $this->generater_link($xid);
                $this->mail->sendersmtp($name,$email,"forgotpass","",$link);
                echo "Hãy kiểm tra email để thực hiện bước tiếp theo!";
            }
            else
            {
                echo "Lỗi: Email không đúng!";
            }
        }
        else
        {
            echo "Lỗi: Tài khoản không tồn tại!";
        }
    }
    public function applist($para)
    {
        $xid = $_SESSION['xID'];
        if(isset($para[1]) && $para[1] == "register")
        {
            $appid = $_POST['id'];
            global $db;
            $db->query("INSERT INTO xdata_app_log(xid,appid,status) VALUES ('".$_SESSION['xID']."','".$appid."','2178764')");
        }
        else
        {
            $this->view->data['applist'] = $this->model->get('applicationModel')->get_applist();
            $this->view->show('application_list');
        }
    }
}