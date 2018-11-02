$(document).ready(function(){
	var destination;
	var isPrepared = false;
	$('.userClicker').click(function(){
		if($(this).text()='Yes'){
			$('#existingcustomer').show();
			$('#"newcustomer"').hide();
			$('#"optionCaseChoice"').show();
			//Change form post to building case and session
			//Destination = method for case and session
		}
		else{
			$('#"newcustomer"').show();
			$('#existingcustomer').hide();
			$('#"newCaseBuilder"').show();
			$('#reasonBuilder').show();
			//Change form to building new user, case, and session
			//Destination = method for all
		}
	});

	$('.caseClicker').click(function(){
		if($(this).text()='Yes'){
			$("existingCaseRetriever").show();
			$('#"newCaseBuilder"').hide();
			//Change case to building session
			//Destination to case and session
		}
		else{
			$("existingCaseRetriever").hide();
			$('#"newCaseBuilder"').show();
			// Only builds new session
			//Destination to only session
		}
	})

	

	$('#userSelector').change(function(){
		hideUserError();
	})

	$('#nametext').change(function(){
		hideNameError();	
	});

	$('#emailtext').change(function(){
		hideEmailError();
	});

	$('#caseSelector').change(function(){
		hideCaseError();
	})

	$('#reasontext').change(function(){
		hideReasonError();
	})

	$('#goaltext').change(function(){
		hideGoalError();
	});


	//function checkUser(){
	//	var userLength = $('#userSelector option:selected').text().length;
	//	return userLength>2;
	//}
	function hideUserError(){
		//if(checkUser())
		if(checkText($('#userSelector option:selected').text().length))
			$('#usererror').hide();
		else
			$('#usererror').show();
	}

	//function checkExistingCase(){
	//	var caseLength =$('#caseSelector option:selected').text().length;
	//	return (caseLength>2);
	//}
	function hideCaseError(){
		//if (checkExistingCase())
		if(checkText($('#caseSelector option:selected').text().length))
			$('#caseerror').hide();
		else
			$('#caseerror').show();
	}

	//function checkReason(){
	//	var reasonLength =$('#reasontext').val().length;
	//	return(reasonLength>2);
	//}

	function hideReasonError(){
		if (checkReason())
			$('#reasonerror').hide();
		else
			$('#reasonerror').show();
	}


	//function checkGoal(){
	//	var goalLength =$('#goaltext').val().length;
	//	return(goalLength>2);
	//}

	function hideGoalError(){
		if(checkText($('#goaltext').val().length))
			//(checkGoal())
			$('#goalerror').hide();
		else
			$('#goalerror').show();
	}

	//function checkName(){
	//	var nameLength= $('#nametext').val().length;
	//	return(nameLength>2);
	//}

	function hideNameError(){
		if(checkText($('#nametext').val().length)){
			//(checkName())
			$('#nameerror').hide();
		}
		else{
			$('#nameerror').show();
		}
	}

	function checkText(textLength){
		return textLength>2;
	}

	function checkEmail(emailAddress){
    	var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+
    	(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*
    	|"((([ \t]*\r\n)?[ \t]+)?
    	([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|
    	\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")
    	@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|
    	[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*
    	[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|
    	[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*
    	[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    	return pattern.test(emailAddress);
	}

	function hideEmailError(){
		if (checkEmail($('#emailtext').val())){
			$('#emailerror').hide();
		}
		else{
			$('#emailerror').show()
		}
	}

});