<?php
class model_topmenu extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {
    	$viewdata["about"] = "О центре";
    	$viewdata["criterion"] = "Критерии отбора";
    	$viewdata["contact"] = "Контакты";		
    	$viewdata["photogallery"] = "Фотогалерея";    	
        return $viewdata;
    }
}
?>