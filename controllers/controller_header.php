<?php
class controller_header extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_header();
    }

    function index()
    {
        $content = $this->model->get_viewdata();
        return $this->view->show_view("view_header", $content, false);
    }
}
?>