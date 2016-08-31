<?php
class model_topmenu extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {
    	$viewdata[""] = "Главная";
    	$viewdata["about"] = "О центре";
    	$viewdata["criterion"] = "Критерии отбора";
    	$viewdata["contact"] = "Контакты";		
    	$viewdata["family"] = "Родным и близким";
    	$viewdata["creative"] = "Творчество";  
    	$viewdata["photogallery"] = "Фотогалерея";
	
        return $viewdata;
    }
}
?>