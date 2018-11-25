$(document).ready(function()
{
	var suggestionList ="";


	$(".suggestion").each(function(){
		suggestionList+='<li>'+$(this).text()+"</li>"; 
	});

	$('#description').val($("#diagnosisname").text()
		+' suggestion to try: <ul class ="barrierdefinition"> '+suggestionList+'</ul>');

	$('#solution').val($('#description').val());

});