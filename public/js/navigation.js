$(document).ready(function()
{
	var disp="Base";
	showNavigation("Base");

	//When locator is clicked new locators and/ or diagnoses will show
	//$("#locators > ul> li" ).on("click", function (){
    //	showNavigation($(this).text());
    //	disp=($(this).text());
    //	alert(disp);
    //	//alert($(this).text());
	//});
	$("#locators > ul> li" ).each(function(){ 
   		$(this).click(function(){ 
          showNavigation(this.text());
   		})
   	})
});

//show possible choices
$.fn.showChoices = function(catType) {
    this.hide();
    if(this.attr("class")===catType){
    //if(this.hasClass(catType)){
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


