
$('#btnentrar').click(function (){
    enviar();
});

$('#txtuser, #txtpass').keyup(function(e) {
    if(e.which == 13){
        enviar();
     }
});

function enviar(){
    var txtuser=$.trim($('#txtuser').val());
    var txtpass=$.trim($('#txtpass').val());
    if(txtuser=="" || txtpass==""){       
        var $msg=$('#message-login').html(':( Campos vacíos. No permitido').slideDown(200);        
        setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
    }else{        
        $.ajax({
            type: 'POST',
            url: '../controller/Clogin.php',
            data: {"op":"loginadmin",txtuser,txtpass},
            success: function(resultado){
                if($.trim(resultado)=="true"){
                    $(location).attr('href',"d_alumnos.php");
                    $('#form-login input').val("");
                }else{
                    var $msg=$('#message-login').html(':( Datos incorrectos').slideDown(200);        
                    setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
                }
            }
        });        
    }   
}

$('#linkolvido').click(function (){
    $('#titlelogin').text("").text("Recuperar Contraseña");
    $('#form-login').prop('hidden',true);
    $('#form-recuperar').prop('hidden',false);    
    $('#txtuser2').focus();
});

$('#linkatras').click(function (){
    $('#titlelogin').text("").text("Iniciar Sesión");
    $('#form-recuperar').prop('hidden',true);
    $('#form-login').prop('hidden',false);    
    $('#txtuser').focus();
});

$('#btnrestablecer').click(function (){
    restablecer();
    
});

$('#txtuser2').keyup(function(e) {
    if(e.which == 13){
        restablecer();
     }
});

$('#form-recuperar').submit(function(event){
    event.preventDefault();
});

function restablecer(){
    var txtuser=$.trim($('#txtuser2').val());
    if(txtuser==""){       
        var $msg=$('#message-login').css('background','#923030').html('Ingrese usuario').slideDown(200);        
        setTimeout(function(){$msg.html('').slideUp(200); }, 2000);
    }else{        
        $.ajax({
            type: 'POST',
            url: '../controller/Clogin.php',
            data: {"op":"recuperarpassAdmin",txtuser},
            beforeSend: function () {$('#message-login').css('background','#3997dc').html('Enviando...').slideDown(200);},
            success: function(resultado){                
                var res=($.trim(resultado)).split('?'); 
                if(res[0]=="true"){
                    var email=res[1];
                    $('#message-login').html('').slideUp(200);
                    var $msg=$('#message-success').html('<strong>Contraseña restablecida</strong>.<br>Revise su correo:<br>'+email).slideDown(200);        
                    setTimeout(function(){$msg.html('').slideUp(200); $('#form-recuperar input').val(""); $(location).attr('href',"loginadmin.php"); }, 5000);                    
                }else{
                    var $msg=$('#message-login').css('background','#923030').html('Este usuario no existe');     
                    setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
                }
            }
        });        
    }   
}
