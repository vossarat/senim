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
        $viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Фотогалерея";        
        $content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_photogallery", $content);             
        $this->view->show_view('view_template', $viewdata, true);
    }

}
?>