$(document).ready(function()
{

	$('#progressionQuestion').hide();
	$("#lastCauseClicker").hide();
	$("#newCauseClicker").text('Record '+$("#diagnosisname").text());	
    $('#description').val($("#diagnosisname").text());
});