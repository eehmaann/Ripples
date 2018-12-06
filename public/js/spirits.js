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
	var id =$('#appointmentnumber').text(); 
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").remove();

	$("#newCauseClicker").click(function(){
		if(testTears() && testParts()){
			$("#description").val($("#diagnosisname").text());
			var destination ="../../../../problemsspirit/"+id;
			$('#barrierform').attr('action', destination);
		}
	});

	$('#tearInput').change(function(){
		testTears();
	});

	$('#bodyInput').change(function(){
		testParts();
	});

	$(".clickDiagnose").click(function(){
		$('#bodyInput').val($(this).attr('id'));
	});

	function testTears(){
		var connection =$('#tearInput').val();
		if(connection> 0 && connection <100){
			$('#tearerror').hide()
			return true;
			}
		else{
			$('#tearerror').show()
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
	
});