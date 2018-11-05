$(document).ready(function()
{
	var cordTypesCount=0;
	var arbody = new Array("Brain", "Heart", "Gut", "Privates");
	var destination = '../../../../problemsc/'+ $('#appointmentnumber').text();	
	$('.cord').keydown(function(){
		forceLength($(this));
		insertDecimal($(this));

	});
	$('#barrierform').attr('action', destination);

	$('.cordmultiple, .cord').change(function(){
		var count =0;
		var client;
		for (client = 0; client < arbody.length; ++client) {
			var cord;
			for (cord =0; cord <arbody.length; ++cord){
				if(checkContent($("#"+arbody[client]+"to"+arbody[cord]+"number"), 
				$("#"+arbody[client]+"to"+arbody[cord]+"multiplier"))){
					//if begins
					$('#'+arbody[client]+'to'+arbody[cord]+'text').text
					(writeTextAreas(arbody[client], arbody[cord]));
					count++;
				}
			}
		}
		cordTypesCount=count;
	});


		function writeTextAreas(part1, part2){
			return ($("#"+part1+"to"+part2+"number").val()+ " " +part1 + " to " 
			+ part2 + " X 10 ^ "+ $("#"+part1+"to"+part2+"multiplier").val() + 
			" cords");  
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
		var isValid;

		$( "fieldset" ).each(function() {
			var data=$(this).children('input').val();
				isValid= testValid(data);
		});
		if(isValid && cordTypesCount>0){
			constructDescription();
		}
	});

	function constructDescription(){
		$("#description").val("Unhealthy cording to " + $('#corded').val());
	}



	function showError(condition, fieldset){
		if(condition){
			$(fieldset).children('.error').show()
		}
		else{
			$(fieldset).children('.error').hide();
		}
	}

	function testValid(text){
		return(text.length>2);
	}
});

function forceLength(input){
	var text = (input).val();
    var maxlength = 4;

    if(maxlength > 0){
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