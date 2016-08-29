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