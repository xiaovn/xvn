<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dinh Duy
 * Date: 9/25/13
 * Time: 2:13 PM
 * To change this template use File | Settings | File Templates.
 */
Class applicationController extends baseController
{
    public function index()
    {
        $this->view->data['app_heading'] = 'This is the application area';
        $this->view->show('app_index');
    }
    public function applist()
    {
        $this->view->data['applist'] = $this->model->get('applicationModel')->get_applist();
        $this->view->show('application_list');
    }
}