$(document).ready(function()
{

	// gets list of example of activity
	var exampleList ="";
	$('.suggestion').each(function(){
		exampleList+="<li>"+$(this).text()+'</li>';
	})

	//Gets appointment for sending to right destiniation
	var id =$('#appointmentnumber').text();   
	
	//Alters how the name appears, it should not be the same as how it appears in navigation
	$("#diagnosisname, #barriername").prepend("Start including ");

	// Change display to only have one item
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest ' + $("#diagnosisname").text());

    // Prepares description statement
    $('#description').val($("#diagnosisname").text()
		+', some examples are:<ul> '+exampleList+'</ul>');

    //Creates a soltuion statement to appear at the top or report
	 $('#solution').val($('#description').val()); 

	 //Click on this id will store as a solution action
     $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
    });

});
