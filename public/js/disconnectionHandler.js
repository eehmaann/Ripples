$(document).ready(function()
{
  $('.error').hide();
  $('.warning').hide();
	
	$('.updateconnection').change(function(){
    if($('#updateconnection').val() != null && $('#updateconnection').val() != ''){
      $('#updateError').hide();
    }
  });


  $('.disconnectionClearer').click(function(){
       $(this).parent().submit();
     });

   $('.disconnectionUpdater').click(function(){
      if($('#updateconnection').val() != null && $('#updateconnection').val() != ''){
           $(this).parent().submit();
        }
        else{
          $('#updateError').show();
        }
     });

});