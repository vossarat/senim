<?php
class controller_404 extends controller
{
    function __construct()
    {
        $this->model = new model_404();
        $this->view = new view();
    }

    function index()
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        $viewdata = $this->model->do_default_viewdata();
        $this->view->show_view('view_404', $viewdata);
    }
}
?>