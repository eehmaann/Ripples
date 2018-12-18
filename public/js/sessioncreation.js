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
	$('#unfinsihedAppoints').hide();
	

	
	$('.userClicker').click(function(){
		$("#existingCaseRetriever").hide();
		$('#newCaseBuilder').hide();
		
		if($(this).text()=='No'){
			$('#existingcustomer').show();
			$('#newcustomer').hide();
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
				if(data!=0){
					$('#optionCaseChoice').show();
					$.each(data, function(index, value) {
						$goals.append('<option value="' + index +'">' + value + '</option>');
					});
				}
				else{
					$('#optionCaseChoice').hide();
					$("#existingCaseRetriever").hide();
					$('#newCaseBuilder').show();
					$('#reasonBuilder').show()
					destination ="../appointment/storegoalsession";
				}
			});

			$("#user_id").val($(this).val());
			hideUserError();
		});


      //Get reason
      $("#caseSelector").change(function(){
      	$.getJSON("../textbox/Goals/"+$('#caseSelector').val(), function(data){
      		$.each(data, function(index, value){
      			$('#reasonStater').text(value); 
      			$('#goaltext').val(value); 
      		});
      	});
      	// Get unfinished appointments
      	$("#caseSelector").change(function(){
	      	$.getJSON("../listappointment/Goals/"+$('#caseSelector').val(), function(data){
	      		if(data!=0){
	      			$('#unfinsihedAppoints').show();
	      			$('#appointmentList').empty();
		      		$.each(data, function(index, value){
		      			$("#appointmentList").prepend(
	    					"<li> <a href='../navigation/"+index+"'> Session started on "
	    					+value+"</a></li>");
		      		});
	      		}
	      		else
	      			$('#unfinsihedAppoints').hide();
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
	});


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
		else
			$('#starterror').show();
	});
});
