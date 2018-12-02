$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$('#otherField').hide();
	
	$('.colorsplatch').click(function(){
		$('#colortext').val($(this).text());
		$('#otherField').hide();
	});
	
	$('#newcolortext').change(function(){
		$('colortext').val($(this).text());
	});

	$('#otherClicker').click(function(){
		$('#otherField').show();
	})

	$('.pathClicker'.click(function(){
		if($('#colortext').val().length<2){
			$('#description').val($("#diagnosisname").text()) ;
			$('#solution').val("Incorporate more " $('#colortext').val());
		}
	});

	$("#lastCauseClicker").click(function(){
			destination ="../../../../problemscolorclear/"+id;
	$('#barrierform').attr('action', destination);
	});
	$("#newCauseClicker").click(function(){
		destination ="../../../../problemsclear/"+id;
		$('#barrierform').attr('action', destination);
	});	

});