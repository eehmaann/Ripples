$(document).ready(function(){
	$('.error').hide();
	  $('.pathClicker').click(function(){
	  	if($('#generationpath').val().length>5){
	  		$('#description').val($("#diagnosisname").text() +":" 
	  			+ $('#generationpath').val() + "["
	  			+$('#yeardisplay').val()+']');
	  	}
	  	else{
	  		$('#patherror').show();
	  	}  
    })
});