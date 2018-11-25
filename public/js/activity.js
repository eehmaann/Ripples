$(document).ready(function()
{

	var id =$('#appointmentnumber').text();   
	$("#diagnosisname, #barriername").prepend("Start including ");

	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest ' + $("#diagnosisname").text()); 

     $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
    });

});