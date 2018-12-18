$(document).ready(function(){
	$('.warning').hide();

	$('#publish').click(function(){
		$('#publishForm').submit();
	});

	$('#publish').hover(
		function(){
		$('#publishWarning').show();
		},
		function(){
			$('#publishWarning').hide();
		}
	);


	$('#destroy').click(function(){
		$('#destroyForm').submit();
	});

	$('#destroy').hover(function()
		{
		$('#destroyWarning').show();
		},
		function(){
		$('#destroyWarning').hide();
	});

	$('#delete').click(function(){
		$('#deleteForm').submit();
	});

});