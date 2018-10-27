$(document).ready(function()
{
	$("#rightqualitydiv #righttypediv").hide();
	$('input[name=enoughcheck]').change(function(){
			var answer = $('input[name=enoughcheck]:checked').val();
			if (answer =='Yes'){
				$('#rightqualitydiv').show();
				$('#rightamountdiv').hide();
				$('#description').val($("");
			}
			else{
				$('#rightqualitydiv').hide();
				$('#rightamountdiv').show();
				
			}	
	});

	$('#ouncesinput').change(function(){
		$('#description').val($("#diagnosisname").text());
		$('#solution').val("Drink " + $('#ouncesinput').val()+ "of water a day");
	});

	$('input[name=rightquality]').change(function(){
			var answer = $('input[name=rightquality]:checked').val();
			if (answer =='Yes'){
				$('#righttypediv').show();
				$('#description').val($("");
			}
			else{
				$('#righttypediv').hide();
				$('#description').val($("#diagnosisname").text());
				$('#solution').val("Drink water that tastes good to your body");
			}	
	});

	$('input[name=absorbscheck]').change(function(){
		$('#description').val($("#diagnosisname").text());
	});
});