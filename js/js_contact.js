$(document).ready(function() {

        var requiredFields = new Array("user_name", "user_email", "text_letter");

        $('#btn_send').on('click', function () {
                var error=0;
                $("#frm_feedback").find(":input").each(function() {
                        for(var i=0; i<requiredFields.length; i++) {
                            if($(this).attr("id")==requiredFields[i]) {
                                if(!$(this).val()) {
                                    $(this).css('border', 'red 1px solid');
                                    error=1;
                                }
                                else {
                                    $(this).css('border', 'gray 1px solid');
                                }

                            }
                        }
                    })
                if(error==0){
                    send();
                }
                else{
                    $("#msg").html('Заполните обязательные поля');
                    $("#msg").fadeIn("slow");
                    return false;
                }
            });

        function send() {
            $.ajax({
                    type: "POST",
                    url: "http://senim/contact",
                    data: {
                        action: "send",
                        user_name: $("#user_name").val(),
                        user_email: $("#user_email").val(),
                        text_letter: $("#text_letter").val(),
                    },
                    success: Callback,
                    dataType: "text"
                });
        };

        function Callback( returnedData ) {
            $("#msg").html( returnedData );
            $("#msg").css('color', 'green');
            $("#frm_feedback").trigger( 'reset' );
        }

    });