$(document).ready(function()
{
    var id =$('#appointmentnumber').text();  
	$('.error').hide();
    $('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Record' + $("#diagnosisname").text()); 



    $('#messagetext').change(function(){
        testMessage();
        
    });

    $('#improvedtext').change(function (){
        testImprovedText();
    });
          

    $('#newCauseClicker').click(function(){
        $('#description').val($("#diagnosisname").text()+ 
        " "+ $('#messagetext').val());
        
        $('#solution').val(" Replace with positve message: <span class='solutionAppearance'>" 
        +('#improvedtext').val()+".</span>");
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