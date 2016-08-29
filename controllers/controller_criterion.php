<?php
class controller_criterion extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_criterion();
    }

    function index()
    {
    	$viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Критерии отбора";        
        $content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_criterion", $content);        
        $this->view->show_view('view_template', $viewdata, true);
    }

}
?>