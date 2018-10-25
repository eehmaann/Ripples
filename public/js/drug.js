$(document).ready(function(){
 	$('.drugCheckBox').change(function(){
 	if ($('.drugCheckBox:checked').size()>0){
            $('#errormessage').hide()
        }
        else{
            $('#errormessage').show();
        }
    });

 	$(".pathClicker").click(function(){
		if ($('.drugCheckBox:checked').size()>0){
            $('#description').val($("Drugs in system ") +
            	getDrugList());
        }
        else{
            $('#errormessage').show();
        }
	});

 	function getDrugList(){
		var drugarray = [];
		$(".drugCheckBox:checked").each(function() {
			drugarray.push($(this).val());
		});
		var drugs;
		drugs = drugarray.join(', ') ;
		eturn drugarray;
	}	

});


