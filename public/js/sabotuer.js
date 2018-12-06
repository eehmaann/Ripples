$(document).ready(function()
{
	var id =$('#appointmentnumber').text(); 
	$(".error").hide();
	$(".clickDiagnose > a").removeAttr("href");
	$( ".clickLocate:nth-child(6)")[0].remove()
	$('#Energy')[0].remove();
	$('#Pathogen')[0].remove();
	$('#Toxins')[0].remove();
	 $('#progressionQuestion').hide();
	$("#newCauseClicker").text('Check for cords');	
	$('#LocationDisplay').hide();
	
		$('#bodyPartsToggler').click(function(){
		$('#LocationDisplay').toggle();
	});

	$('#diagnoses > div > div >ul > a').each(function(){
		$(this).removeAttr("href");
	});



	$("#lastCauseClicker").click(function(){          
    	destination ="../../../../problemssabotuerclear/"+id;
    	$('#barrierform').attr('action', destination);
    });

    $("#newCauseClicker").click(function(){          
            destination ="../../../../problemssabotuer/"+id;
            $('#barrierform').attr('action', destination);
    });

	$(".clickDiagnose").click(function(){
		$('#bodyinput').val($(this).attr('id'));
	});


	$('fieldset').change(function(){
		var data=$(this).children('input').val();
		if(!($.isNumeric(data))){
			showError(data.length <2, $(this));
		}
		else{
			showError(data<0, $(this));
		}
	});

	$(".pathClicker").click(function(){
		var isValid =true;

		$( "fieldset" ).each(function() {
			var data=$(this).children('input').val();
			// test to see if there is first invalid entry
			if(isValid){
				isValid= testValid(data);
			}
			// test from time error invalid is found whether an error must show
			if(!(isValid)){
				if(!($.isNumeric(data))){
					showError(data.length <3, $(this));
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
		$("#description").val("Saboteur of " + $('#amountSaboteurs').val() + " " +
			$('#weaponinput').val()+" in " + $('#bodyinput').val()+ " [age " + 
		 	$('#ageinput').val() +"] from " +$("#saboteurinput").val());	
	}



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
			return(text.length>2);
		}
		else{
			return(text>0);
		}
	}

	   $( "#weaponinput" ).autocomplete({
        source: function(request, response) {
          $.ajax({
            url: '/searchsaboteur',
            dataType: "json",
            data: {
              term : request.term
            },
            success: function(data) {
              response(data);     
            }
          });
        },
      minLength: 2,
    });

});