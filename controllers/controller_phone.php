<?php

class controller_phone extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_phone();
    }

    function index()
    {
        $content = $this->model->get_viewdata();
        return $viewdata["phone"] = $this->view->show_view("view_phone", $content);
    }
    
    function info()
    {
        $viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Телефон доверия";        
        $content = $this->model->info();
        $viewdata["content"] = $this->view->show_view("view_phone_info", $content);        
        $this->view->show_view('view_template', $viewdata, true);
    }
}
?>