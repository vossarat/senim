<?php

class model
{
    public function __construct()
    {
        //$this->db = new database();
    }

    function do_new_viewdata()
    {
        $viewdata["topmenu"] = '';
        //$viewdata["info"] = '';
        $viewdata["comment"] = '';
        $viewdata["phone"] = '';
        return $viewdata;
    }

    public function do_default_viewdata()
    {
        $viewdata = $this->do_new_viewdata();
        foreach ($viewdata as $position => $content)
        {
            if (empty($content))
            {
                $modelname = "model_$position";
                $model     = new $modelname;
                $viewdata["$position"] = $model->get_viewdata();
            }
        }
        return $viewdata;

    }

} // end class Model

?>