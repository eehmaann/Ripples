
$(document).ready(function(){

$(".barrierdefinition").hide();
$(".corddefiner").hide();


$('#defitionsshower').click(function(){
	if ($(this).text()=="Click to show cause definitions"){
		$(this).text("Click to hide cause defintions");
		$(".barrierdefinition").show();
	}
	else{
		$(this).text("Click to show cause definitions");
		$(".barrierdefinition").hide();
	}

});


$('#emotoinshower').click(function(){
	if ($(this).text()=="Click to show emotion definitions"){
		$(this).text("Click to hide emotion defintions");
		$(".emotiondefinition").hide();
	}
	else{
		$(this).text("Click to show emotion definitions");
		$(".emotiondefinition").show();
	}

});


//Display a different number style for each level of nesting
$( ".1step" ).each( function(){
		$(this).children(".barrier").prepend(toRoman(parseInt($(this).attr('id')))+".");
	});
$(".2step, .1step > div >.childstep, .1step > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend(toLetter(parseInt($(this).attr('id')))+".");
});

$(".3step, .2step > div>  .childstep, .2step > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend(parseInt($(this).attr('id'))+".");
});

$(".4step, .3step > div> .childstep, .3step > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+".");
});

$(".5step, .4step > div> .childstep, .4step> ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend(parseInt($(this).attr('id'))+"]");
});

$(".6step, .5step > div> .childstep, .5step > > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+"]");
});

$(".7step, .6step > div > .childstep, .6step> > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children("barrier").prepend("["+parseInt($(this).attr('id'))+"]");
});

$(".8step, .7step > div > .childstep, .7step > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children(".barrier").prepend("["+toLetter(parseInt($(this).attr('id'))).toLowerCase()+"]");
});

$( ".9step, .8step > div > .childstep, .8step > > ul > li > .emotionentry>.childstep").each( function(){
		$(this).children(".barrier").prepend(toRoman(parseInt($(this).attr('id'))).toLowerCase()+")");
	});

$(".10step, .9step > div > .childstep, .9step> ul > li > .emotionentry>.childstep").each(function(){
	$(this).children("barrier").prepend(parseInt($(this).attr('id'))+")");
});

$(".11step, .10step > div > .childstep, .10step > ul > li > .emotionentry>.childstep").each(function(){
	$(this).children("barrier").prepend(toLetter(parseInt($(this).attr('id'))).toLowerCase()+")");
});

$( ".12step, .11step > div >.childstep, .11step > ul > li > .emotionentry>.childstep").each( function(){
		$(this).children(".barrier").prepend("("+toRoman(parseInt($(this).attr('id'))).toLowerCase()+")");
	});

$(".nest").each(function(){
	var number =parseInt($(this).attr('class'), 10);
	var sizeincrease =(12-number)/20 +1;
	$(this).css('font-size', sizeincrease+"em");
	$(this).css('margin-left', (number)*2+"em");

});

$(".nest > ul > li > .emotionentry").each(function(){
	$(this).css('padding-left', 2+"em");
});

$(".nest > ul > li > .emotionentry> .emotiondefinition").each(function(){
	$(this).css('margin-left', 3+"em");
});

$(".barrier").click(function(){
		$(this).find('.barrierdefinition').toggle();
	
});
$(".emotionentry").click(function(){
	$(this).children('.emotiondefinition').toggle();
});

$(".foundcord").click(function(){
	$(this).find('.corddefiner').toggle();
})


//This method was found at https://stackoverflow.com/questions/9083037/convert-a-number-into-a-roman-numeral-in-javascript
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