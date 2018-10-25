$(document).ready(function()
{
    $('#description').val("Physical Trauma energy.");

    $('.traumaclicker').click(function(){
        $('#traumadisplay').val($(this).text()); 
    })
    
    $(".pathClicker").click(function(){
        if($('#traumadisplay').val().length>2){
           $('#description').append(" This was an" + $('#traumadisply').val());
        }
        if(parseInt($('#ageinput').val())>0){
            $('#description').append(" from age " + $('#ageinput').val());
        }
        if ($('#peopleinvolvedinput').val().length>2){
             $('#description').append( " "+ $('#peopleinvolved').val() +
                "were involved. ")
        }

    });
});


    
   
    

