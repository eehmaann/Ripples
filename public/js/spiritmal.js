$(document).ready(function()
{
	
	var exampleList ="";
	$('.suggestion').each(function(){
		exampleList+="<li>"+$(this).text()+'</li>';
	})

	var id =$('#appointmentnumber').text();   
	$("#barriername").text("Spirit Malnutrition");

	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest ' + $("#diagnosisname").text());

    $('#description').val($("#barriername").text());

	 $('#solution').val("Starting including" + $("#diagnosisname").text() +"such as"
		+'<ul> '+exampleList+'</ul>');

     $("#newCauseClicker").click(function(){          
            destination ="../../../../problemssolution/"+id;
            $('#barrierform').attr('action', destination);
    });

});