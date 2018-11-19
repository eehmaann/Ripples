$(document).ready(function()
{

	var id =$('#appointmentnumber').text();
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").text(" Recommend T3 ");
	$("#newCauseClicker").hide();	
 
    $('#description').val("There is a need for T3");
    $('#solution').val("Find a T3 practitioner");

    $("#lastCauseClicker").click(function(){
        destination ="../../../../problemsjs/"+id;
        $('#barrierform').attr('action', destination);
    });

});