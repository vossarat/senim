<?php
class controller_comment extends controller
{
    function __construct()
    {
        $this->model = new model_comment();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "Отзывы";
        $viewdata["content"] = $this->model->get_viewdata();
        $msg = $this->model->msg;
        $this->view->show_view('view_comment', $viewdata,'',$msg); 
    }
    
    function show($param1)
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "Отзывы";
        $viewdata["content"] = $this->model->show($param1);
        $msg = $this->model->msg;
        $this->view->show_view('view_comment', $viewdata,'',$msg); 
    }

}
?>