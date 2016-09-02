<?php

class controller
{
    function __construct()
    {
        $this->view = new view();
    }

    //контент позиций по умолчанию
    function do_default_viewdata($template_positions = array(
            "header",
            "topmenu",
            "phone",
            "comment",
            "footer",
            "topslider"
        ))
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
