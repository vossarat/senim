$(document).ready(function() {

        /*function tick() {
            $('#ticker li:first').slideUp( function ()
                {
                    $(this).appendTo($('#ticker')).slideDown();
                });
        }
        var tickInterval = setInterval(tick, 3000);*/

        //$("#ticker").on("mouseover", clearInterval(tickInterval));
        //$("#ticker").on("mouseout", tickInterval);
        
        
        function tick() {
            $('#ticker li:first').slideUp();
        }
        
        var tickInterval = setInterval(tick, 3000);

    });