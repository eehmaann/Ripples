$(document).ready(function()
{
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest diet change');

	 $('.error').hide();
	   var id =$('#appointmentnumber').text();   

	   // Checks each list to see if there is one change to diet suggested
           
	 $(".pathClicker").click(function(){
	 	var emptycounter=0;
	 	$('#description').val("Change diet ");
		if ($("input[name='foods[]']:checked").length>0){
			appendList($("input[name='foods[]']:checked"), "eat" );
		}
        
        else{
            emptycounter++;
        }
		if ($("input[name='avoidfoods[]']:checked").length>0){
			appendList($("input[name='avoidfoods[]']:checked"), "avoid" );
		}
		
		else{
            emptycounter++;
        }

       	if(emptycounter==2){
       		$('.error').show();
       	}
       	else{
       		//Destination is just solution
       	$('#solution').val($('#description').val());
       	 destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
        }
	});

	 // Adds change to diet to suggestion
 	function appendList(list, verb){
		var listarray = [];
		list.each(function() {
			listarray.push($(this).val());
			alert($(this).val());
		});
		var selection;
		selection = listarray.join(', ') ;
		$('#description').append(verb +listarray);
	}	

	   $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
    });


});