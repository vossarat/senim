$(document).ready(function() {
	
    $('img').on("click", request);

    function request() {
        $.ajax({
                type: "POST",
                url: "http://senim/default/request/"+"0",
                data: {
                    request: "info",
                },
                success: Callback,
                dataType: "text"
            });
    };

    function Callback( returnedData ) {
        $("#info").html(returnedData);
    };



    });