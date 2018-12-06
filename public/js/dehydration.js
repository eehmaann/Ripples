$(document).ready(function()
{
	$('.error').hide();
	var id =$('#appointmentnumber').text(); 
	$("#lastCauseClicker").show();
    $("#newCauseClicker").hide();

	$("#rightqualitydiv, #righttypediv").hide();
	$('input[name=enoughwater]').change(function(){
			var answer = $('input[name=enoughwater]:checked').val();
			if (answer =='Yes'){
				$('#rightqualitydiv').show();
			
			}
			else{
				$('#rightqualitydiv').hide();
				$("#lastCauseClicker").show();
    			$("#newCauseClicker").hide();
				$('#suggestion').val("Drink eight glasses of water a day");
				
			}	
	});

	$('input[name=rightquality]').change(function(){
			var answer = $('input[name=rightquality]:checked').val();
			if (answer =='Yes'){
				$('#righttypediv').show();
				$("#lastCauseClicker").hide();
    			$("#newCauseClicker").show();
    			$('#suggestion').val("");

			}
			else{
				$('#righttypediv').hide();
				$("#lastCauseClicker").show();
    			$("#newCauseClicker").hide();
				$('#suggestion').val("Drink water that tastes good to your body");
			}	

	});
	    
	  $('#suggestion').change(function(){
	  	testSuggestion();
	  });

      $(".pathClicker").click(function(){
      	$('#description').val($("#diagnosisname").text());
      });

	
	$("#lastCauseClicker").click(function(){
		if(testSuggestion()){
			$('#solution').val($('#suggestion').val());
			
		}
		else{
			$('#description').val('');
			$('#solutionError').show();
		}
			destination ="../../../../problemssolution/"+id;
		$('#barrierform').attr('action', destination);
	});
	
	function testSuggestion(){
		if($('#suggestion').val().length>0){
			$('#solutionError').hide();
			return true;
		}
		else{
			$('#solutionError').show();
			return false;
		}
	}
});