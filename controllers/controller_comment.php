<?php
class controller_comment extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_comment();
    }

    function index()
    {       
        $content = $this->model->get_viewdata();
        return $viewdata["comment"] = $this->view->show_view("view_comment", $content);
    }
    
    function show($param1)
    {
    	$viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "Отзывы";        
        $content = $this->model->show($param1);
        $viewdata["content"] = $this->view->show_view("view_comment_general", $content);        
        $this->view->show_view('view_template', $viewdata, true);
    }

}
?>