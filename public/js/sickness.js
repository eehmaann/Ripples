$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();
	$('.error').hide();


	$("#newCauseClicker").click(function(){
		var isPrepared;
		isPrepared=checkPercent();
		if(isPrepared){
			isPrepared=checkDirection();
		}
		if(isPrepared){
			isPrepared=checkMother();
		}
		if(isPrepared){
			isPrepared=checkForm();
		}
		if(isPrepared){
			isPrepared=checkBaby();
		}
		if(isPrepared){
			$("#description").val($("#diagnosisname").text() + " caused by "
				+ $('#disconnectionDirection').val() +" " + $('#motherDisconnection').val()
				+ " not connected to " + $('#unbornDisconnection').val() +" of " 
				+ $('#unbornformDisconnection').val());
			var destination ="../../../../problemsdisconnection/"+id;
			$('#barrierform').attr('action', destination);
		}
	});




	function checkPercent(){
		var connection =$('#disconnectionPercentage').val();
		if(connection< 0 || connection >100){
			$('#percenterror').show();
			return false;
		}
		else{
			$('#percenterror').hide();
			return true;
		}
	}

	function checkDirection(){
		if($('#disconnectionDirection').val().length<4){
			$('#disconnectionerror').show();
			return false;
		}
		else{
			$('#disconnectionerror').hide();
			return true;
		}
	}

	function checkMother(){
		if($('#motherDisconnection').val().length<4){
			$('#mothererror').show();
			return false;
		}
		else{
			$('#mothererror').hide();
			return true;
		}
	}

	function checkForm(){
		if($('#unbornformDisconnection').val().length<4){
			$('#unbornformerror').show();
			return false;
		}
		else{
			$('#unbornformerror').hide();
			return true;
		}
	}

	function checkBaby(){
		if($('#unbornDisconnection').val().length<4){
			$('#unbornerror').show();
			return false;
		}
		else{
			$('#unbornerror').hide();
			return true;
		}
	}

	$('.directionClicker').click(function(){
		$('#disconnectionDirection').val($(this).text());
	});

	$('.motherClicker').click(function(){
		$('#motherDisconnection').val($(this).text());
	});

	$('.unbornFormClicker').click(function(){
		$('#unbornformDisconnection').val($(this).text());
	});

	$('.unbornPartClicker').click(function(){
		$('#unbornDisconnection').val($(this).text());
	});

});


