$(document).ready(function()
{

    var id =$('#appointmentnumber').text();    
    $('.error').hide();
    //Set up exit display
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

    // Stores statement with healing message statement which will appear at top of report
    $("#newCauseClicker").click(function(){
        if(testMessage() && testImprovedText()){
             $('#description').val($("#diagnosisname").text()+ 
            " "+ $('#messagetext').val());
            $('#solution').val(" <span class='healingStatement'>Healing tree message: </span>" +$('#improvedtext').val()+".");
            destination ="../../../../problemssolution/"+id;
            $('#barrierform').attr('action', destination);
        }
    });
    
    //Tests validaity of message box, return an error if invalid entry
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

    // TEst improved message, wich will be in healng statement and send error if invalid
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