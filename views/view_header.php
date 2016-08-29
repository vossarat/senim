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
    <link rel="stylesheet" type="text/css" href="/css/fancybox.css"  media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	
</head>
<!--<div id="band">
</div>-->
<body>
<div id="page">

<div id="top">

    <div id="logo">
    </div>

    <div id="header">
        <h1>
            РГУ «Центр социально-психологической реабилитации наркозависимых лиц»
        </h1>
    </div>
</div><!-- конец блока top -->

<script>
var slideWidth=1000;
var sliderTimer;
$(function(){
$('.slidewrapper').width($('.slidewrapper').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,3000);
    $('.viewport').hover(function(){clearInterval(sliderTimer);},function(){sliderTimer=setInterval(nextSlide,3000);
    });
});

function nextSlide(){
    var currentSlide=parseInt($('.slidewrapper').data('current'));
    currentSlide++;
    if(currentSlide>=$('.slidewrapper').children().size())
    {
        currentSlide=0;   
    }
    $('.slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}


	
function hideDiv(){
    $('#flower1').hide();
    $('#flower2').hide();
    $('#flower3').hide();
    $('#flower4').hide();
    $('#flower5').hide();
}

$(document).ready(function(){
    $(".flower1").click(function(){hideDiv();$("#flower1").slideDown();return false;});
    $(".flower2").click(function(){hideDiv();$("#flower2").slideDown();return false;});	
    $(".flower3").click(function(){hideDiv();$("#flower3").slideDown();return false;});
    $(".flower4").click(function(){hideDiv();$("#flower4").slideDown();return false;});	
    $(".flower5").click(function(){hideDiv();$("#flower5").slideDown();return false;});
});

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

</script>

<div class='viewport'>
    <ul class='slidewrapper' data-current=0>
        <li class='slide'></li>
        <li class='slide second'></li>
        <li class='slide third'></li>
        <li class='slide fourth'></li>
    </ul>
</div>


<div id="topmenu">
    <?foreach ($topmenu as $link => $caption):?>
    <ul>
        <li>
            <a href="<?=HOMEDIR."/".$link?>"><?=$caption?></a>
        </li>
    </ul>
    <?endforeach?>
</div>

<div id="left">

<div id = "phone">
        <h3>Телефон доверия</h3>
	<?=$phone?>
</div> 
    
</div>

<div id="content">