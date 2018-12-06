$(document).ready(function()
{

$(".error").hide();
		$('#diagnoses > div > div >ul > a').each(function(){
		$(this).removeAttr("href");
	});
	$(".clickDiagnose > a").removeAttr("href");
	$( ".clickLocate:nth-child(6)")[0].remove()
	$('#Energy')[0].remove();
	$('#Pathogen')[0].remove();
	$('#Toxins')[0].remove();
	 $('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();	
	var id =$('#appointmentnumber').text(); 

	$(".clickDiagnose").click(function(){
		$('#bodyInput').val($(this).attr('id'));
	});

	$('#disconnectionPercentage').change(function(){
		testConnection();
	});

	$('#bodyInput').change(function(){
		testParts();
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


	function testParts(){
		if($('#bodyInput').val().length>2){
			$('#bodyerror').hide()
			return true;
		}
		else
			$('#bodyerror').show()
			return false;
	}

	$("#newCauseClicker").click(function(){
		if(testConnection() && testParts()){
			constructDescription();
			var destination ="../../../../problemsdisconnection/"+id;
			$('#barrierform').attr('action', destination);
		}
	});


	function constructDescription(){
		$("#description").val($("#diagnosisname").text()+": Spirit disconnect from " +$('#bodyInput').val());	
	}

});