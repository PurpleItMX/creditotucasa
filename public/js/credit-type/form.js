$(document).ready(function(){

	$("#saveFormCreditType").click(function(){
		$("#saveCreditType").validate();
		if($("#saveCreditType").valid()){
			$("#saveCreditType").submit();
		}
	});

	$("#newCreditType").click(function(){
		$("#id_credit_type").val("");
		$("#clave").val("");
		$("#clave").attr('data-id' , '');
		$("#description").val("");
		$("#estatus").prop('checked',false);
    	$("#myModalCreditType").modal();
	});

	$(".searchCreditType").click(function(){
		$("#id_credit_type").val("");
		$("#clave").val("");
		$("#clave").attr('data-id' , '');
		$("#description").val("");
		$("#estatus").prop('checked',false);
		var id = $(this).attr('data-id');
		$.ajax({
  			url: baseUrl+'/credit_type/'+id,
		})
		/*.done(function() {console.log( "second success" );})*/
    	.fail(function(error) {
    		console.log( error );
    		messages("error",error.message);
  		}).always(function(data) {
  			$("#id_credit_type").val(data.id_warehouse);
  			$("#clave").val(data.clave);
  			$("#clave").attr('data-id' , data.id_warehouse);
  			$("#description").val(data.description);
  			if(data.estatus == 1)
    			$("#estatus").prop('checked',true);
  		});
		$("#myModalCreditType").modal();
	});

});
