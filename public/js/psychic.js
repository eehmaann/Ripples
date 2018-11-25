$(document).ready(function()
{

    var isInherited;
     
     $(".error").hide();
     $("#emotionList").hide();
     $("#ownTrauma").hide();
     $('#inheritedTrauma').hide();


     $(".originClicker").click(function(){
        $("#emotionList").show();
        if($(this).text()=="Yes"){
            $('#inheritedTrauma').show();
            $('#ownTrauma').hide();
            isInherited=true;
        }
        else{
             $('#inheritedTrauma').hide();
            $('#ownTrauma').show();
            isInherited=false;
        }
     });

    $("#ageinput").change(function(){
        testAgeEntered();
    });



    $("#lastCauseClicker").click(function(){
        destination ="../../../../problemsemotion/"+id;
        $('#barrierform').attr('action', destination);

    $("#newCauseClicker").click(function(){
            destination ="../../../../problemstrapped/"+id;
        $('#barrierform').attr('action', destination);
    });


    $('.pathClicker').click(function(){
        if(isInherited){
            saveInheritedTrauma();
        }
        else{
            saveOwnTraums();
        }
    });

    function testAgeEntered(){
       if($("#ageinput").val()>0){
         $("#ageError").hide();
         return true;
        }
        $("#ageError").show();
        return false;
    }

    function saveOwnTraums(){
        if(testAgeEntered()){  
            $("#description").val($("#diagnosisname").text()
            +" from age "
            + $("#ageinput").val());
        }
        else{
            $('#ageError').show();
        }
    }

    function saveInheritedTrauma(){
        if($('#generationpath').val().length>5){
            $('#description').val($("#diagnosisname").text() +":" 
            + $('#generationpath').val() + "["
            +$('#yeardisplay').val()+']');
        }
        else{
            $('#patherror').show();
        }  
    }
});

});