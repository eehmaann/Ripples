$(document).ready(function()
{

	var exampleList ="";
	$('.suggestion').each(function(){
		exampleList+="<li>"+$(this).text()+'</li>';
	})

	var id =$('#appointmentnumber').text();   
	$("#diagnosisname, #barriername").prepend("Start including ");

	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest ' + $("#diagnosisname").text());

    $('#description').val($("#diagnosisname").text()
		+'<ul> '+exampleList+'</ul>');

	 $('#solution').val($('#description').val()); 

     $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
    });

});