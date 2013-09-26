<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ken Zaki
 * Date: 26/09/2013
 * Time: 14:01
 * To change this template use File | Settings | File Templates.
 */
Class apiController Extends baseController {
    public function index()
    {
        $this->view->show("test_view");
    }
    public function setpoint($io)
    {
        $xid = $io[1];
        $type = $io[2];
        $this->view->data['xid'] = $xid;
        $this->view->data['type'] = $type;
        $this->view->data['a'] = $this->model->get("apiModel")->setpoint($xid,$type);
        $this->view->show("test_view");
    }
}