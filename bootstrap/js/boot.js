$(function() {

    $("#message_error_registro").alert();
    // Ajax para enviar a newuser.php para registrar usuario
    $("#submit_registro").click(function() {
        if(($("#email1").val()!=""&&$("#email2").val()!="")) {
            if($("#email1").val()==$("#email2").val()) {
                $.ajax({
                    type:"post",
                    url: "controller/newuser.php",
                    dataType:"json",
                    data: {
                        usuario:$("#usuario").val(),
                        email:$("#email2").val(),
                        password:$("#password").val()
                    },
                    success: function( data ) {
                        console.log(data);
                        if(data.add) {
                            // Ok Reg
                        } else {
                            $("#message_error_registro").addClass("alert alert-error");
                            $("#message_error_registro").prepend("<h4>Warning!</h4>");
                            $("#message_error_registro").html(data.error);
                            $('#message_error_registro').fadeOut(6000, "linear");
                        }
                    }
                });
            } else {
                alert("No son iguales");
            }
        }
    });

    $("#submit_login").click(function() {
       if($("#user").val()!=""&&$("#pwd").val()!="") {
           $.ajax({
               type:"post",
               url: "controller/login.php",
               dataType:"json",
               data: {
                   usuario:$("#user").val(),
                   password:$("#pwd").val()
               },
               success: function( data ) {
                   console.log(data);
                   if(data.session) {
                       $(location).attr("href", "home/");
                   }
               }
           });
       }
    });

    $("#salir").click(function(){
        $(location).attr("href", "../");
    });

});