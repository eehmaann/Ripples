$(document).ready(function()
{

  var id =$('#appointmentnumber').text();
  

    //Adjust base form
  $('#progressionQuestion').hide();
  $('#newCauseClicker').text('Seatch Trapped Emotions');
  $('#lastCauseClicker').hide();

  $('.error').hide();

  $(".pathClicker").click(function(){
    if(checkDistance() && checkMaterial()){
        $('#description').val($("#diagnosisname").text()+ 
          " "+ $('#lengthinput').val() + " miles long made of "
          + $('#material').val()+".");
        setDestination();
    }
  });

       function setDestination(){
       var destination= "../../../../problemsh/"+id;
        $('#barrierform').attr('action', destination);
     }

    $('#lengthinput').blur(function(){
        checkDistance();      
    });

    function checkDistance(){
      var lengthInput=$('#lengthinput').val();
      var lengthValid=($.isNumeric(lengthInput)&&(lengthInput>=10))
      if(lengthValid){
        $('#errormessage').hide();
      }
      else {
        $('#errormessage').show();
      }
      return lengthValid;
    }


     $('#material').blur(function(){
        checkMaterial();
        
    });

     function checkMaterial(){
      if($('#material').val().length<3){
        $('#errormessage2').show();
      }
      else{
          $('#errormessage2').hide();
      }
      return($('#material').val().length);
     }


   
     $( "#material" ).autocomplete({
        source: function(request, response) {
          $.ajax({
            url: '/searchajax',
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