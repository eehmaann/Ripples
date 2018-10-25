$(document).ready(function()
{
    $('#errormessage').hide();

    $(.'spiritclicker').click(function(){
        $('#description').val("Vunerability to entity [" +
            $(this).val() + "]");
        $('#spiritsentence').text($('#description').val());
        $('#errormessage').hide();
    });
    $(".pathClicker").click(function(){
        $("#errormessage").show();

    });
});
