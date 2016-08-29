<?php
class controller_criterion extends controller
{
    function __construct()
    {
        $this->model = new model_criterion();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "Критерии отбора";
        $viewdata["content"] = $this->model->get_viewdata();
        $msg = $this->model->msg;
        $this->view->show_view('view_criterion', $viewdata,'',$msg); 
    }

}
?>