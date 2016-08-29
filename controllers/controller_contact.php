<?php
class controller_contact extends controller
{
    function __construct()
    {
        $this->model = new model_contact();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "Контакты";
        $this->model->index();
        $msg = $this->model->msg;
        $this->view->show_view('view_contact', $viewdata,'',$msg); 
    }

}
?>