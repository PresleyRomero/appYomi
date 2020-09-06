
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
        var $msg=$('#message-login').css('background','#923030').html(':( Campos vacíos. No permitido').slideDown(200);        
        setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
    }else{        
        $.ajax({
            type: 'POST',
            url: '../controller/Clogin.php',
            data: {"op":"login",txtuser,txtpass},
            success: function(resultado){
                if($.trim(resultado)=="true"){
                    $('#form-login input').val("");
                    $(location).attr('href',"d_cards.php");
                }else{
                    var $msg=$('#message-login').css('background','#923030').html(':( Datos incorrectos').slideDown(200);        
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
    $('#txtdni').focus();
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

$('#txtdni').keyup(function(e) {
    if(e.which == 13){
        restablecer();
    }
});

$('#form-recuperar').submit(function(event){
    event.preventDefault();
});

function restablecer(){
    var txtdni=$.trim($('#txtdni').val());
    if(txtdni=="" || txtdni.length!=8){       
        var $msg=$('#message-login').css('background','#923030').html('Ingrese un DNI correcto').slideDown(200);        
        setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
    }else{        
        $.ajax({
            type: 'POST',
            url: '../controller/Clogin.php',
            data: {"op":"recuperarpass",txtdni},
            beforeSend: function () {$('#message-login').css('background','#3997dc').html('Enviando...').slideDown(200);},
            success: function(resultado){                
                var res=($.trim(resultado)).split('?'); 
                if(res[0]=="true"){
                    var email=res[1];
                    $('#message-login').html('').slideUp(200);
                    var $msg=$('#message-success').html('<strong>Contraseña restablecida</strong>.<br>Revise su correo:<br>'+email).slideDown(200);        
                    setTimeout(function(){$msg.html('').slideUp(200); $('#form-recuperar input').val(""); $(location).attr('href',"login.php"); }, 5000);                    
                }else{
                    var $msg=$('#message-login').css('background','#923030').html('No existe usuario asociado a este DNI');     
                    setTimeout(function(){$msg.html('').slideUp(200); }, 3000);
                }
            }
        });        
    }   
}

// ***********************************************************  APOYO  ***********************************************************************
    validation();
    
    function validation(){
        $('.int-pos').numeric({ decimal: false, negative: false });
        $('.decimal').numeric({decimalPlaces: 2});
    }