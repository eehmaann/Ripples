$(document).ready(function()
{

    var id =$('#appointmentnumber').text();    
    $('.error').hide();
    $('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Record' + $("#diagnosisname").text()); 
   


    $('#messagetext').change(function(){
        //Test whether length is correct if incorrect throw error
        testMessage();
    });

    $('improvedtext').change(function(){
        testImprovedText();

    });

    $("#newCauseClicker").click(function(){
        if(testMessage() && testImprovedText()){
             $('#description').val($("#diagnosisname").text()+ 
            " "+ $('#messagetext').val());
            $('#solution').val(" Healing tree message: " +$('#improvedtext').val()+".");
            destination ="../../../../problemssolution/"+id;
            $('#barrierform').attr('action', destination);
        }
    });
    
    function testMessage(){
        if ($('#messagetext').val().length<3){
             $('#errormessage').show();
             return false;
        }
        else{
             $('#errormessage').hide();
        }
        return true;
    }

    function testImprovedText(){
        if ($('#improvedtext').val().length<3){
            $('#errormessage2').show();
            return false;
        }
        else{
             $('#errormessage2').hide();
        }
        return true;
    }


});