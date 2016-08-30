<?php

class view
{
    function show_view($template, $viewdata = null, $generalView = false, $jsScript = null)
    {
    	//$numargs = func_num_args();    	
        if ($generalView) {
            extract($viewdata);
            include 'views/'.$template.'.php';
        }
        elseif (!$_POST) {
            ob_start();
            	include 'views/'.$template.'.php';
            	$contentHtml = ob_get_contents();
            ob_clean();
            return $contentHtml;
        }
        else {
			include 'views/'.$template.'.php';
		}
    }
    

}

?>