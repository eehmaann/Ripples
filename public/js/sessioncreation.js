$(document).ready(function(){
	var destination ="../appointment/storeall";
	var isPrepared = true;

	$('.error').hide();
	$('#optionCaseChoice').hide();
	$('#existingcustomer').hide();
	$('#newcustomer').hide();
	$("#existingCaseRetriever").hide();
	$('#newCaseBuilder').hide();
	$('#sessionform').hide();
	$('#reasonBuilder').hide();

	
	$('.userClicker').click(function(){
		$("#existingCaseRetriever").hide();
		$('#newCaseBuilder').hide();
		
		if($(this).text()=='No'){
			$('#existingcustomer').show();
			$('#newcustomer').hide();
			$('#optionCaseChoice').show();
			$('#reasonBuilder').hide();
			destination ="../appointment/storegoalsession";
			//Change form post to building case and session
			//Destination = method for case and session
		}
		else{
			$('#newcustomer').show();
			$('#existingcustomer').hide();
			$('#newCaseBuilder').show();
			$('#reasonBuilder').show();
			$('#optionCaseChoice').hide();
			destination ="../appointment/storeall";
			//Change form to building new user, case, and session
			//Destination = method for all
		}
	});

	$('.caseClicker').click(function(){
		$('#reasonBuilder').show();
		if($(this).text()=='Yes'){
			$("#existingCaseRetriever").hide();
			$('#newCaseBuilder').show();
			destination ="../appointment/storegoalsession";

			//Change case to building session
			//Destination to case and session
		}
		else{
			$("#existingCaseRetriever").show();
			$('#newCaseBuilder').hide();
			destination ="../appointment/storesession";
			// Only builds new session
			//Destination to only session
		}
	})

      $("#userSelector").change(function() {
      		var $goals = $("#caseSelector");
      		$goals.empty();
      		$goals.append('<option value=""></option>');
			$.getJSON("../dropdown/Goals/" + $("#userSelector").val(), function(data){
				$.each(data, function(index, value) {
					$goals.append('<option value="' + index +'">' + value + '</option>');
				});
			});

			$("#user_id").val($(this).val());
			hideUserError();
		});

      $("#caseSelector").change(function(){
      	$.getJSON("../textbox/Goals/"+$('#caseSelector').val(), function(data){
      		$.each(data, function(index, value){
      			$('#reasonStater').text(value); 
      			$('#goaltext').val(value); 
      		});
      	});
      	$('#goal_id').val($(this).val());
		hideCaseError();
      	    	
      });


	$('#nametext').change(function(){
		$('#client_name').val($(this).val());
		hideNameError();	
	});

	$('#emailtext').change(function(){
		$('#client_email').val($(this).val());
		//hideEmailError();
	});

	//$('#caseSelector').change(function(){
		//$('#goaltext').val($.getJSON("../statedGoal/Goals" + $("#caseSelector").val()));
	//	$('#goal_id').val($(this).val());
	//	hideCaseError();
	//});

	$('#reasontext').change(function(){
		$('#case_description').val($(this).val());
		hideReasonError();
	})

	$('#goaltext').change(function(){
		$('#goal_description').val($(this).val());
		hideGoalError();
	});

	function hideUserError(){
		if(checkText($('#userSelector option:selected').text().length))
			$('#usererror').hide();
		else
			$('#usererror').show();
	}
	function hideCaseError(){
		if(checkText($('#caseSelector option:selected').text().length))
			$('#caseerror').hide();
		else
			$('#caseerror').show();
	}

	function hideReasonError(){
		if(checkText($('#reasontext').val().length))
			$('#reasonerror').hide();
		else
			$('#reasonerror').show();
	}

	function hideGoalError(){
		if(checkText($('#goaltext').val().length))
			$('#goalerror').hide();
		else
			$('#goalerror').show();
	}

	function hideNameError(){
		if(checkText($('#nametext').val().length)){
			$('#nameerror').hide();
		}
		else{
			$('#nameerror').show();
		}
	}

	function checkText(textLength){
		return textLength>2;
	}

	function checkID(number){
		return number>0;
	}
	function checkUserID(){
		if(!checkID(parseInt($('#user_id').val()))) {
			isPrepared=false;
			$('#usererror').show();
		}
	}
	function checkSessionReady(){
		checkUserID();
		if(!checkID(parseInt($('#goal_id').val()))){
			isPrepared=false;
			$('#caseerror').show();
		}
	}

	function checkGoal(){
		if(!checkText($('#goal_description').val().length)){
			isPrepared=false;
			$('#goalerror').show();
		}
	}

	function checkReason(){
		if(!checkText($('#case_description').val().length)){
			isPrepared=false;
			$('#reasonerror').show();
		}
	}

	function checkCaseReady(){
		checkUserID();
		checkGoal();
		checkReason();
	}

	function checkName(){
		if(!checkText($('#client_name').val().length)){
			isPrepared=false;
			$('#nameerror').show();
		}
	}

	function checkEmail(){
		if(!checkText($('#client_email').val().length)){
			isPrepared=false;
			$('#emailerror').show();
		}
	}

	function checkUserReady(){
		checkGoal();
		checkReason();
		checkName();
		checkEmail();
	}

	$('#sessionStarter').click(function(){
		isPrepared=true;
		if(destination =="../appointment/storeall"){
			checkUserReady();
		}
		else if(destination =="../appointment/storegoalsession"){
			checkCaseReady();
		}
		else{
			checkSessionReady();
		}

		if(isPrepared){
			$('#creationForm').attr('action', destination).submit();
		}
	})
});




//function checkEmail(emailAddress){
    //	var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    //	return pattern.test(emailAddress);
	//}

	//function hideEmailError(){
	//	if (checkEmail($('#emailtext').val())){
	//		$('#emailerror').hide();
	//	}
	//	else{
	//		$('#emailerror').show()
	//	}
	//}