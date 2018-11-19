$(document).ready(function()
{
	
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").text(" Clear " + $("#diagnosisname").text());
	$("#newCauseClicker").hide();	
 

    $('#solution').val("Cleared");  

    $("#age").change(function () {
    	checkAge();         
	});
    


    $('.pathClicker').click(function(){
       if(checkAge()){
       		$('#description').val($("#description").val() + "age ["+$("#age").val()+"]");  
        }
        else{
            $("#description").val('');
        }
    });

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