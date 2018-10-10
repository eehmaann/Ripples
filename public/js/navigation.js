$(document).ready(function()
{
	var disp ="Energy";
	showNavigation("Base");

	//When locator is clicked new locators and/ or diagnoses will show
	$("#locators > ul > li" ).on('click',function (){
    showNavigation($(this).value);
	});


});

//show possible choices
$.fn.showChoices = function(catType) {
    this.hide();
    if(this.hasClass(catType)){
		this.show();
	}
}

// function to show both locators and diangnoses
function showNavigation(choice){
	$( "#locators > ul > li" ).each( function(){
		$(this).showChoices(choice);
	})
	$( "#diagnoses > ul > li" ).each( function (){
		$(this).showChoices(choice);
	})
}



