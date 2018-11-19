$(document).ready(function()
{
    var id =$('#appointmentnumber').text();
    $('#progressionQuestion').text('Are there more ' + $("#diagnosisname").text()+ '?');


    $('.error').hide();

    $("#repititions").change(function(){
        checkRepitions();
     });

     // Handles is current life trapped emotion
    $("#ageinput").change(function(){
        checkAge();
   
    });

    $('.pathClicker').click(function(){
        if(checkAge()&&checkRepitions()){
           constructStatement();
        }
        else{
            $("#description").val('');
        }
    });



    $("#lastCauseClicker").click(function(){
        destination ="../../../../problemsemotion/"+id;
        $('#barrierform').attr('action', destination);
    });

    $("#newCauseClicker").click(function(){
        destination ="../../../../problemsemotionalres/"+id;
        $('#barrierform').attr('action', destination);
    });

    function constructStatement(){
        if($('.emotionCheckBox:checked').size()>0){
            $("#description").val(
                $("#diagnosisname").text()
                +"from age  "+ $("#ageinput").val()
                + " [repeats " + $("#repititions").val()
            );
        }
        else{
            $("#description").val('');
        }
    }

    function checkRepitions(){
        if($("#repititions").val()>0){
             $("#errormessage").hide();
             return true;
        }
        else {
            $("#errormessage").show();
            return false;
        }
    }

    function checkAge(){
        if( $("#ageinput").val()>0){
            $("#ageerror").hide();
            return true;
        }
        else{
            $("#ageerror").show();
            return false;   
        }
    }

});