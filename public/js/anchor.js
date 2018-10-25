$(document).ready(function()
{
	 navigation.hideErrorAndAdancement();

    $('#messagetext').keyup(function(){
        //Test whether length is correct if incorrect throw error
        if($(this).val().length<3){
            navigation.showError();
        }
        
        //Test whether material is correct if just hide errormessage
        else if ($('improvedtext').val().length<3){
             navigation.hideErrorAndAdancement();
        }

        else{ 
           
            $('#description').val($("#diagnosisname").text()+ 
            " "+ $('#messagetext').val());
            $('#solution').val(" New Message:  " +('#improvedtext').val()+".");
            navigation.showAdvancement();
        }
        
    });

    $('#improvedtext').keyup(function () {
        if($('#messagetext').val().length<3 && $(this).val().length>=3){
             $('#description').val($("#diagnosisname").text()+ 
            " "+ $('#messagetext').val());
            $('#solution').val(" Replace with positve message: " +('#improvedtext').val()+".");
            navigation.showAdvancement();
        }
    });

     $('#improvedtext').blur(function(){
        if($(this).val().length<3){
            $('#errormessage2').show();
        }
        else{
            $('#errormessage2').hide();
        }
        
    });
});