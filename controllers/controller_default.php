<?php
class controller_default extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_default();
        
    }

    function index()
    {
        $viewdata = $this->do_default_viewdata();		
		//$content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_default", $content, false, "js/js_default.js");	
        $this->view->show_view('view_template', $viewdata, true);
    }
    
    function request($param1)
    {
		$content = $this->model->get_viewdata();
        echo $content[$param1];
    }
}
?>