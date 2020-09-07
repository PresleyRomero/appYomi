$(document).ready(function(){
    $('select').formSelect();      
    // $('.modal').modal();        
    // $('.collapsible').collapsible();
    // $('.fixed-action-btn').floatingActionButton({direction: 'left'});
    // $('.tooltipped').tooltip();
    $('.sidenav').sidenav(); 

    $('#txtnombre').focus();

    $('#btnregistrar').on('click',function(){ //Registrar datos de la pelicula
        var aux=true;     
        if ($('#txtnombre').val()=="" || $('#txtfrase').val()=="" ) { M.toast({html: '¡Complete los campos obligatorios (*)!', classes:'red'}); aux=false;}
        else{
            if (($('#cbactores').val()).length==0) { M.toast({html: '¡Seleccione por lo menos un actor!', classes:'red'}); aux=false;}
            if ($('#fileimg').prop('files')[0]==null) { M.toast({html: '¡Por favor, suba una imagen!', classes:'red'}); aux=false;}
        }        
        if(aux){
            var formData = new FormData($("#form-datospeli")[0]);
            $.ajax({        
                type: 'POST',   
                url: '../controller/CAdmin.php',
                data: formData,
                contentType: false, //permite enviar datos enctype="multipart/form-data"
                processData: false, //permite enviar datos enctype="multipart/form-data"
                success: function(resultado) {     
                    if ($.trim(resultado) == "true") {
                        M.toast({
                            html: '¡Éxito!. Datos Registrados', 
                            classes:'green', 
                            displayLength:2000
                        });
                        limpiarForm("form-datospeli");
                    }else{
                        M.toast({html: ':( No se pudo registrar:<br> '+resultado, classes:'red'});
                    }            
                }
            });
        }
    });

});

// ***********************************************************  APOYO  ***********************************************************************
    
function limpiarForm($idform){
    $('#'+$idform+' input').val("");
    $('#'+$idform+' textarea').val("");
    $('#'+$idform+' select option').each(function(){
        $(this).prop("selected",false);
    });
    console.log("world");
}