$(document).ready(function()
{
	var disp ="Base";
	showNavigation(disp);

	//When locator is clicked new locators and/ or diagnoses will show
	$("#locators > ul > li" ).on('click',function (){
    alert($(this).text());
    disp=$(this).text();
    console.log(disp + "is the new disp");
    showNavigation(disp);
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



