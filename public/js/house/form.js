$(document).ready(function(){
//Dropzone
/*Dropzone.autoDiscover = false;
$("#imgDrop").dropzone({
	url: baseUrl + "/img"
});*/


	$("#saveFormHouse").click(function(){
		$("#saveHouse").validate();
		if($("#saveHouse").valid()){
			$("#saveHouse").submit();
		}
	});

	$(".price").mask('000.000.000,000,000.00', {reverse: true});
    //$('.price').mask("#,##0.00", {reverse: true});

	$("#newHouse").click(function(){
		$("#id_house").val("");
		$("#clave").val("");
		$("#clave").attr('data-id' , '');
		$("#description").val("");
		$("#colony").val("");
  		$("#municipality").val("");
  		$("#specification").val("");
  		$("#price").val("");
			$("#n_room").val("");
			$("#n_bathroom").val("");
		$("#estatus").prop('checked',false);
    	$("#myModalHouse").modal();
	});

	$(".searchImg").click(function () {
			$("#myModalImage").modal('show');
	});

	$(".searchHouse").click(function(){
		$("#id_house").val("");
		$("#clave").val("");
		$("#clave").attr('data-id' , '');
		$("#description").val("");
		$("#colony").val("");
		$("#n_room").val("");
		$("#n_bathroom").val("");
  		$("#municipality").val("");
  		$("#specification").val("");
  		$("#price").val("");
		$("#estatus").prop('checked',false);
		$("#credit_house").prop('checked',false);
		var id = $(this).attr('data-id');
		$.ajax({
  			url: baseUrl+'/house/'+id,
		})
		/*.done(function() {console.log( "second success" );})*/
    	.fail(function(error) {
    		console.log( error );
    		messages("error",error.message);
  		}).always(function(data) {
  			$("#id_house").val(data.id_house);
  			$("#clave").val(data.clave);
  			$("#clave").attr('data-id' , data.id_house);
  			$("#colony").val(data.colony);
  			$("#municipality").val(data.municipality);
  			$("#specification").val(data.specification);
  			$("#price").val(data.price);
  			$("#description").val(data.description);
				$("#n_room").val(data.n_room);
				$("#n_bathroom").val(data.n_bathroom);

  			if(data.estatus == 1)
    			 $("#estatus").prop('checked',true);

				if (data.credit_house == 1)
						$("#credit_house").prop('checked',true);
  		});
		$("#myModalHouse").modal();
	});

});
