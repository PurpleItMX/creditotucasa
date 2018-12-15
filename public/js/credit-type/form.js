$(document).ready(function(){

	$("#saveFormCreditType").click(function(){
		$("#saveCreditType").validate();
		if($("#saveCreditType").valid()){
			$("#saveCreditType").submit();
		}
	});

	$("#newCreditType").click(function(){
		$("#id_credit_type").val("");
		$("#name").val("");
		$("#name").attr('data-id','');
		$("#imgCreditType").attr('src','');
		$("#secc_img").addClass('d-none');
		$("#url_hidden").val('');
		$("#url_img").removeClass('d-none');
		$("#estatus").prop('checked',false);
			$("#url_img").removeClass('hide');
    	$("#myModalCreditType").modal();
	});

	$(".searchCreditType").click(function(){
		$("#id_credit_type").val("");
		$("#name").val("");
		$("#name").attr('data-id' , '');
		$("#url_img").addClass('hide');
		$("#secc_img").removeClass('d-none');
		$("#imgCreditType").removeClass('hide');
		$("#url_hidden").val('');
		$("#estatus").prop('checked',false);
		var id = $(this).attr('data-id');
		$.ajax({
  			url: baseUrl+'/credit-type/'+id,
		})
		/*.done(function() {console.log( "second success" );})*/
    	.fail(function(error) {
    		console.log( error );
    		messages("error",error.message);
  		}).always(function(data) {
  			$("#id_credit_type").val(data.id_credit_type);
  			$("#name").val(data.name);
				$("#url_hidden").val(data.url_img);
				$("#imgCreditType").attr('src', data.url_img);
  			$("#name").attr('data-id' , data.id_credit_type);
  			if(data.estatus == 1)
    			$("#estatus").prop('checked',true);
  		});
			$("#deleteButton").removeClass('hide');
		$("#myModalCreditType").modal();
	});

	$("#deleteButton").click(function(){
		deleteImg();
	});

});

function deleteImg() {
	$("#url_img").removeClass('hide');
	$("#url_hidden").val('');
	$("#imgCreditType").addClass('hide');
	$("#deleteButton").addClass('hide');
}
