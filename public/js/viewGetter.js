$(document).ready(function(){
    //Add controls to only see section wanted




    $("#clientSelector").change(function() {
      	var $goals = $("#viewCaseSelector");
      	$goals.empty();
      	$goals.append('<option value=""></option>');
		$.getJSON("../dropdown/Goals/" + $("#clientSelector").val(), function(data){
			if(data!=0){
				$.each(data, function(index, value) {
					$goals.append('<option value="' + index +'">' + value + '</option>');
				});
			}
		});

      	// Get unfinished appointments
    $("#viewCaseSelector").change(function(){
	    $.getJSON("../listpublishedappointment/Goals/"+$('#viewCaseSelector').val(), function(data){
	      	if(data!=0){
		      	$.each(data, function(index, value){
		      	$("#appoinmentList").append(
	    			"<li> <a href='../navigation/"+index+"'> Session conducted on "
	    				+value+"</a></li>");
		      	});
	      	}
	    }
	});



	//Edit to make  apply to view
	$('#sessionStarter').click(function(){
		isPrepared=true;
		if(destination =="../appointment/storeall"){
		}

		if(isPrepared){
			$('#creationForm').attr('action', destination).submit();
		}
	})
});
