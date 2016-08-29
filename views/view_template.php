<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>
            <?=$pagetitle?$pagetitle:"Сеним"?>
        </title>
        <link rel="stylesheet" type="text/css" href="/css/default.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/js_slider.js"></script>
    </head>

    <body>
        <div id="page">
            <div id="top">
                <div id="logo">
                </div>
                <div id="header">
                    <?=$header?>
                </div>
            </div><!-- конец блока top -->

            <div class='viewport'>
                <ul class='slidewrapper' data-current=0>
                    <li class='slide'></li>
                    <li class='slide second'></li>
                    <li class='slide third'></li>
                    <li class='slide fourth'></li>
                </ul>
            </div>


            <div id="topmenu">
                <?=$topmenu?>
            </div>

            <div id="left">

                <div id = "phone">
                    <?=$phone?>
                </div>

            </div>

            <div id="content">
                <?=$content?>
            </div>

            <div id="right">

                <div id="comment">
                    <?=$comment?>
                </div>

            </div>

            <div id="flower">
                <?=$flower?>
            </div>

            <div id="footer">
                <?=$footer?>
            </div>

        </div><!--конец блока page-->
    </body>
</html>