<?php
class controller_family extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_family();        
    }

    function index()
    {
        $viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Родным и близким";        
        $content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_family", $content);        
        $this->view->show_view('view_template', $viewdata, true);
    }

}
?>