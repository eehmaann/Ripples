$(document).ready(function()
{
	$('.error').hide();

    $("#effect").change(function () {
        if($(this).val().length>=3){
            if($('#description').val().length>11){
                $('#description').val($("#diagnosisname").text()+" to "+$("#allergy").val()+  
                    " will cause " + $(this).val());
            }
        }
    });

	 $("#allergy").change(function () {
	 	if($(this).val().length>=3){
        	$('#description').val($("#diagnosisname").text()+" to "+$(this).val());
            if($('#effect').val().length>3){
                $('#description').val($('#description').val()+ " will cause " + $('#effect').val());
            } 
            $('.error').hide();
        }
        else{
            $('#description').val('');
            $('.error').show();
        }
    });

     $('.pathClicker').click(function(){
        if($('#description').val().length<11){
           $('.error').show(); 
        }
        else{
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