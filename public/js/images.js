$(document).ready(function()
{		

	$('.error').hide();
    $('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Record' + $("#diagnosisname").text()); 


	$(".pathClicker").click(function(){
		if($('#description').val().length>4){
		 	$('#description').val($("#diagnosisname").text()+":" +
		 	$('#imageTextBox').text());
		}
		$('#errormessage').show();
	});

	$("#imageTextBox").change(function()){
		if($("#imageTextBox").text().length>4){
			$('#errormessage').hide();
		}
		else{
			$('#errormessage').show();
		}
	}

    $('#emotionList').hide();
    $('#emotionClicker').click(function(){
        $('#emotionList').toggle();
    });
});
