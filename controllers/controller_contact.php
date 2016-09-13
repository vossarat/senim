<?php
class controller_contact extends controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new model_contact();
    }

    function index()
    {
        if ($_POST["action"] == "send") {
            $this->request();
        }
        else
        {
            $viewdata = $this->do_default_viewdata();
            $viewdata["pagetitle"] = "Контакты";
            $content = $this->model->index();
            $viewdata["content"] = $this->view->show_view("view_contact", $content, false, HOMEDIR."/js/js_contact.js");
            $this->view->show_view('view_template', $viewdata, true);
        }
    }
    
    function request() {
		$this->model->sendletter();
	}

}
?>