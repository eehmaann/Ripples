$(document).ready(function()
{
	
	$('#progressionQuestion').hide();
	$("#lastCauseClicker").text(" Clear " + $("#diagnosisname").text());
	$("#newCauseClicker").hide();	
  $('.error').hide();

    $("#ageinput").change(function () {
    	checkAge();         
	});
    


    $('.pathClicker').click(function(){
       if(checkAge()){
       		$('#description').val($("#diagnosisname").text() + " [from age "+$("#ageinput").val()+"]");  
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