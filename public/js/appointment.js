$(document).ready(function(){
	//Get list of goals previously made by particular client
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
	      		$.each(data, function(index, value){
	      			$("#appoinmentList").append(
    					"<li> <a href='../navigation/"+index+"'> Session started on "
    					+value+"</a></li>");
	      		});
      		}
      		else
      			$('#unfinsihedAppoints').hide();
      	});
      });
});