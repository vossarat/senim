$(document).ready(function() {

        var tickInterval = setInterval(tick, 3000);
        var ticker = document.getElementById('ticker');

        function tick() {
            $('#ticker li:first').slideUp( function() {
                    $(this).appendTo($('#ticker')).slideDown();
                });
        };

        ticker.addEventListener("mouseenter", function() {
                clearInterval(tickInterval);
            });

        ticker.addEventListener("mouseleave", function() {
                tickInterval = setInterval(tick, 3000);
            });

    });