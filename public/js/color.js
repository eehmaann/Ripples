$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$('#otherField').hide();
	$('.error').hide();
	
	//click on a color will show color in box and hide other option
	$('.colorclicker').click(function(){
		$('#colortext').val($(this).text());
		$('#otherField').hide();
	});
	
	//Write new color will give the color box a new color
	$('#newcolortext').change(function(){
		$('#colortext').val($(this).val());
	});

	//Click other will make other text box appear
	$('#otherClicker').click(function(){
		$('#otherField').show();
	});

	//click on other record button will make the color name the same, and add to description and solution
	$('.pathClicker').click(function(){
		if($('#colortext').val().length>2){
			$('#colortext').val($('#colortext').val().toLowerCase());
			$('#description').val($('#colortext').val()+" "+$("#diagnosisname").text());
			$('#solution').val("Incorporate more " + $('#colortext').val());
		}
	});


	// click to record color and mark problem as cleared
	$("#lastCauseClicker").click(function(){
			destination ="../../../../problemsclearcolor/"+id;
	$('#barrierform').attr('action', destination);
	});

	// click to add to color database and mark problem as resolved
	$("#newCauseClicker").click(function(){
		destination ="../../../../problemscolor/"+id;
		$('#barrierform').attr('action', destination);
	});	

});