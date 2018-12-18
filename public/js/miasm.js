$(document).ready(function(){
	$('.error').hide();
	  $('.pathClicker').click(function(){
	  	if($('#generationpath').val().length>5){
	  		$('#description').val($("#diagnosisname").text()+": from "
	  			+ $("#genrepeatsinput").val()
				+" generations of parents ~ " 
				+ $('#yeardisplay') + " [from "
				+ $('#generationpath').val());	
	  	}
	  	else{
	  		$('#patherror').show();
	  	}  
    })
});