<?php

class controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new view();
	}
	
	// действие (action), вызываемое по умолчанию
	function index()
	{
		// todo	
	}
	
}
?>
