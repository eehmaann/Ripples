$(document).ready(function()
{
    $('#errormessage').hide();
    if($('#emotionList')){
        $('#emotionList').hide();
    }

	$("#allergy").change(function () {
        checkAllergy($('#allergy').val());
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

    if($('#emotionList')){
        $('#emotionList').hide();
    }
    $('#emotionClicker').click(function(){
        $('#emotionList').toggle();
    });


    //$('.emotionClicker'.click(function(){
      //  var word=$(this).text();
        //$.ajax({
          //  url : 'https://www.collinsdictionary.com/dictionary/english-thesaurus/' +word,
            //type : 'GET',
            //context: 
            //data : {
              //  'numberOfWords' : 10
            //},
            //dataType:'json',
            //success : function(data) {              
              //  alert('Data: '+data);
            //},
            //error : function(request,error)
            //{
              //  alert("Request: "+JSON.stringify(request));
            //}
    //});

});
