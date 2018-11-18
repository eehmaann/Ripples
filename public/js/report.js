
$(document).ready(function(){

$(".barrierdefinition").hide();
$('#defitionsshower').click(function(){
	if ($(this).text()=="Click to show definitions"){
		$(this).text("Click to hide defintions");
		$(".barrierdefinition").show();
	}
	else{
		$(this).text("Click to show definitions");
		$(".barrierdefinition").hide();
	}

});
//Display a different number style for each level of nesting
$( ".1step" ).each( function(){
		$(this).prepend(toRoman(parseInt($(this).attr('id')))+".");
	});
$(".2step").each(function(){
	$(this).prepend(toLetter(parseInt($(this).attr('id')))+".");
});

$(".3step").each(function(){
	$(this).prepend(parseInt($(this).attr('id'))+".");
});

$(".4step").each(function(){
	$(this).prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+".");
});

$(".5step").each(function(){
	$(this).prepend(parseInt($(this).attr('id'))+"]");
});

$(".6step").each(function(){
	$(this).prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+"]");
});

$(".7step").each(function(){
	$(this).prepend("["+parseInt($(this).attr('id'))+"]");
});

$(".8step").each(function(){
	$(this).prepend("["+toLetter(parseInt($(this).attr('id'))).toLowerCase()+"]");
});

$( ".9step" ).each( function(){
		$(this).prepend(toRoman(parseInt($(this).attr('id'))).toLowerCase()+")");
	});

$(".10step").each(function(){
	$(this).prepend(parseInt($(this).attr('id'))+")");
});

$(".11step").each(function(){
	$(this).prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+")");
});

$( ".12step" ).each( function(){
		$(this).prepend("("+toRoman(parseInt($(this).attr('id'))).toLowerCase()+")");
	});
$(".barrier").each(function(){
	var number =parseInt($(this).attr('class'), 10);
	var sizeincrease =(12-number)/20 +1;
	$(this).css('font-size', sizeincrease+"em");
	$(this).css('margin-left', (number)*2+"em")

})

$(".barrier").click(function(){
	$(this).children('.barrierdefinition').toggle();
})

function toRoman(num) {  
  var result = '';
  var decimal = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
  var roman = ["M", "CM","D","CD","C", "XC", "L", "XL", "X","IX","V","IV","I"];
  for (var i = 0;i<=decimal.length;i++) {
    while (num%decimal[i] < num) {         
      result += roman[i];
      num -= decimal[i];
    }
  }
  return result;
}

function toLetter(num){
	var firstletter;
	var requiredletter;
	var istwoletter;
	requiredletter=String.fromCharCode((num-1)%26+65)
	if(num/26>=1){
		firstletter=String.fromCharCode(num/26+64);
		requiredletter=firstletter+requiredletter;

	}
	return requiredletter;
}

});