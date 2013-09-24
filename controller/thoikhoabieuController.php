<?php
/**
 * Project: xvn.
 * File: thoikhoabieuController.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 4:40 PM - 8/24/13
 * Website: www.xiao.vn
 */

Class

Controller extends baseController
{
    public function index()
    {
        if(isset($_SESSION['xGroup']) && $_SESSION['xGroup'] == "2268470")
        {
            $malop ='8226572';
            $dstkb = $this->model->get('tkbModel')->gettkb($malop);
            $t = "";
            foreach($dstkb as $tkb)
            {
                $t[$tkb->thu][$tkb->tiet] = $tkb->mamon;
            }
            $this->view->data['tkbs'] = $t;
            $this->view->show('app_tkb');
        }
        elseif(isset($_SESSION['xGroup']) && $_SESSION['xGroup'] == "2267588")
        {
            $malop ='8226572';
            $dstkb = $this->model->get('tkbModel')->gettkb_gv($malop);
            $t = "";
            foreach($dstkb as $tkb)
            {
                $t[$tkb->thu][$tkb->tiet] = $tkb->malop;
            }
            $this->view->data['tkbs'] = $t;
            //$this->view->data['info'] = "Dat la thoi khoa bieu giao vien!";
            $this->view->show('app_tkb');
        }
        else
        {
            //$this->view->data['info'] = "Ban khong co quyen xem tkb hoac khong co thoi khoa bieu!";
            $this->view->show('app_tkb');
        }

    }
    public function huy()
    {
        $bv = $_GET['sid'];
        $moi = $this->model->get('schoolModel')->get_truong($bv);
        $this->view->data['truong']= $moi;
        $this->view->show('school_index');
    }

    // Sử dụng tkbModel -> function them_tkb
    public function add()
    {
            $buoi = $_POST['tkbbuoi'];
            $thu = $_POST['tkbthu'];
            $tiet = $_POST['tkbtiet'];
            $mon = $_POST['tkbmon'];
            $giaovien = $_POST['tkbgiaovien'];
            $lop = $_POST['tkblop'];
            $nhommon = $_POST['tkbnhommon'];
            $this->model->get("tkbModel")->them_tkb($buoi,$thu,$tiet,$mon,$giaovien,$lop,$nhommon);
    }
    //Sử dụng tkbModel->function gettkb_gv($magv)-> function sưa_tkb -> function xoa_tkb
    public function edit()
    {
        $tkbid = $_GET['tkbid'];
        if(isset($_POST['tkbid']) && $_POST['tkbid'] != "")
        {
            $mon = $_POST['tkbmon'];
            $giaovien = $_POST['tkbgiaovien'];
            $this->model->get("tkbModel")->sua_tkb($mon,$giaovien);
        }
        else
        $this->view->show('app_tkb');
    }
    // Sử dụng tkbModel -> function xoa_tkb
    public function delete()
    {
        $delete =$_GET['tkbid'];
        if(isset($_POST['tkbid']) && $_POST['tkbid'] != "")
        {

            $this->model->get("tkbModel")->xoa_tkb($delete);
        }
        else
        $this->view->show('app_tkb');
    }
}
