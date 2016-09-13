<?php
class model_contact extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
		
	}
	
	public function sendletter() {
		echo "Запрос пошел с параметром = ".var_dump($_POST);
	}
    
        
}
?>