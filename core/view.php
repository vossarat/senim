<?php

class view
{
	function show_view($template, $viewdata = NULL, $foo = NULL, $msg=NULL)
	{
		extract($viewdata);
		include 'views/view_header.php';
		include 'views/'.$template.'.php';
		include 'views/view_footer.php';
	}
}
?>