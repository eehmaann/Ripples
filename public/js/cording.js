$(document).ready(function()
{

	var cordTypesCount=0;
	var arbody = new Array("Brain", "Heart", "Gut", "Privates");
	$('.cord').keydown(function(){
		forceLength($(this));
		if($(this).val().length>1){
			insertDecimal($(this));
		}

	});

	$(".cordtexts").hide();
	$(".definition").css("color", "blue")
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
	$('#newCauseClicker').hide();
	$('#lastCauseClicker').text('Clear Cording');

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

	function constructDescription(){
		var cordtypecount =0;
		var statement ='<ul class="cordDetail">';
		for (var client = 0; client < arbody.length; ++client) {
			for (var cord =0; cord <arbody.length; ++cord){
				if($('#'+arbody[client]+'to'+arbody[cord]+'text').val().length>1){
					statement+="<span class='foundcord'> <li>"
					+$('#'+arbody[client]+'to'+arbody[cord]+'text').val()
					+"<br><span class='corddefiner'>"+$('#'+arbody[client]+'to'+arbody[cord]+'Statement').text()
					+"<div class='circle'> <div id='text'>i</div></div></span></li></span>";
					cordtypecount++;
				}
					
			}
		}
		if(cordtypecount>0){
			$("#description").val("Unhealthy cording to " + $('#corded').val()+
				statement + "</ul");
		}
		else
		$("#description").val("");
	}

});


function forceLength(input){
	var text = (input).val();
    var maxlength = 4;

    if(text>maxlength){
        (input).val(text.substr(0, maxlength)); 
    }
}

function insertDecimal(input){
	var text = (input).val();
	var patt = new RegExp("[0-9]{2}");
	var matches = patt.test(text);
	if(matches){
		input.val(insert(text, 1, '.'));
	}

}

function insert(str, index, value) {
    return str.substr(0, index) + value + str.substr(index);
}