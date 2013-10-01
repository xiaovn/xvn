<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 5:19 PM
 * To change this template use File | Settings | File Templates.
 **/
Class followerController extends baseController
{
    public function index()
    {
        $xid = $_SESSION['xID'];
        $this->view->data['toitheodoi'] = $this->model->get('followerModel')->get_follower($xid);
        $this->view->show('follower_index');
    }
}