$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$('#otherField').hide();
	$('.error').hide();
	
	$('.colorclicker').click(function(){
		$('#colortext').val($(this).text());
		$('#otherField').hide();
	});
	
	$('#newcolortext').change(function(){
		$('#colortext').val($(this).val());
	});

	$('#otherClicker').click(function(){
		$('#otherField').show();
	});

	$('.pathClicker').click(function(){
		if($('#colortext').val().length>2){
			$('#description').val($('#colortext').val() +" "+$("#diagnosisname").text());
			$('#solution').val("Incorporate more " + $('#colortext').val());
		}
	});

	$("#lastCauseClicker").click(function(){
			destination ="../../../../problemsclearcolor/"+id;
	$('#barrierform').attr('action', destination);
	});
	$("#newCauseClicker").click(function(){
		destination ="../../../../problemscolor/"+id;
		$('#barrierform').attr('action', destination);
	});	

});