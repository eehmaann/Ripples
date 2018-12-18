$(document).ready(function()
{

	var id =$('#appointmentnumber').text();   
	$("#diagnosisname, #barriername").append(" toxicity ");

	//Change of exit area display.  
	$('#progressionQuestion').hide();
    $("#lastCauseClicker").hide();
    $("#newCauseClicker").text('Energetically remove ' + $("#diagnosisname").text());

   
    // Creates description to place as an underlying cause
    $('#description').val($("#diagnosisname").text()
		+' <p class ="barrierdefinition"> Consider using ACZ Nano (Zeolite) is an oral spray that is a' 
		+'wonderful cleaner of heavy metals and very easy to take. '
		+ '<span class="error"> Disclaimer: This information is intended for personal use and not for '
		+'the practice of any healing art.  It is NOT intended as medical advice' 
		+'and should NOT be used for diagnosis or medical treatment.</span></p>');

    // Prepares solution statement to place at top of report
	 $('#solution').val('Consider using ACZ Nano (Zeolite) is an oral spray that is a' 
		+'wonderful cleaner of heavy metals and very easy to take. '
		+ '<span class="error"> Disclaimer: This information is intended for personal use and not for '
		+'the practice of any healing art.  It is NOT intended as medical advice' 
		+'and should NOT be used for diagnosis or medical treatment.</span>');
	

	 // Store as cause with a suggested step
     $("#newCauseClicker").click(function(){          
            destination ="../../../../problemssolution/"+id;
            $('#barrierform').attr('action', destination);
    });

});