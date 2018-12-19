$(document).ready(function(){
	//The majority of problems will use one of these two buttons, if there are special needs it will be
	//including in their js page.
	var id =$('#appointmentnumber').text();
	var destination= 
	// Problem has been cleared when this button is clicked
	$('#lastCauseClicker').click(function(){
		destination ="../../../../problemsbclear/"+id;
		$('#barrierform').attr('action', destination);
	});
	// Pattern has underlying cause
	$('#newCauseClicker').click(function(){
		destination ="../../../../problemsb/"+id;
		$('#barrierform').attr('action', destination);
	})
});
