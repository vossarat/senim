<?php
class controller_photogallery extends controller
{
    function __construct()
    {
        $this->model = new model_photogallery();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
        $viewdata["pagetitle"] = "Фотогалерея";
        $viewdata["content"] = $this->model->get_viewdata();
        $msg = $this->model->msg;
        $this->view->show_view('view_photogallery', $viewdata,'',$msg); 
    }

}
?>