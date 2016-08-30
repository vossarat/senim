<?php

class controller
{
    function __construct()
    {
        $this->view = new view();
    }

    function do_default_viewdata($template_positions = array("header","topmenu", "carousel", "phone", "comment", "footer", "topslider")) //контент позиций по умолчанию
    {
        foreach ($template_positions as $position) {
            $controller_position = "controller_$position";
            $controller          = new $controller_position;
            $viewdata[$position] = $controller->index();
        }
        return $viewdata;
    }
    }
?>
