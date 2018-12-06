$(document).ready(function()
{

$(".error").hide();
	$('#diagnoses > div > div >ul > a').each(function(){
		$(this).removeAttr("href");
	});
	$(".clickDiagnose > a").removeAttr("href");
	$( ".clickLocate:nth-child(6)")[0].remove()
	$('#Energy')[0].remove();
	$('#Pathogen')[0].remove();
	$('#Toxins')[0].remove();
	 $('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();
	var id =$('#appointmentnumber').text(); 

	var bodyChoice="first part";

	$('#firstPart').click(function(){
		bodyChoice="first part";
		$('#fieldStater').text('first');
	});

	$('#secondPart').click(function(){
		bodyChoice="second part";
		$('#fieldStater').text('second');
	});



	$(".clickDiagnose").click(function(){
		if(bodyChoice=="first part"){
			$('#aDisconnection').val($(this).attr('id'));
		}
		else{
			$('#bDisconnection').val($(this).attr('id'));
		}
	});

	$('#disconnectionPercentage').change(function(){
		testConnection();		
	});

	$('#aDisconnection').change(function(){
		testParts($("#aDisconnection"),$("#aerror"));
	});

		$('#bDisconnection').change(function(){
		testParts($("#bDisconnection"),$("#berror"));
	});

	$(".pathClicker").click(function(){
		var isValid = testConnection();
		alert("number test");
		if(isValid){
			isValid=testParts($("#aDisconnection"),$("#aerror"));
		}
		if(isValid){
			isValid= testParts($("#bDisconnection"),$("#berror"));
		}
		// If all fields are correct construct a description statement
		if(isValid){
			constructDescription();
			var destination ="../../../../problemsdisconnection/"+id;
			$('#barrierform').attr('action', destination);
		}
	});


	function testConnection(){
		var connection =$('#disconnectionPercentage').val();
		if(connection> 0 && connection <100){
			$('#percenterror').hide() 
			return true;
			}
		else{
			$('#percenterror').show()
			return false;
		}
	}


	function testParts(answerField,error){
		if(answerField.val().length>2){
			$(error).hide();
			return true;
		}
		//else
			$(error).show();
			return false;
	}

	function constructDescription(){
		$("#description").val($("#diagnosisname").text()+": " +$("#aDisconnection").val()+
			"disconnect from " +$('#bDisconnection').val());	
	}



});