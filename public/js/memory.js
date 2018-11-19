$(document).ready(function()
{
    $('#progressionQuestion').hide();
    $("#lastCauseClicker").text('Clear Memory');
    $("#newCauseClicker").hide();    
    $('#description').val($("#diagnosisname").text());

    $("#lastCauseClicker").click(function(){
        if(testMemory()){
           $('#description').val($("#diagnosisname").text()+": "+$(this).val());          
        }
        if(testSolution()){
            $('#solution'.val($('#memorysolutiontext').val());
        }
    });

	$(".clickableSolutions").click(function () {
        $("#memorysolutiontext").val($(this).text());
    });

    function testMemory(){
        if($('#messagetext').val().length>=3){
            $("#errormessage").hide();
            return true;
        }
        $("#errormessage").show();
            return false;
    }

    function testSolution(){
        return ($('#memorysolutiontext').val().length>=3);
    }
});