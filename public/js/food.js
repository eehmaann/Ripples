$(document).ready(function()
{
	 $('.error').hide();
	   var id =$('#appointmentnumber').text();   
           
	 $(".pathClicker").click(function(){
	 	var emptycounter=0;
	 	$('#description').val("Change diet ");
		if ($("input[name='foods[]']:checked").length>0){
			appendList("'foods[]'", "eat" );
		}
        else{
            emptycounter++;
        }
		if ($("input[name='avoidfoods[]']:checked").length>0){
			appendList("'avoidfoods[]'", "avoid" );
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