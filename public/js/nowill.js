$(document).ready(function()
{
	$('.error').hide();
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").text(" Clear " + $("#diagnosisname").text());
	$("#newCauseClicker").hide();	
    $('#description').val($("#diagnosisname").text());
});