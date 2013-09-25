<?php
/**
 * Project: xvn.
 * File: adminController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 8:44 AM - 8/26/13
 * Website: www.xiao.vn
 */
Class adminController extends baseController
{
    public function index()
    {
        if(isset($_SESSION['xID']) && $_SESSION['xID'] != "" && $_SESSION['xGroup'] == "2261010")
        {
            $this->view->admintmp('index');
        }
        else
        {
            $this->redirect->redirect("admin","login");
        }
    }
    public function student($feature)
    {
        $func = $feature[1];
        switch($func)
        {
            case "edit":
            {
                break;
            }
            default:
            {
                $spp = 10;
                $page = 1;
                if(isset($feature[2]) && $feature[2] != "")
                {
                    $page = $feature[2];
                }
                $cp = $page - 1;
                $sodu_lieu = member::getInstance()->memcount("2268470");
                $sotrang = $sodu_lieu/$spp;
                $sql = "SELECT * FROM xdata_account WHERE xgroup = '2268470' ORDER BY id DESC  LIMIT ".$cp*$spp.",".$spp;
                $this->view->data['liststudent'] = $this->model->get('adminmemberModel')->memberquery($sql,false);
                $this->view->data['count'] = $sodu_lieu;
                $this->view->data['sotrang'] = $sotrang;
                $this->view->admintmp('member');
                break;
            }
        }
    }
    public function login()
    {
        if(isset($_POST['username']) && $_POST['username'] != "")
        {
            $username = mysql_real_escape_string($_POST["username"]);
            $password = md5(mysql_real_escape_string($_POST["password"]));
            $member_login = $this->model->get('adminloginModel')->check_login($username,$password);
            if($member_login)
            {
                $this->view->data['admin_heading'] = 'This is the member Login with'.$_SESSION['xID'];
                //$this->view->show('member_index');
                $this->redirect->redirect("admin","index");
            }
            else
            {
                $this->view->data['admin_heading'] = 'Khong thanh cong';
                $this->view->show('admin_login');
            }
        }
        $this->view->admintmp('login');

    }
    public function logout()
    {
        session_destroy();
        $this->redirect->redirect("admin","login");
    }
    public function library()
    {
        if(isset($_GET['edit']) && $_GET['edit'] != "")
        {
            $this->view->admintmp('editbook');
        }
        else
        {
        if(isset($_GET['approve']) && $_GET['approve'] != "")
        {
            $this->model->get('adminbookModel')->approve($_GET['approve']);
            $this->redirect->redirect("admin","library");
        }
        if(isset($_GET['delete']) && $_GET['delete'] != "")
        {
            $this->model->get('adminbookModel')->del($_GET['delete']);
            $this->redirect->redirect("admin","library");
        }
        $baitren_mottrang = 10;
        $page = 1;
        if(isset($_GET['page']) && $_GET['page'] != "")
        {
            $page = $_GET['page'];
        }
        $cp = $page - 1;
        $sodu_lieu = book::getInstance()->countbook(0);
        $sotrang = $sodu_lieu/$baitren_mottrang;
        //$result =mysql_query("SELECT * FROM `data`ORDER BY `id` DESC  LIMIT {$page}*{$baitren_mottrang},{$baitren_mottrang} ") or die(mysql_error());
        $sql = "SELECT * FROM xiaob_book WHERE bookstatus != 4 and bookid = 103 ORDER BY bookid DESC  LIMIT ".$cp*$baitren_mottrang.",".$baitren_mottrang;
        $this->view->data['listbook'] = $this->model->get('adminbookModel')->bookquery($sql,false);
        $this->view->data['sotrang'] = $sotrang;

        //$this->view->data['listbook'] = $this->model->get('adminbookModel')->getlistbook();
        $this->view->data['lastest_book'] = $this->model->get('topModel')->gettop("xiaob_book","bookid");
        $this->view->data['topbook'] = $this->model->get('booktopviewModel')->gettopbook();
        $this->view->admintmp('library');
        }
    }
}