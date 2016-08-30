<?php
class controller_about extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_about();
    }

    function index()
    {        
        $viewdata = $this->do_default_viewdata();
        $viewdata["pagetitle"] = "О центре";        
        $content = $this->model->get_viewdata();
        $viewdata["content"] = $this->view->show_view("view_about", $content);        
        $this->view->show_view('view_template', $viewdata, true, "js/js_carousel.js");
    }

}
?>