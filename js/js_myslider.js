$(document).ready(function() {

        function tick(){
            $('#ticker li:first').slideUp( function ()
                {
                    $(this).appendTo($('#ticker')).slideDown();
                });
        }
        var tickInterval = setInterval(function(){ tick () }, 3000);

        //$("#ticker").on("mouseover", clearInterval(tickInterval));
        //$("#ticker").on("mouseout", tickInterval);

    });