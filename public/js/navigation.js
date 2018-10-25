$(document).ready(function()
{	
	
	//Page starts with show locators that are part of base
	if ( $( ".clickLocator" )) {
		var disp="Base";
		showNavigation(disp);
	}

	/* Change chosen category to chosen locator
		hide locators and diagnosis not part of category
		show those in category
	*/
	 $(".clickLocate").click(function () {
        disp = $(this).text();
        showNavigation(disp);
    });

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
	}
}

// applies showNavigator to locators and diagnosis

function showNavigation(choice){
	$( ".clickLocate" ).each( function(){
		$(this).showChoices(choice);
	})

	$( ".clickDiagnose" ).each( function (){
	$(this).showChoices(choice);
	})
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





