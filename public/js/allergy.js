$(document).ready(function()
{
    $('#errormessage').hide();
    if($('#emotionList')){
        $('#emotionList').hide();
    }
    var id =$('#appointmentnumber').text(); 

	$("#allergy").change(function () {
        checkAllergy($('#allergy').val());
    });

    $("#lastCauseClicker").click(function(){          
            destination ="../../../../problemsallergyclear/"+id;
            $('#barrierform').attr('action', destination);
    });

    $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsallergy/"+id;
            $('#barrierform').attr('action', destination);
    });


    $('.pathClicker').click(function(){
        checkAllergy($('#allergy').val());
    })
	 	
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
