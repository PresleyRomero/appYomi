$(document).ready(function(){
    $('select').formSelect();      
    $('.modal').modal();     
    $('.sidenav').sidenav(); 

    $('#cbcategoria').change();

});


$('#cbcategoria').on('change',function(){
    var idcategoria = $(this).val();             
    $.ajax({      
        type: 'POST',
        url: '../controller/CAdmin.php',
        data: {"op":"listarpelis",idcategoria},
        beforeSend: function () { preloader($('#div-cards-pelis'));},
        success: function(resultado){ 
            var $div=$('#div-cards-pelis').html('');
            if($.trim(resultado)=="vacio"){ $div.append(`<h6 class=center>NO SE ENCONTRÓ DATOS PARA ESTA CATEGORÍA</h6>`); }
            else{
                var lst=JSON.parse(resultado); 
                //Dibujamos cada card    
                for (var i = 0; i < lst.length; i++) { 
                    $div.append(
                        `<div class="col s12 m4 l4">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="frontend/img/uploads-img-cards/${lst[i]['route_img']}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">${lst[i]["nombre"]}<i class="material-icons right">more_vert</i></span>
                              <p class="center"><a href="#"><em>${lst[i]["frase"]}</em></a></p>
                            </div>                
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">${lst[i]["nombre"]}<i class="material-icons right">expand_more</i></span>
                              <div class="card-tabs">
                                <ul class="tabs tabs-fixed-width">
                                  <li class="tab"><a href="#desc-${lst[i]["idpelicula"]}">Stock</a></li>
                                  <li class="tab"><a class="active" href="#pers-${lst[i]["idpelicula"]}">Tallas</a></li>
                                  <li class="tab"><a href="#mas-${lst[i]["idpelicula"]}">Más</a></li>
                                </ul>
                              </div>
                              <div class="card-content grey lighten-4">
                                <div id="desc-${lst[i]["idpelicula"]}">
                                  <p>${lst[i]["descripcion"]}</p>
                                </div>
                                <div id="pers-${lst[i]["idpelicula"]}">
                                </div>
                                <div id="mas-${lst[i]["idpelicula"]}" >
                                  <div class="btns-flex">
                                    <button type="button" class="btn waves-effect modal-trigger" data-target="modal-modificar" id="btnmodificar-${lst[i]['idpelicula']}" onclick="cargarDatos(this.id)" title="Modificar Datos">Modificar</button>
                                    <button type="button" class="btn waves-effect modal-trigger" data-target="modal-cambiarimg" id="btnmodificarimg-${lst[i]['idpelicula']}" onclick="cargarDatosImg(this.id)" title="Cambiar Imagen"><i class="material-icons">image</i><i class="material-icons">edit</i> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    `);
                    //Añadimos lista de actores en la tab - div correspondiente en cada card.
                    var $divacts = $(`#pers-${lst[i]["idpelicula"]}`); 
                    var lstacts = lst[i]["actores"].split("?");
                    for (var j = 0; j < lstacts.length; j++) {  
                        $divacts.append(`<p>${lstacts[j]}</p>`);
                    }      
                } 
            }
            $('.tabs').tabs();
        }
    });
});

    

function cargarDatos(idbtn){ //Para modificar DATOS de peli
    var idpeli = idbtn.split("-")[1];
    console.log(idpeli);
    $.ajax({   
        type: 'POST',
        url: '../controller/CAdmin.php',
        data: {"op":"obtenerPeli", idpeli},
        success: function(resultado) {    
            if($.trim(resultado)=="vacio"){ }
            else{
                limpiarForm("form-datospeli");
                var datos=JSON.parse(resultado);                   
                $('#op').val("modificarPeli");    
                $('#txtidpeli').val(idpeli);    
                $('#txtfrase').focus().val(datos["frase"]);    
                $('#txtdescripcion').focus().val(datos["descripcion"]);    
                $('#cbcategoriamod').val(datos["idcategoria"]);
                $('#txtnombre').focus().val(datos["nombre"]);                
                var lstacts=datos["actores"].split("?");
                for (var j = 0 ; j < lstacts.length; j++) {
                    $('#cbactores option[value='+lstacts[j]+']').prop("selected",true);
               }
            }
            $('select').formSelect();    
        }
    });
}

$('#chkacepto').change(function(){ //Para modificar DATOS de peli
    var $btn=$('#btnactualizar');
    if( $(this).is(':checked') ) {
        $btn.prop('disabled',false);
    } else {
        $btn.prop('disabled',true);
    }
});


$('#btnactualizar').on('click',function(){ //Modificar datos de la pelicula
    var aux=true;     
    if ($('#txtnombre').val()=="" || $('#txtfrase').val()=="" || $('#txtdescripcion').val()=="" ) { M.toast({html: '¡Complete los campos obligatorios (*)!', classes:'red'}); aux=false;}
    else{
        if (($('#cbactores').val()).length==0) { M.toast({html: '¡Seleccione por lo menos un actor!', classes:'red'}); aux=false;}            
        if (($('#cbcategoria').val()).length==0) { M.toast({html: '¡Seleccione una categoría!', classes:'red'}); aux=false;}            
    }               
    if(aux){
        var formData = new FormData($("#form-datospeli")[0]);
        console.log(formData);
        $.ajax({        
            type: 'POST',   
            url: '../controller/CAdmin.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resultado) {  
                console.log(resultado);
                if ($.trim(resultado) == "true") {
                    M.toast({
                        html: '¡Éxito!. Datos Modificados', 
                        classes:'green', 
                        displayLength:2000
                    });
                    limpiarForm("form-datospeli");
                    $('#chkacepto').click(); //Deschequeo
                    $('#cbcategoria').change(); //Recargar cards
                }else{
                    M.toast({html: ':( No se pudo modificar:<br> '+resultado, classes:'red'});
                }            
            }
        });
    }
});

function cargarDatosImg(idbtn){ //Para modificar IMG de peli
    limpiarForm("form-imgpeli");
    var idpeli = idbtn.split("-")[1];
    $('#op2').val("modificarImgPeli");    
    $('#txtidpeli2').val(idpeli);   
    console.log("Aqui ps al cargar img modal: :P "+idpeli);    
}

$('#chkacepto2').change(function(){ //Para modificar IMG de peli
    var $btn=$('#btnactualizarImg');
    if( $(this).is(':checked') ) {
        $btn.prop('disabled',false);
    } else {
        $btn.prop('disabled',true);
    }
});

$('#btnactualizarImg').on('click',function(){ //Cambiar Imagen de la pelicula
    var aux=true;     
    if ($('#fileimg').prop('files')[0]==null) { M.toast({html: '¡Por favor, suba una imagen!', classes:'red'}); aux=false;} 
    if(aux){
        $(this).prop('disabled', true);
        $('#preloader-modimg').show();
        var formData = new FormData($("#form-imgpeli")[0]);
        $.ajax({        
            type: 'POST',   
            url: '../controller/CAdmin.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(resultado) {  
                $('#preloader-modimg').hide();
                if ($.trim(resultado) == "true") {
                    M.toast({
                        html: '¡Éxito!. Imagen cambiada', 
                        classes:'green', 
                        displayLength:2000
                    });
                    $('#chkacepto2').click(); //Deschequeo
                    $('#cbcategoria').change(); //Recargar cards
                }else{
                    console.log(resultado);
                    M.toast({html: ':( No se pudo modificar:<br> '+resultado, classes:'red'});
                    $('#chkacepto2').click(); //Deschequeo
                }            
            }
        });
    }
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

function preloader($div){
    $div.html(`<br>
    <div class=center> 
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-red-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
        </div>                
    </div>`);    
}
