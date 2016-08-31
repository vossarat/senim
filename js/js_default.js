$(document).ready(function() { 

        $("#content img").on("mouseout", function(){
                $(this).removeClass('changeimg')
            });
        
        $("#content img").on("mouseover", function(){
                $(this).addClass('changeimg')
            });
        
        $("#content img").on("click", request);

        function request() {
            $.ajax({
                    type: "POST",
                    url: "http://senim/default/request/"+$(this).index("#content img"),
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