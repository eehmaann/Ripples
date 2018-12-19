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

	//Adds the generation

	$('.singleclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#generationpath').val($('#generationpath').val()+($(this).text() + " "));
			GenList.push($(this).text().length +1);
			$('#patherror').hide();
		}
		//Unoes an add regardless of it is a pattern or a single person
		else{
			undoGenerationAdd();
		}

	});

	//Resets the list of generations
	$('#clearer').click(function(){
		$('#generationpath').val("");
		countadd=0;
		$('#genrepeatsinput').val('');
		setInheritedDate();
		GenList=[];
	});


	//Calculates the year problem started based on how many generations it goes down
	$('#genrepeatsinput').change(function(){
		countadd=$(this).val();
		setInheritedDate();
	});

	//Eithers adds pattern or undoes lat add
	$('.patternclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#patternstring').val($('#patternstring').val()+($(this).text() + " "));
			$('#parentgenerror').hide();

		}
		else{
			undoPatternExtension();
		}

	});

	// Adds established pattern
	$('#pattogenclicker').click(function(){
		addPattern();
		$('#patternstring').val('');

	});

	//Undoes a single parent add to the pattern construction 
	function undoPatternExtension(){
		var pattern =$('#patternstring').val();
		var patlength=pattern.length;
		if(pattern.length>6){
			pattern=pattern.substring(0, (patlength-7));
			$('#patternstring').val(pattern);
		}
	}

	//Adds pattern statement
	function addPattern(){	
		if($('#patternstring').val().length>6){
			prepareAddPattern();
		}

		else{
			$('#parentgenerror').show();
		}
	}

	//Checks validity of pattern shows error if necessary
	function prepareAddPattern(){
		if($('#patternstring').val().length>6){
		$('#generationpath').val($('#generationpath').val() 
			+"("+$('#patternstring').val()+')');
			GenList.push($('#patternstring').val().length+3);
			$('#patherror').hide();			
		} 
		else{
			$('#patternadderror').show();
		}
	}

	// Allows for  new pattern to be started
	function resetPatternDisplays(){
		$('#patternstring').val('');
	}

	//Calculates date include adding year type
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
			var discardGen = GenList.pop();
			genstring=genstring.substring(0, (genlength-discardGen))
			$('#generationpath').val(genstring);
		}		
	}
});