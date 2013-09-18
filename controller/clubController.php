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
            //$this->view->data['infoclub'] = club::getInstance()->get_clubinfo($nhomclub);
            $this->view->show('club_index');
        }
        else
        {
            $this->view->show('club_index');
        }
    }
}