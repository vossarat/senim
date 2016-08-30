<?php
class controller_phone extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_phone();
    }

    function index()
    {
        $content = $this->model->get_viewdata();
        return $viewdata["phone"] = $this->view->show_view("view_phone", $content);

    }
}
?>