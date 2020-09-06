$(document).ready(function(){	
    
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();


    $('#btncambiarpass').click(function (){
	    var passactual=$('#txtpassactual').val();
	    var passnew=$('#txtpassnew').val();
	    var passconf=$('#txtpassconf').val();
	    if(passnew==""){
            M.toast({html: 'Campos vacíos. No permitido', classes:'red'});
        }else if(passnew.length<6){
            M.toast({html: 'La contraseña debe ser de 6 caracteres o más', classes:'red'});
        }else if (passnew!=passconf){
            M.toast({html: 'Las contraseñas no coinciden', classes:'red'});
        }else{ 
            $.ajax({
            	type: 'POST',
                url: '../controller/CPass.php',
                data: {"op":"modificarpass","passactual":passactual,"passnew":passnew},
                success: function(resultado){
                    if($.trim(resultado)=="true"){
                        M.toast({html: '¡Éxito!. Contraseña cambiada', classes:'green'});
                        $('#form-cambiopass input').val("");
                    }else{
                       M.toast({html: ':( La contraseña actual es Incorrecta', classes:'red'});
                    }
                }
            });
        }	     
	});
	
});