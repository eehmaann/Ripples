$(document).ready(function()
{
	 navigation.hideErrorAndAdancement();


	 $("#allergy").keyup(function () {
	 	if($(this).val().length>=3){
        	$('#description').val($("#diagnosisname").text()+": Allergic to "+$(this).val());
        	navigation.showAdvancement();
        }
        else{
        	$('#allergyError').show();
        	navigation.showError();
        }
    });
});
