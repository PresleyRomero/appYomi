$(document).ready(function(){
	$('select').formSelect();
	$('.dropdown-trigger').dropdown();
	$('.tap-target').tapTarget();
	$('#cbcategoria').change();
});


$('#cbcategoria').on('change',function(){
	var idcategoria=$(this).val();
	var url = "cards-reload.php?idcat="+idcategoria;
	$('#div-cards-pelis').load(url);
});
