$(document).ready(function()
{

$(".error").hide();
	$('#diagnoses > div > div >ul > a').each(function(){
		$(this).removeAttr("href");
	});
	//Alters navigation tool to only show body parts and remove the links so they can be 
	//clicked to populate boxed
	
	$(".clickDiagnose > a").removeAttr("href");
	$( ".clickLocate:nth-child(6)")[0].remove()
	$('#Energy')[0].remove();
	$('#Pathogen')[0].remove();
	$('#Toxins')[0].remove();
	 $('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();
	var id =$('#appointmentnumber').text(); 

	// Determines which body part box will be changed
	var bodyChoice="first part";

	$('#firstPart').click(function(){
		bodyChoice="first part";
		$('#fieldStater').text('first');
	});

	$('#secondPart').click(function(){
		bodyChoice="second part";
		$('#fieldStater').text('second');
	});


	// Use navigation to select body part
	$(".clickDiagnose").click(function(){
		if(bodyChoice=="first part"){
			$('#aDisconnection').val($(this).attr('id'));
		}
		else{
			$('#bDisconnection').val($(this).attr('id'));
		}
	});

	// Test whether connection is a valid amount
	$('#disconnectionPercentage').change(function(){
		testConnection();		
	});

	// Test whether there is text in first body part
	$('#aDisconnection').change(function(){
		testParts($("#aDisconnection"),$("#aerror"));
	});

	// Test whether there is text in second body part	
	$('#bDisconnection').change(function(){
		testParts($("#bDisconnection"),$("#berror"));
	});

	// Checks validity of entries before submitting 
	$(".pathClicker").click(function(){
		var isValid = testConnection();
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

	// Tests whether connection is a valid percent
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

	//Tests whether there is text in given body part box
	function testParts(answerField,error){
		if(answerField.val().length>2){
			$(error).hide();
			return true;
		}
		//else
			$(error).show();
			return false;
	}

	// Construct statement to submit underlying cause
	function constructDescription(){
		$("#description").val($("#diagnosisname").text()+": " +$("#aDisconnection").val()+
			"disconnect from " +$('#bDisconnection').val());	
	}



});