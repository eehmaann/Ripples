$(document).ready(function()
{
	$('.error').hide();
  var id =$('#appointmentnumber').text(); 

    $("#lastCauseClicker").click(function(){          
            destination ="../../../../problemsintoleranceclear/"+id;
            $('#barrierform').attr('action', destination);
    });

    $("#newCauseClicker").click(function(){          
            destination ="../../../../problemsintolerance/"+id;
            $('#barrierform').attr('action', destination);
    });


	 $("#allergy").change(function () {
	 	if($(this).val().length>=3){
            $('.error').hide();
        }
        else{;
            $('.error').show();
        }
    });

     function testEffect(){
        if($('#effect').val().length>2){
            if($('#description').val().length>3){
               $('#description').val($('#description').val()+ " will cause " + $('#effect').val()); 
            }
        }
     }


     $('.pathClicker').click(function(){
         $('#description').val($("#diagnosisname").text()+" to "+$("#allergy").val());
        if($('#description').val().length<17){
           
          $('#description').val("");
           $('.error').show(); 
        }
        else{
              testEffect()
            
            $('.error').hide();
        }
    });

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

    $( "#effect" ).autocomplete({
        source: function(request, response) {
          $.ajax({
            url: '/searchsymptom',
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