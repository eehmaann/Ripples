$(document).ready(function(){
	var id =$('#appointmentnumber').text();
	var destination= 
	$('#lastCauseClicker').click(function(){
		destination ="../../../../problemsbclear/"+id;
		$('#barrierform').attr('action', destination);
	});

	$('#newCauseClicker').click(function(){
		destination ="../../../../problemsb/"+id;
		$('#barrierform').attr('action', destination);
	})
});
