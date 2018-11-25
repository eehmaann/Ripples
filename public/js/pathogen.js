$(document).ready(function()
{
	var suggestionList ="";


	$(".suggestedSubstance").each(function(){
		suggestionList+='<li>'+$(this).text()+'</li>'; 
	});

	$('#description').val($("#diagnosisname").text()
		+'<ul class ="barrierdefinition"> '+suggestionList+'</ul>');

	 $('#solution').val($('#document').val());

});