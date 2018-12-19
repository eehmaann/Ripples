$(document).ready(function()
{	
	 $('.error').hide();
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest change');

	 var id =$('#appointmentnumber').text();  
	 //Checks whether there is a herb to include or avoid
	 $(".pathClicker").click(function(){
	 	var emptycounter=0;
	 	$('#description').val("Change diet ");
        if ($("input[name='herbs[]']:checked").length>0){
			appendList($("input[name='herbs[]']:checked"), "eat" );
		}
        else{
            emptycounter++;
        }
        if ($("input[name='avoidherbs[]']:checked").length>0){
			appendList($("input[name='avoidherbs[]']:checked"), "avoid" );
		}
        else{
            emptycounter++;
        }
       	if(emptycounter==2){
       		$('.error').show();
       		$('#description').val("");
       	}
       	else{
       		 $('#solution').val($('#description').val());
       		 destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
       	}
	});

 	function appendList(checkbox, verb){
		var listarray = [];
		checkbox.each(function() {
			listarray.push($(this).val());
		});
		var selection;
		selection = listarray.join(', ') ;
		$('#description').append(verb +listarray);
	}	

});