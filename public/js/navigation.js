$(document).ready(function()
{
	var disp="Base";
	showNavigation(disp);

	$(".clickLocate" ).each(function(){ 
   		$(this).click(function(){
   			disp= $(this).text();
         	showNavigation(disp);
   		})
   	})
});

//show possible choices
$.fn.showChoices = function(catType) {
    this.hide();
    if($(this).data('category')===catType){
		this.show();
	}
}

// function to show both locators and diangnoses

function showNavigation(choice){
	$( ".clickLocate" ).each( function(){
		$(this).showChoices(choice);
	})
	$( ".clickDiagnose" ).each( function (){
		$(this).showChoices(choice);
	})
}


