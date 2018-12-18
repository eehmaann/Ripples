$(document).ready(function()
{
    $('#errormessage').hide();
    if($('#emotionList')){
        $('#emotionList').hide();
    }
    var id =$('#appointmentnumber').text(); 

    // Error checks allery box
	$("#allergy").change(function () {
        checkAllergy($('#allergy').val());
    });

    // Changes destination for cleared allergy
    $("#lastCauseClicker").click(function(){          
            destination ="../../../../problemsallergyclear/"+id;
            $('#barrierform').attr('action', destination);
    });

    // Changes desiination for not cleared allergy
    $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsallergy/"+id;
            $('#barrierform').attr('action', destination);
    });

    // Check allergy box for 
    $('.pathClicker').click(function(){
        checkAllergy($('#allergy').val());
    })
	 	
    // Test allergy shows error message if there is an error
    function checkAllergy(allergy){
         if(allergy.length>=3){
            $('#errormessage').hide();
            $('#description').val($("#diagnosisname").text()+": Allergic to "+allergy);
        }
        else{
            $('#errormessage').show();
            $('#description').val("");
        }
   
    }

    // Autocomplete to make it so only a few keys are needed for a stored allergy
        $( "#allergy" ).autocomplete({
        source: function(request, response) {
          $.ajax({
            url: '/searchsubstance',
            dataType: "json",
            data: {
              term : request.term
            },
            success: function(data) {
              response(data);     
            }
          });
        },
      minLength: 2,
    });
});
