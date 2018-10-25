$(document).ready(function()
{
	
	$('#description').val($("#diagnosisname").text();  
    $('#solution').val("Cleared");  

    $("#age").bind('keyup mouseup', function () {
    	$('#description').val($("#description").val() + "age ["+$("#age").val()+"]");         
	});
    
});