$(document).ready(function()
{
	$(".error").hide();

	$('fieldset').change(function(){
		//checkFieldset($(this));
		var data=$(this).children('input').val();
		alert(testValid(data));
		if(!($.isNumeric(data))){
			showError(data.length <4, $(this));
		}
		else{
			showError(data<0, $(this));
		}
	});

	$(".pathClicker").click(function(){
		var isValid;

		$( "fieldset" ).each(function() {
			var data=$(this).children('input').val();
			// test to see if there is first invalid entry
			if(isValid){
				isValid= testValid($(this));
			}
			// test from time error invalid is found whether an error must show
			if(!(isValid)){
				if(!($.isNumeric(data))){
					showError(data.length <4, $(this));
				}
				else{
				showError(data<0, $(this));
				}
			}
		});
		// If all fields are correct construct a description statement
		if(isValid){
			constructDescription();
		}
	});

	function constructDescription(){
		($"#description").val("Curse [age  " + $('#ageinput').val() +"] from "
			+ $("#'inflicterinput'").val()) + " to " + $('#curseinput').val();
	}

	//function checkFieldset(fieldset){
		//var text=$(this).children('input').text();
		//if(!($.isNumeric(text))){
		//	showError(text.length()<4, $(this));
		//}
		//else{
		//	showError(text<0, $(this));
		//}
	//}



	function showError(condition, fieldset){
		if(condition){
			$(fieldset).children('.error').show()
		}
		else{
			$(fieldset).children('.error').hide();
		}
	}

	function testValid(text){
		//var data=$(this).children('input').val();
		if(!($.isNumeric(text))){
			return(text.length>4);
		}
		else{
			return(text>0);
		}
	}
});