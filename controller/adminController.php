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
    public function addquestion()
    {
        echo $question = $_POST['question'];
        echo $anwser1 = $_POST['answer1'];
        echo $anwser2 = $_POST['answer2'];
        echo $anwser3 = $_POST['answer3'];
        echo $anwser4 = $_POST['answer4'];
        echo $subject = $_POST['isubject'];
        echo $correctans = $_POST['correctans'];
        echo $score = $_POST['score'];
        echo $relatepost = $_POST['relatepost'];
        global $db;
        $cs1 = $cs2 = $cs3 = $cs4 = 0;
        if($correctans == 'ans1')
        {
            $cs1 = 1;
        }
        if($correctans == 'ans2')
        {
            $cs2 = 1;
        }
        if($correctans == 'ans3')
        {
            $cs3 = 1;
        }
        if($correctans == 'ans4')
        {
            $cs4 = 1;
        }
        $db->query("INSERT INTO tracnghiem_questions(question_text,question_points,subjectid) VALUES ('".$question."','".$score."','".$subject."')");
        $db->query("SELECT * FROM tracnghiem_questions WHERE question_text = '".$question."'");
        $qid = $db->fetch_object($firstrow = true)->questionid;
        $db->query("INSERT INTO tracnghiem_answers(questionid,answer_text,answer_correct) VALUES ('".$qid."','".$anwser1."','".$cs1."')");
        $db->query("INSERT INTO tracnghiem_answers(questionid,answer_text,answer_correct) VALUES ('".$qid."','".$anwser2."','".$cs2."')");
        $db->query("INSERT INTO tracnghiem_answers(questionid,answer_text,answer_correct) VALUES ('".$qid."','".$anwser3."','".$cs3."')");
        $db->query("INSERT INTO tracnghiem_answers(questionid,answer_text,answer_correct) VALUES ('".$qid."','".$anwser4."','".$cs4."')");
    }
    private function checklogin()
    {
        if(!(isset($_SESSION['xID']) && $_SESSION['xID'] != "" && $_SESSION['xGroup'] == "2261010"))
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
    public function imm()
    {
        session_start();
        for($i=1;$i<=10;$i++){
            session_start();
            $_SESSION["progress"]=$i;
            session_write_close();
            sleep(1);
        }
    }
    public function imm2()
    {
        session_start();
        echo $_SESSION["progress"];
    }
    public function tracnghiem()
    {
        $this->view->admintmp("tracnghiem_taomoi");
    }
    public function method_ajaxsearch()
    {
            if(isset($_GET['keyword'])){
            $keyword = 	trim($_GET['keyword']) ;		// Cắt bỏ khoảng trắng
            //$keyword = mysqli_real_escape_string($dbc, $keyword);	// Lọc các ký tự đặc biệt

            // Câu query lấy dữ liệu
            $query = "select * from xiaob_book where bookid = '$keyword' or bookname like '%$keyword%' or bookcontent like '%$keyword%'";
            global $db;
                $db->query($query);

            if($db->num_row()){
                // Kiểm tra có dòng record nào hay không?
                   // Hiển thị dữ liệu
                $row = $db->fetch_object();
                foreach($row as $r)
                {
                    echo '<div class="row-fluid">
                    <div class="span1">
                                <input type="checkbox" name="relatepost" value="'.$r->bookid.'">
                            </div>
                            <div class="span11">
                             <p class="title"> <a href="http://thuviengiaoduc.org/xem/book/'.$r->bookid.'" target="_blank" ><b>'.$r->bookname.'</b></a><br>'.$r->bookcontent.'</p></div></div>'   ;
                }
                }else {
                    echo 'Không có kết quả nào cho từ khóa :"'.$_GET['keyword'].'"';
                }

        }else {
            echo 'Không có từ khóa nào được gởi đến.';
        }

    }
    public function importdiem()
    {
        $c = count($_SESSION['outputdata']);
        for($i = 0;$i < $c;$i++)
        {
            session_start();
            $_SESSION["progress"]=$i;
            if(isset($_SESSION['outputdata'][$i]) != "")
            {
                $s = $_SESSION['outputdata'][$i];
                $mamon = $_SESSION['mamon'];
                $hocky = $_SESSION['hocky'];
                global $db;
                if($s[5] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2293566','{$s[5]}','{$hocky}')");
                }
                if($s[6] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2295820','{$s[6]}','{$hocky}')");
                }
                if($s[7] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2293043','{$s[7]}','{$hocky}')");
                }
                if($s[8] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2292394','{$s[8]}','{$hocky}')");
                }
                if($s[9] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2292478','{$s[9]}','{$hocky}')");
                }
                if($s[10] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2291824','{$s[10]}','{$hocky}')");
                }
                if($s[11] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2298856','{$s[11]}','{$hocky}')");
                }
                if($s[12] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2298921','{$s[12]}','{$hocky}')");
                }
                if($s[13] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2296313','{$s[13]}','{$hocky}')");
                }
                if($s[14] != "")
                {
                    $db->query("INSERT INTO xdata_diem(xid,mamon,madiem,diem,hocky) VALUES ('{$s[4]}','{$mamon}','2296337','{$s[14]}','{$hocky}')");
                }

            }
            session_write_close();
            sleep(1);
        }
    }
    public function processajax()
    {
        session_start();
        $msize = $_SESSION['global_size'];
        $ps = (($_SESSION["progress"]+1)/$msize)*100;
        echo $ps;
    }
    public function chuanhoadulieu()
    {
        $this->view->admintmp("processimport");
    }
    public function process()
    {
        if($_GET['action'] == "importdiem")
        {
            $_SESSION['mamon'] = $_POST['isubject'];
            $_SESSION['hocky'] = $_POST['ihk'];
            $_SESSION['scc'] = 0;
            $files = $_FILES['upfile'];
            $filename = $files['name'];
            $tmppath = $files['tmp_name'];
            $newname = "ves-data-".md5(date('m/d/Y h:i:s a', time()))."-".$filename;
            if($filename !="")
            {
                move_uploaded_file ($tmppath, 'uploads/vesdata/'.$newname);
            }
            ExcelReader::getInstance()->reader('uploads/vesdata/'.$newname,"DIEM");
            $this->redirect->redirect("admin","chuanhoadulieu");
        }
    }
    public function diem($function)
    {
        $this->checklogin();
        $func = $function[1];
        switch($func)
        {
            case "import":
            {
                    $this->view->admintmp("diem_import");
                    break;

            }
            case "export":
            {
                break;
            }
            default:
                break;
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
        $sql = "SELECT * FROM xiaob_book WHERE bookstatus != 4  ORDER BY bookid DESC  LIMIT ".$cp*$baitren_mottrang.",".$baitren_mottrang;
        $this->view->data['listbook'] = $this->model->get('adminbookModel')->bookquery($sql,false);
        $this->view->data['sotrang'] = $sotrang;

        //$this->view->data['listbook'] = $this->model->get('adminbookModel')->getlistbook();
        $this->view->data['lastest_book'] = $this->model->get('topModel')->gettop("xiaob_book","bookid");
        $this->view->data['topbook'] = $this->model->get('booktopviewModel')->gettopbook();
        $this->view->admintmp('library');
        }
    }
    public function thoikhoabieu($function)
    {
        $this->checklogin();
        $func = $function[1];
        switch($func)
        {
            case "import":
            {
                $this->view->admintmp("tkb_import");
                break;

            }
            case "export":
            {
                break;
            }
            default:
                break;
        }
    }
}