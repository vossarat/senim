<?php
class controller_carousel extends controller
{
    function __construct()
    {
        parent::__construct();
        //$this->model = new model_header();
    }

    function index()
    {
        return $this->view->show_view("view_carousel", $content, false, "js/js_carousel.js");
    }
}
?>