<?php
class controller_topmenu extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_topmenu();
    }

    function index()
    {
        $content = $this->model->get_viewdata();
        return $this->view->show_view("view_topmenu", $content);

    }
}
?>