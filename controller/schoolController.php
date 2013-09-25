<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/9/13
 * Time: 2:22 PM
 * To change this template use File | Settings | File Templates.
 */
Class schoolController extends baseController
{
    public function index()
    {
        //$this->view->data['ch']=$this->model->get('schoolModel')->get_truong();
        //$this->view->data['ch']=$this->model->get('schoolModel')->get_truong();
        $this->view->show('school_index');
    }
    public function school()
    {
        //$xid sẽ được lấy từ danh sách;
        $sid = '8274006';
        $this->model->get('schoolModel')->get_truong('sid');
        $this->view->data['tentruong'] = school::getInstance()->truong($sid,'tentruong');
        $this->view->data['namthanhlap'] = school::getInstance()->truong($sid,'namtl');
        $this->view->data['sodienthoai'] = school::getInstance()->truong($sid,'fax');
        $this->view->data['website'] = school::getInstance()->truong($sid,'fax');
        $this->view->show('school_index');
    }
    public function huy()
    {
        $bv = $_GET['sid'];
        $moi = $this->model->get('schoolModel')->get_truong($bv);
        $this->view->data['truong']= $moi;
        $this->view->show('school_index');
    }
    public function schoolinfo($pa)
    {
        $sid = $pa[1];
        $abcd = $pa[2];
        $error = "";
        if(isset($sid) && $sid != "")
        {
            $truong = $this->model->get('schoolModel')->get_truong($sid);
            $this->view->data['truong'] = $truong;
            $this->view->data['abcd'] = $abcd;
            $this->view->show('school_index');

        }
        else
        {
            $this->view->show('error404');
        }
        if(strlen($error)>1)
        {
            $this->view->data['error'] = $error;
        }
        $this->view->show('school_index');
    }

}