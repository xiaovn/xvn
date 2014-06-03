<?php
/**
 * Project: xvn.
 * File: memberController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 2:28 PM - 7/30/13
 * Website: www.xiao.vn
 *****/
Class memberController extends baseController
{
    public function index()
    {
		$_SESSION['current_menu'] = "member";	
        $xid = $_SESSION['xID'];
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1)
        {
            $this->view->data['members'] =  $this->model->get("memberModel")->get_mem();
            $this->view->data['member_heading'] = 'This is the member Index';
            $this->view->data['hoctap'] = school::getInstance()->get_learning_year($_SESSION['xID'],date("Y"));
            $this->view->data['theodoi'] = $this->model->get("followerModel")->theodoi($xid);
            $this->view->show('member_index');
        }
        else
        {
            $this->redirect->redirect("member","login");
        }

    }
    public function edit()
    {
	$_SESSION['current_menu'] = "member";
        $xid = $_SESSION['xID'];
        $xgroup = $_SESSION['xGroup'];
        $xtype = "";
        if($xgroup == "")
        {
            $xtype = "Đang học tại";
        }
        elseif($xgroup == "")
        {
            $xtype = "Đang công tác tại";
        }
        else
        {
            $xtype = "Đang làm việc tại";
        }
        $this->view->data['xtype'] = $xtype;
        $this->view->show("member_editinfo");
    }
    public function testview($a)
    {
        $this->view->data['title1'] = $a[0];
        $this->view->data['title1'] = $a[1];
        $this->view->data['title2'] = $a[2];
        $this->view->data['title3'] = $a[3];
        $this->view->show('test_view');
    }
    public function view($args){
	$_SESSION['current_menu'] = "member";
        $id_mem = member::getInstance()->checkuser($args[1]);
        if($id_mem)
        {
            $this->view->data['memberid'] = $id_mem;
            $this->view->data['hoctap'] = school::getInstance()->get_learning_year($id_mem,date("Y"));
            $this->view->data['theodoi'] = $this->model->get("followerModel")->theodoi($id_mem);
            $this->view->show('member_view');
        }
        else
        {
            $this->view->data['error'] = "Không tồn tại tài khoản này!";
            $this->view->show('error404');
        }

    }
    public function editavatar()
    {
	$_SESSION['current_menu'] = "member";
        $prefix = "xiao_member_";
        $avatar_file = "";
        if(isset($_POST ['upload']))
        {
            $file = $_FILES ['afile'];
            $name1 = $file ['name'];
            $type = $file ['type'];
            $size = $file ['size'];
            $tmppath = $file ['tmp_name'];
            if($name1!="")
            {
                move_uploaded_file ($tmppath, 'uploads/'.$name1);
            }
            $this->view->data['avatarfile'] = $name1;
            $this->view->show('member_avatar');
            exit;
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $targ_w = $targ_h = 300;
            $jpeg_quality = 300;

            if(!isset($_POST['x']) || !is_numeric($_POST['x'])) {
                die('Please select a crop area.');
            }

            $src = XC_URL.'/uploads/'.$_POST['afile'];
            $img_r = imagecreatefromjpeg($src);
            $dst_r = ImageCreateTrueColor($targ_w, $targ_h);

            imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
                $targ_w,$targ_h,$_POST['w'],$_POST['h']);

            //header('Content-type: image/jpeg');
            //imagejpeg($dst_r,null,$jpeg_quality); // NULL will output the image directly
            $uploadfile = $prefix. time() . 'avatar.jpg';
            imagejpeg($dst_r, 'avatar/' . $uploadfile);
            $this->view->data['avatar'] = $uploadfile;
            $this->model->get('avatarupdateModel')->updateavatar($_SESSION['xID'],$uploadfile);
            $this->view->show('member_avatar');
            exit;
        }
        else
        {
            $this->view->show('member_avatar');
        }
    }
    public function addfriend($memid){
	$_SESSION['current_menu'] = "member";
        $xid2 = $memid[1];
        $xid1 = $_SESSION['xID'];
        if(member::getInstance()->checkfriend($xid1,$xid2))
        {
            $this->model->get('memberModel')->addfriend($xid1,$xid2);
            $this->view->data['status'] = "success";
        }
        else
        {
            $this->view->data['status'] = "error";
        }
    }
    public function logout()
    {
        session_destroy();
        $this->redirect->redirect("index");
    }
    public function login()
    {
        if(isset($_POST['username']))
        {
            $username = mysql_real_escape_string($_POST["username"]);
            $password = md5(mysql_real_escape_string($_POST["password"]));
            $member_login = $this->model->get('memberloginModel')->check_login($username,$password);
            if($member_login)
            {
                $this->view->data['member_heading'] = 'This is the member Login with'.$_SESSION['xID'];
                $this->redirect->redirect("member","index");
            }
            else
            {
                $this->view->data['member_heading'] = 'Khong thanh cong';
                $this->view->show('member_login');
            }
        }
        else
        {
            $this->view->data['member_heading'] = 'Đăng nhập';
            $this->view->show('member_login');
        }
    }
    public function signup()
    {
        $this->view->data['member_heading'] = 'This is the member Signup';
        $this->view->show('member_signup');
    }
    public function account()
    {
		$_SESSION['current_menu'] = "account";
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1)
        {
            $this->view->data['member_heading'] = 'This is the member Signup';
            $this->view->show('member_account');
        }
        else
        {
            $this->redirect->redirect("member","login");
        }

    }
    public function thongtin()
    {
	$_SESSION['current_menu'] = "member";
        //$xid = '2254489252';
        $xid = $_SESSION['xID'];
        $this->view->data['hoten'] = member::getInstance()->get_member_info($xid,'name');
        $this->view->data['ngaysinh'] = member::getInstance()->get_member_info($xid,'birthday');
        $this->view->data['namhoc']=member::getInstance()->get_member_hocsinh($xid,'namhoc');
        $this->view->data['hsmail']=member::getInstance()->get_member_account($xid,'email');
        $this->view->data['hsyahoo']=member::getInstance()->get_member_account($xid,'yahoo');
        $this->view->data['didong']=member::getInstance()->get_member_info($xid,'didong');
        $this->view->data['dienthoai'] = member::getInstance()->get_member_info($xid,'dienthoai');
        $this->view->data['lop'] = member::getInstance()->tenlop(member::getInstance()->getlop($xid));
        if((member::getInstance()->get_member_info($xid,'sex'))==1)
        {
            $this->view->data['gioitinh'] = "Nam";
        }
        elseif((member::getInstance()->get_member_info($xid,'sex'))==0)
        {
            $this->view->data['gioitinh'] = "Nữ";
        }
        else
        {
            $this->view->data['gioitinh'] = "Khác";
        }
        $this->view->data['honnhan']=member::getInstance()->get_honnhan(member::getInstance()->get_mahonnhan($xid));
        $this->view->data['avatar']=member::getInstance()->anhdaidien(member::getInstance()->idfriend($xid));
        $this->view->show('member_index');
    }
    public function follow($para)
    {
        if(isset($para[1]) && $para[1] == "follow")
        {
            $follow = $_POST['follow'];
            global $db;
            $db->query("INSERT INTO xdata_follow(xid,follow) VALUES ('".$_SESSION['xID']."','".$follow."')");
        }
        elseif(isset($para[1]) && $para[1] == "huyfollow")
        {
            $follow = $_POST['huyfollow'];
            global $db;
            $db->query("DELETE FROM xdata_follow WHERE xid='".$_SESSION['xID']."' AND follow = '".$follow."'");
        }
        else
        {}
    }
    public function forgotpass()
    {
		if(isset($_SESSION['xID']) && $_SESSION['xID'] != "")
		{	
			$this->redirect->redirect("member","index");
		}
		else
		{
			$this->view->show('member_resetpass');
		}
    }
    public function changepass()
    {

        $u=$_SESSION['xID'];
        $pw=member::getInstance()->account($u,"password");

        if(isset($_POST["capnhat"]))
        {
            $old_pw=md5($_POST["old_pw"]);
            $new_pwd=md5($_POST["new_pw"]);
            $pre_pwd=md5($_POST["pre_pw"]);

            if(!$_POST["old_pw"] || !$_POST["new_pw"] || !$_POST["pre_pw"])
            {
                $this->view->data['error'] .= "bạn phải nhập đầy đủ thông tin!";
                $this->view->show('changepass');
            }
            elseif($old_pw!=$pw)
            {
                $this->view->data['error'] .= "mật khẩu cũ nhập không đúng!";
                $this->view->show('changepass');
            }
            elseif($new_pwd!=$pre_pwd)
            {
                $this->view->data['error'] .= "mật khẩu xác nhận không đúng!";
                $this->view->show('changepass');
            }
            else
            {
                $this->view->data['doimk'] =  $this->model->get("changepassModel")->doimk($new_pwd,$u);
                $this->view->data['error1'] .= "Bạn đổi mật khẩu thành công!";
                $this->view->show('changepass');
            }
        }
        $this->view->show('changepass');
    }
    public function changeim()
    {
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1)
        {
            $this->view->data['member_heading'] = 'This is the member Index';
            $this->view->data['hoctap'] = school::getInstance()->get_learning_year($_SESSION['xID'],date("Y"));
            $this->view->show('changett');
        }
        else
        {
            $this->redirect->redirect("member","login");
        }

    }
    public function changeuser()
    {

    }
    public function testmember()
    {
        $this->view->show("test_view");
    }
}