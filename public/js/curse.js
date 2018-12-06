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
	$('#LocationDisplay').hide();
	$("#newCauseClicker").text("Check for cords");
	


	var id =$('#appointmentnumber').text(); 

	$(".clickDiagnose").click(function(){
		$('#bodyinput').val($(this).attr('id'));
	});

	$('#bodyPartsToggler').click(function(){
		$('#LocationDisplay').toggle();
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

	 $("#lastCauseClicker").click(function(){          
            destination ="../../../../problemsclearcurse/"+id;
            $('#barrierform').attr('action', destination);
    });

    $("#newCauseClicker").click(function(){          
            destination ="../../../../problemscurse/"+id;
            $('#barrierform').attr('action', destination);
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
		$("#description").val("Curse [age  " + $('#ageinput').val() +"] from "
			+ $("#inflicterinput").val()) + " to " + $('#curseinput').val() 
		+ "located in " +$('#bodyinput').val();
	}



	function showError(condition, fieldset){
		if(condition){
			$(fieldset).children('.error').show();
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
	
	$( "#curseinput" ).autocomplete({
        source: function(request, response) {
          $.ajax({
            url: '/searchcurse',
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