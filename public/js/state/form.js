$(document).ready(function(){

	$("#saveFormState").click(function(){
		$("#saveState").validate();
		if($("#saveState").valid()){
			$("#saveState").submit();
		}else{
			messages('error','Favor de llenar los campos requeridos');
		}
	});

	$("#newState").click(function(){
		$("#name").val("");
		$("#name").attr('data-id', '');
    	$("#myModalState").modal();
	});

	$(".searchState").click(function(){
		$("#id_state").val("");
		$("#name").val("");
		$("#name").attr('data-id', '');
		var id = $(this).attr('data-id');
		$.ajax({
  			url: baseUrl+'/state/'+id,
		})
		/*.done(function() {console.log( "second success" );})*/
    	.fail(function(error) {
    		console.log( error );
    		messages("error",error.message);
  		}).always(function(data) {
  			$("#id_state").val(data.id_state);
  			$("#name").val(data.name);
				$("#name").attr('data-id', data.id_state);
  		});
		$("#myModalState").modal();
	});

});
