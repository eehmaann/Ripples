var currentPhrase;
var lastentry;
var countadd=0;
var patternadd=0;
var today = new Date();
var date=today.getFullYear();
var gen=22;

$('.singleclicker').click(function(){
	if($(this).text()!="Undo"){
		$('#generationpath').val($('#generationpath').val()+($(this).text() + " "));
		lastentry="singleadd";
		countadd++
		setInheritedDate();
		timePrepared=true;
	}
});

$('.singleclicker').click(function(){
	if($(this).text()="Undo"){
		undoGenerationAdd();
		if(countadd>0){
			countadd--;
			setInheritedDate();
		}
	}
});

$('#genrepeatsinput').change(function(){
	if($('genrepeatsinput').val()){
		$('#patternadderror').show();	
	}
});

$('.patternclicker').click(function(){
	if($(this).text()!="Undo"){
		$('#patternstring').val($('#patternstring').val()+($(this).text() + " "));
		patternadd++;
		$('#parentgenerror').hide();
	}
	else{
		undoPatternExtension();
		if(patternadd>=1){
			patternadd--;
		}
	}

});

$('#pattogenclicker').click(function(){
	addPattern();
	setInheritedDate();
	$('#genrepeatsinput').val(0);
	$('#patternstring').val('');

});

function undoPatternExtension(){
	var pattern =$('#patternstring').val();
	var patlength=pattern.length;
	if(pattern.length>6){
		pattern=pattern.substring(0, (patlength-7));
		$('#patternstring').val(pattern);
	}
}

function addPattern(){	
	if($('#patternstring').val().length>6){
		prepareAddPattern();
		timePrepared=true;
	else{
		$('#parentgenerror').show();
	}
}

function prepareAddPattern(){
	var repeats = parseInt($('#genrepeatsinput').val());
	if(repeats>=1){
		$('#generationpath').val("("+$('#patternstring').val()+')[repeated for' +
		$('#genrepeatsinput').val() + " generations] ");
		lastentry ="pattern";
		countadd +=( patternadd *= repeats);
		patternadd=0;
	} 
	else{
		$('#patternadderror').show();
	}
}

function resetPatternDisplays(){
	$('#genrepeatsinput').val(0);
	$('#patternstring').val('');
}

function setInheritedDate(){
	var newdate= date-(countadd*gen);
	if (newdate<0){
		newdate*=-1
		$('#yeardisplay').val(newdate + "B.C.E");
	}
	else{
		$('#yeardisplay').val(newdate + "CE");
	}
	
}


function undoGenerationAdd(){
	var genstring =$('#generationpath').val();
	var genlength=genstring.length;
	if(genstring.length>6){
		if(lastentry=="singleadd"){
			genstring=genstring.substring(0, (genlength-7));		
		}
		if(lastentry="pattern"){
			genstring=genstring.substring(0, lastIndexOf("("));
		}
		$('#generationpath').val(genstring);
	}
	checkReady();
	
}

function checkReady(){
	if($('#generationpath').val()<6){
		$('#description').val("");
	}
}