$(document).ready(function()
{
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Suggest diet change');

	 $('.error').hide();
	   var id =$('#appointmentnumber').text();   
           
	 $(".pathClicker").click(function(){
	 	var emptycounter=0;
	 	$('#description').val("Change diet ");
		if ($("input[name='foods[]']:checked").length>0){
			appendList($("input[name='foods[]']:checked"), "include" );
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
       	$('#solution').val($('#description').val());
       	 destination ="../../../../problemsjs/"+id;
            $('#barrierform').attr('action', destination);
        }
	});

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