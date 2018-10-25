$(document).ready(function()
{
    var timePrepared =false;
    var currentPhrase='';

    $("#repititions").change(function(){
        prepareForSubmission();
     });

     // Handles is current life trapped emotion
    $("#ageinput").change(function(){
        if(!$(this).val()>0){
            $("#ageerror").show();
            markUnready();
            return;
        }
        //age is correct appropriate
        currentPhrase=($("#diagnosisname").text()+" from age "
            + $("#ageinput").val() + " [repeats " + $("#repititions").val() +"]");
        timePrepared=true;
        prepareForSubmission();
    });

	 $('.emotionCheckBox').change(function(){
        if ($('.emotionCheckBox:checked').size()>0){
            currentPhrase=$("#diagnosisname").text()+"from age  "+ $("#ageinput").val()
            + " [repeats " + $("#repititions").val();
            constructDescription();
        }
        else{
            $('#description').val('');
        }
    });
        function isPrepared(){
        return timePrepared;
    }

    // makes the description statement allowing the form to be submitted
    function constructDescription(){
        if(isPrepared()){
            $("#description").val(currentPhrase);
        }
    }

    // Create description if Repitions are ready
    function prepareForSubmission(){
        if(checkRepitions()){
            $("#errormessage").hide();

            return;
        }
        $("#errormessage").show();
    }

    function checkRepitions(){
        return($("#repititions").val()>1);
    }

    // marks the time period as unready and will prevent submission
    function markUnready(){
        timePrepared=false;
        $("#description").val(""); 
    }

});