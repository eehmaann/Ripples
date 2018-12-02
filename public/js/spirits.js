$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();

	$("#newCauseClicker").click(function(){
		var connection =$('#disconnectionPercentage').val();
		if(connection< 0 || connection >100){
			$('#percenterror').show();
		}
		else{
			$("#description").val($("#diagnosisname").text());
			var destination ="../../../../problemsdisconnection/"+id;
			$('#barrierform').attr('action', destination);
		}
	});

	
});