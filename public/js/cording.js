$(document).ready(function()
{

	var cordTypesCount=0;
	var arbody = new Array("Brain", "Heart", "Gut", "Privates");

	$(".cordtexts").hide();
	$(".definition").css("color", "blue")
	
	// For each pair of cording applies the definition so that practitioner can see it
	$(".definition").each(function(){
		for (var client = 0; client < arbody.length; ++client) {
			for (var cord =0; cord <arbody.length; ++cord){
				$("#"+arbody[client]+"to"+arbody[cord]+"definition")
				.text($("#"+arbody[client]+"to"+arbody[cord]+"Statement").text());
			}
		}
	});
	

	//Adjust base form
	$('#progressionQuestion').hide();
	// cords do not have underlying cause
	$('#newCauseClicker').hide();
	$('#lastCauseClicker').text('Clear Cording');

	//When a multiple has been changed it will adjust the exponent
	$('.cordmultiple').change(function(){
		var text=$(this).attr('id');
		text=text.substring(0, text.length-10);

		if ($("#"+text+"number").val()>0) {
			$(this).val(parseInt($(this).val())+addExponent($("#"+text+"number")));
			$("#"+text+"error").hide();
		}
		else{
			$("#"+text+"error").show();
		}
	});

	//When a cord number has been changed, it will make sure the length is correct
	$('.cord').change(function(){
		var text=$(this).attr('id');
		text=text.substring(0, text.length-6);
		if ($("#"+text+"multiplier").val()>0) {
			$("#"+text+"error").hide();
		}
		else{
			$("#"+text+"error").show();
		}
	});

	//As soon as a cord has been written it will create the statement so the form can be processed
	$('.cordmultiple, .cord').change(function(){
		var client;
		for (client = 0; client < arbody.length; ++client) {
			var cord;
			for (cord =0; cord <arbody.length; ++cord){
				if(checkContent($("#"+arbody[client]+"to"+arbody[cord]+"number"), 
				$("#"+arbody[client]+"to"+arbody[cord]+"multiplier"))){
					//if begins
					$('#'+arbody[client]+'to'+arbody[cord]+'text').val(writeTextAreas(arbody[client], arbody[cord]));
				}
			}
		}
	});

	//How each cord will look in scientific notation
		function writeTextAreas(part1, part2){
			return ($("#"+part1+"to"+part2+"number").val()+ " " +part1 + " to " 
			+ part2 + " X 10 <sup> "+ $("#"+part1+"to"+part2+"multiplier").val() + 
			"</sup> cords");  
		}


		function checkContent(id1, id2){
			return(id1.val()>2 && id2.val()>2);
		}
		$(".error").hide();
		$('fieldset').change(function(){
		var data=$(this).children('input').val();
			showError(data.length <2, $(this));
	});

	$(".pathClicker").click(function(){
		constructDescription();
	});



	function showError(condition, fieldset){
		if(condition){
			$(fieldset).children('.error').show()
		}
		else{
			$(fieldset).children('.error').hide();
		}
	}

	// Write statment including capturing definiition and example statement
	function constructDescription(){
		var cordtypecount =0;
		var statement ='<ul class="cordDetail">';
		for (var client = 0; client < arbody.length; ++client) {
			for (var cord =0; cord <arbody.length; ++cord){
				if($('#'+arbody[client]+'to'+arbody[cord]+'text').val().length>1){
					statement+="<span class='foundcord'> <li>"+$('#'+arbody[client]+'to'
						+arbody[cord]+'text').val()+"<div class='circle'> <div id='text'>i</div></div>"
						+"<br><span class='corddefiner'>"+$('#'+arbody[client]+'to'+arbody[cord]
							+'Statement').text()+"</span></li></span>";
					cordtypecount++;
				}
					
			}
		}
		if(cordtypecount>0){
			$("#description").val("Unhealthy cording to " + $('#corded').val()+
				statement + "</ul>");
		}
		//Will make form unsendable if the there are no complete cords
		else
		$("#description").val("");
	}

});

// Adjust a number written to make sure it is correct scientific notation
function addExponent(input){
	var text=input.val();
	var space =text.indexOf(".");
	text=text.trim().replace('.', '');
	input.val(replaceNumber(text));
	
	if(space==1||text.length==1){
		return 0;
	}
	else if(space==2 ||text.length==2){
		return 1;
	}
	else{
		return 2;
	}

}

//Replaces number to make sure it is 3 digits with a decimal after first number

function replaceNumber(text){
	var num = parseFloat(text,10);
	num=num.toPrecision(3);
	num=(num.toString().substring(0,4));
	num=num.trim().replace('.', '');
	num=insert(num, 1, '.');
	num=parseFloat(num).toPrecision(3);
	return(num);	
}

function insert(str, index, value) {
    return str.substr(0, index) + value + str.substr(index);
}