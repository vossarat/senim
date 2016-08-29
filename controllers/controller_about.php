<?php
class controller_about extends controller
{
    function __construct()
    {
        $this->model = new model_about();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "О центре";
        $viewdata["content"] = $this->model->get_viewdata();
        $msg = $this->model->msg;
        $this->view->show_view('view_about', $viewdata,'',$msg); 
    }

}
?>