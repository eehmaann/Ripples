$(document).ready(function()
{		
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
	}