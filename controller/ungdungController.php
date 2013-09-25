<?php
/**
 * Project: xvn.
 * File: appController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:52 AM - 7/31/13
 * Website: www.xiao.vn
 *****/

Class ungdungController extends baseController
{
    public function index()
    {
        $this->view->data['app_heading'] = 'This is the application area';
        $this->view->show('app_index');
    }
    public function diemthi()
    {
        //$this->view->data['a'] = $this->model->get('xemdiemModel')->getdiem();
        $this->view->show('app_diem');
    }
    public function tkb()
    {
        $xid = $_SESSION['xID'];
        $this->view->data['xgroup'] = $_SESSION['xGroup'];
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
    public function applist()
    {
        $this->view->data['applist'] = $this->model->get('applicationModel')->get_applist();
        $this->view->show('application_list');
    }
    //module view application list
}