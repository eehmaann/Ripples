$(document).ready(function()
{
	navigation.hideErrorAndAdancement();

    $('#length').blur(function(){
        //Test whether length is correct if incorrect throw error
        if((!$.isNumeric($(this).val()))||($(this).val()<10)){
            navigation.showError();
        }
        
        //Test whether material is correct if just hide errormessage
        else if ($('#material').val().length<3){
             navigation.hideErrorAndAdancement();
        }

        else{ 
           
            $('#description').val($("#diagnosisname").text()+ 
            " "+ $('#length').val() + " miles long made of "
            + $('#material').val()+".");
            navigation.showAdvancement();
        }
        
    });

    $('#material').keyup(function () {
        if($('#length').val()>10 && $(this).val().length>=3){
             $('#description').val($("#diagnosisname").text()+ 
             " "+ $('#length').val() + " miles long made of "
            + $('#material').val()+".");
            navigation.showAdvancement();
        }
    });

     $('#material').blur(function(){
        if($(this).val().length<3){
            $('#errormessage2').show();
        }
        else{
            $('#errormessage2').hide();
        }
        
    });

     $( "#test" ).autocomplete({
      source: "heartwall/autocomplete",
     minLength: 2,
      select: function(event, ui) {
        $('#test').val(ui.item.value);
      }
    });
});