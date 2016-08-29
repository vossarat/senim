<?php
class controller_main extends controller
{
    function __construct()
    {
        $this->model = new model_main();
        $this->view = new view();
    }

    function index()
    {
        $viewdata = $this->model->do_default_viewdata();
		$viewdata["content"] = $this->model->get_viewdata();
        $this->view->show_view('view_main', $viewdata);
   
    } 

}

?>