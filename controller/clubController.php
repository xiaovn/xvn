<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/18/13
 * Time: 3:59 PM
 * To change this template use File | Settings | File Templates.
 */
Class clubController extends baseController
{
    public function index()
    {
        $id_clubadmin = $_SESSION['xID'];

        if(isset($_POST['clubname'])&& $_POST['clubname']!="" && isset($_POST['clubgroup'])&& $_POST['clubgroup']!="")
        {
            $maclub = $_POST['clubid'];
            $tenclub = $_POST['clubname'];
            $nhomclub = $_POST['clubgroup'];
            $anhclub = $_POST['clublogo'];
            $this->model->get('clbModel')->get_createclub($maclub,$tenclub,$nhomclub,$id_clubadmin,$anhclub);
            $this->view->show('club_index');
        }
        else
        {
            $this->view->show('club_index');
        }
    }
    public function view($pa)
    {
        $clubid = $pa[1];
       if((isset($clubid)&& $clubid != ""))
        {
            $thongtin = $this->model->get('clubModel')->get_viewclub($clubid);
            $this->view->data['thongtinclub'] = $thongtin;
            $this->view->show('club_view');
        }
        else
        {
            $this->view->show('error404');
        }
    }
}