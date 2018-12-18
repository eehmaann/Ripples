$(document).ready(function()
{

	// Changes page so the only option is to record the cause
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").hide();
	$("#newCauseClicker").text('Record '+$("#diagnosisname").text());	
    $('#description').val($("#diagnosisname").text());
});