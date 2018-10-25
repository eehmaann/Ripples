$(document).ready(function()
{
	navigation.hideErrorAndAdancement();

	$(".clickableSolutions").click(function () {
        $("#memorysolutiontext").val($(this).text());
        $("#solution").val($(this).text());
    });

    $("#memorysolutiontext").keyup(function () {
	 	if($(this).val().length>=3){
	 		$("#solution").val($(this).text());
	 	}
	 });

	$("#messagetext").keyup(function () {
	 	if($(this).val().length>=3){
        	$('#description').val($("#diagnosisname").text()+": "+$(this).val());
        	navigation.showAdvancement();
        }
        else{
        	navigation.showError();
        }
    });
});