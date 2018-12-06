$(document).ready(function()
{	
	 $('.error').hide();
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest change');

	 var id =$('#appointmentnumber').text();  

	 $(".pathClicker").click(function(){
	 	var emptycounter=0;
	 	$('#description').val("Change diet ");
        if ($("input[name='herbs[]']:checked").length>0){
			appendList("'herbs[]'", "eat" );
		}
        else{
            emptycounter++;
        }
        if ($("input[name='avoidherbs[]']:checked").length>0){
			appendList("'avoidherbs[]'", "avoid" );
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
		$('"input[name='+checkbox +']:checked"').each(function() {
			listarray.push($(this).val());
		});
		var selection;
		selection = listarray.join(', ') ;
		$('#description').append(verb +listarray);
	}	

});