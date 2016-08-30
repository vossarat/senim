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
    	$viewdata["link1"] = "Ссылка 1";
    	$viewdata["link2"] = "Ссылка 2";   
    	$viewdata["link2"] = "Ссылка 3";   
    	$viewdata["link2"] = "Ссылка 4";    	
        return $viewdata;
    }
}
?>