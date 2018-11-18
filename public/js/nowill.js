$(document).ready(function()
{

	$('#progressionQuestion').hide();
	$("#lastCauseClicker").text(" Clear " + $("#diagnosisname").text());
	$("#newCauseClicker").hide();	
    $('#description').val($("#diagnosisname").text());
});