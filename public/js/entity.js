$(document).ready(function()
{
    $('#errormessage').hide();

    //Makes statement as the type of entity is clicked on
    $('.spiritclicker').click(function(){
        $('#description').val("Vunerability to entity [" +
            $(this).text() + "]");
        $('.spiritclicker').removeClass("alert alert-info");
        $(this).addClass("alert alert-info");
        $('#spiritsentence').text($('#description').val());
        $('#errormessage').hide();
    });



    $(".pathClicker").click(function(){
        $("#errormessage").show();

    });
});
