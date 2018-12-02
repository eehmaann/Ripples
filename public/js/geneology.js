$(document).ready(function(){
	var currentPhrase;
	var lastentry;
	var countadd=0;
	var patternadd=0;
	var today = new Date();
	var date=today.getFullYear();
	var gen=22;
	var GenList=[];
 
	$(".error").hide();

	$('.singleclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#generationpath').val($('#generationpath').val()+($(this).text() + " "));
			GenList.push($(this).text().length +1);
			$('#patherror').hide();
		}
		else{
			undoGenerationAdd();
		}

	});

	$('#clearer').click(function(){
		$('#generationpath').val("");
		countadd=0;
		$('#genrepeatsinput').val('');
		setInheritedDate();
	});


	$('#genrepeatsinput').change(function(){
		countadd=$(this).val();
		setInheritedDate();
	});

	$('.patternclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#patternstring').val($('#patternstring').val()+($(this).text() + " "));
			$('#parentgenerror').hide();

		}
		else{
			undoPatternExtension();
		}

	});

	$('#pattogenclicker').click(function(){
		addPattern();
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
		}

		else{
			$('#parentgenerror').show();
		}
	}

	function prepareAddPattern(){
		if($('#patternstring').val().length>6){
		$('#generationpath').val($('#generationpath').val() 
			+"("+$('#patternstring').val()+')';
			GenList.push($('#genrepeatsinput').val(),length+1);
			$('#patherror').hide();			
		} 
		else{
			$('#patternadderror').show();
		}
	}

	function resetPatternDisplays(){
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

//This will not be enough create a 2d array for pattern and times then effect count add as well
	function undoGenerationAdd(){
		var genstring =$('#generationpath').val();
		var genlength=genstring.length;
		if(genstring.length>6){
			var discardGen = GenList.pop();
			genstring=genstring.substring(0, (genlength-discardGen))
			$('#generationpath').val(genstring);
		}		
	}
});