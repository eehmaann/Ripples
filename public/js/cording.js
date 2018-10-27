$(document).ready(function()
{
	var arbody = new Array("Brain", "Heart", "Gut", "Privates");	
	$('.cord').keydown(function(){
		forceLength($(this));
		insertDecimal($(this));

	});

	$('.cordmultiple, .cord').change(function(){
		var client;
		for (client = 0; client < arbody.length; ++client) {
			var cord;
			for (cord =0; cord <arbody.length; ++cord){
				if(checkContent($("#"+arbody[client]+"to"+arbody[cord]+"number"), 
				$("#"+arbody[client]+"to"+arbody[cord]+"multiplier"))){
					$('#'+arbody[client]+'to'+arbody[cord]+'text').text
						(writeTextAreas(arbody[client], arbody[cord]));
				}
			}
		}
	});


		function writeTextAreas(part1, part2){
			return ($("#"+part1+"to"+part2+"number").val()+ " " +part1 + " to " 
			+ part2 + " X 10 ^ "+ $("#"+part1+"to"+part2+"multiplier").val() + 
			" cords");  
		}


		function checkContent(id1, id2){
			return(id1.val()>2 && id2.val()>2);
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