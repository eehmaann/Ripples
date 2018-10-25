$(document).ready(function()
{
	navigation.hideErrorAndAdancement();

    $("#effect").keyup(function () {
        if($(this).val().length>=3){
            if($('#description').val().length>11){
                $('#description').val($("#diagnosisname").text()+" to "+$("#allergy").val()+ 
                    " will cause " + $(this).val());
            }
        }
    });

	 $("#allergy").keyup(function () {
	 	if($(this).val().length>=3){
        	$('#description').val($("#diagnosisname").text()+" to "+$(this).val());
            if($('#effect').val().length>3){
                $('#description').val($('#description').val()+ " will cause " + $('#effect').val());
            } 
                navigation.showAdvancement();
        }
        else{
            $('#description').val('');
            navigation.showError();
        }
    });
});