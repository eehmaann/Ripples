$(document).ready(function()
{


	var id =$('#appointmentnumber').text(); 
	$("#lastCauseClicker").remove();
	$(".error").hide();


	$('#disconnectionPercentage').change(function(){
		testConnection();
	});


	function testConnection(){
		var connection =$('#disconnectionPercentage').val();
		if(connection> 0 && connection <100){
			$('#percenterror').hide() 
			return true;
			}
		else{
			$('#percenterror').show()
			return false;
		}
	}

	$("#newCauseClicker").click(function(){
		if(testConnection()){
			constructDescription();
			var destination ="../../../../problemsdisconnection/"+id;
			$('#barrierform').attr('action', destination);
		}
	});


	function constructDescription(){
		$("#description").val($("#diagnosisname").text()+"Started at: " +$('#disconnectionPercentage').val() +
			"% connected");	
	}

});