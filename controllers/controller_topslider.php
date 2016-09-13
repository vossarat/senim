<?php
class controller_topslider extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_topslider();
    }

    function index()
    {
        $content = $this->model->get_viewdata();
        return $this->view->show_view("view_topslider", $content, false, HOMEDIR."/js/js_topslider.js");
    }
}
?>