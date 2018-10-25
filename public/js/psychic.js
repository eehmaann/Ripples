$(document).ready(function()
{
    var currentPhrase='';

     // Handles is current life trapped emotion
    $("#ageinput").change(function(){
        if(testAgeEntered()){
            hideAgeError();
        }
        else{
            showAgeError();
        }

    function testAgeEntered(){
       return ($("#ageinput")>0);
    }


    function hideAgeError(){
    {
        currentPhrase=($("#diagnosisname").text()+" from age "+ $("#ageinput").val());
         $("#ageerror").hide();
    }
    function showAgeError(){
        $("#ageerror").show()
        markUnready(); 
    }

    function markUnready(){
        $("#description").val("");
        currentPhrase=''; 
    }

    $('.emotionCheckBox').change(function(){
        if(!(testAgeEntered())){
           showAgeError(); 
           return;
        }
        if ($('.emotionCheckBox:checked').size()>0){
            $("#description").val(currentPhrase);
        }
        else{
            $('#description').val('');
        }
    });
});