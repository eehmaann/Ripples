$(document).ready(function(){
	// hide all warnings
	$('.warning').hide();

	//click to publish report and let client see report
	$('#publish').click(function(){
		$('#publishForm').submit();
	});

	//Show hide publish warnning
	$('#publish').hover(
		function(){
		$('#publishWarning').show();
		},
		function(){
			$('#publishWarning').hide();
		}
	);

	//destroys appointment being worked on
	$('#destroy').click(function(){
		$('#destroyForm').submit();
	});

	//Show hide warning when practitioner is about to click on button
	$('#destroy').hover(function()
		{
		$('#destroyWarning').show();
		},
		function(){
		$('#destroyWarning').hide();
	});

	// destroys the most current problem
	$('#delete').click(function(){
		$('#deleteForm').submit();
	});

	$('#delete').hover(function()
		{
		$('#deleteWarning').show();
		},
		function(){
		$('#deleteWarning').hide();
	});

});