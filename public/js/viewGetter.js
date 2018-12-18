$(document).ready(function(){


	$('#reportSearch').hide();
	$('#sessionBeginner').hide();

	$('#startPanelRetriever').click(function(){
		$('#sessionBeginner').show();
		$('#reportSearch').hide();
	});

	$('#viewPanelRetriever').click(function(){
		$('#reportSearch').show();
		$('#sessionBeginner').hide();
	});

    $("#clientSelector").change(function() { 
      	var $goals = $("#viewCaseSelector");
      	$goals.empty();
      	$goals.append('<option value=""></option>');
		$.getJSON("../listpublishedgoals/Goals/" + $("#clientSelector").val(), function(data){
			if(data!=0){
				$.each(data, function(index, value) {
					$goals.append('<option value="' + index +'">' + value + '</option>');
				});
			}
		});
	});




    $("#viewCaseSelector").change(function(){
    	var $appointments= $("#appointmentViewSelector");
    	$appointments.empty();
    	$appointments.append('<option value=""></option')
	    $.getJSON("../listpublishedappointment/Goals/"+$('#viewCaseSelector').val(), function(data){
	      	if(data!=0){
		      	$.each(data, function(index, value){
		      		$appointments.append('<option value="' + index +'">' + value + '</option>');
		      	});
		    }
	    });
	});

	$("#appointmentViewSelector").change(function(){
		$("#reportViewer").attr("href", "report/"+$("#appointmentViewSelector").val());
	});

});