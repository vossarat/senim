<?php
class controller_creative extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_creative();        
    }

    function index()
    {
        $viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Творчество";        
        $content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_creative", $content);        
        $this->view->show_view('view_template', $viewdata, true);
    }

}
?>