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
    });

    function testAgeEntered(){
       return ($("#ageinput").val()>0);
    }


    function hideAgeError(){
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

    $('.emotionCheckBox').click(function(){

    
       if(!(testAgeEntered())){
           showAgeError(); 
           return;
        }
        
        if ($("input[name='emotions[]']:checked").length>0){
            $("#description").val(currentPhrase);
        }
       else{
            $('#description').val('');
        }
    });
});