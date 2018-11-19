var disp="Base";
$(document).ready(function()
{	
	var breadcrumbs=[];
	//Page starts with show locators that are part of base
	if ($(".clickLocator" )) {
		showNavigation(disp);
		$('#backclicker').hide();
		$('#diagnoses').hide();
	}
 
	 $(".clickLocate").click(function () {
		 $('#backclicker').show().text("Return to " + disp);
 		breadcrumbs.push(disp);
	 	disp = $(this).text();
        showNavigation(disp);
    });

	// Change chosen category to chosen locator
	//	hide locators and diagnosis not part of category
	//	show those in category 



	 $("#backclicker").click(function(){
	 	disp=breadcrumbs.pop();
	 	showNavigation(disp);
	 	if(breadcrumbs.length === 0){
	 		$('#backclicker').hide();
	 	}
	 	else{
	 		$('#backclicker').show().text("Return to " + breadcrumbs[breadcrumbs.length-1]);
	 	}
	 });

	 $('#hiddenform').hide();


	$(".pathClicker").click(function(){
		//forms can only be submitted if description has been built
		if($('#description').val().length>2){
		$('form').submit();
		}
	});

});


/* if selection is not part of category hide
	if is part of category show 
*/
$.fn.showChoices = function(catType) {
    this.hide();
    if($(this).data('category')===catType){
		this.show();
		return 1;
	}
	return 0;
}

// applies showNavigator to locators and diagnosis

function showNavigation(choice){
	var diagnosisShown=0;
	$( ".clickLocate" ).each( function(){
		$(this).showChoices(choice);
	})

	if(disp=="Base"){
		$('#diagnoses').hide();
		return;
	}

	$('#diagnoses').show();
	$( ".clickDiagnose" ).each( function (){
	diagnosisShown+=$(this).showChoices(choice);		
		})
	if(diagnosisShown==0){
		$('#diagnoses').hide();
	}
	$('#diagnosehader').text("Selectable causes within " +disp);
	return;

}

navigation = {
	showAdvancement: function() {
		$('#nextstep').show();
    	$('#errormessage').hide();
	},

	showError: function(){
		$('#errormessage').show();
    	$('#nextstep').hide();
	},

	hideErrorAndAdancement: function(){
		$('#errormessage').hide();
    	$('#nextstep').hide();
    }
}