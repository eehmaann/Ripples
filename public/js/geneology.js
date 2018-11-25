$(document).ready(function(){
	var currentPhrase;
	var lastentry;
	var countadd=0;
	var patternadd=0;
	var today = new Date();
	var date=today.getFullYear();
	var gen=22;
	var GenList=[];

	function GenEntry(strlength, gens) {
    	this.strlength=strlength;
    	this.gens=gens;
   }

	$(".error").hide();

	$('.singleclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#generationpath').val($('#generationpath').val()+($(this).text() + " "));
			var gen = new GenEntry($(this).text().length +1, 1);
			GenList.push(gen);
			countadd++
			setInheritedDate();
			$('#patherror').hide();
		}
		else{
			undoGenerationAdd();
		}

	});

	$('#clearer').click(function(){
		$('#generationpath').val("");
		countadd=0;
		setInheritedDate();
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
		}

		else{
			$('#parentgenerror').show();
		}
	}

	function prepareAddPattern(){
		var repeats = parseInt($('#genrepeatsinput').val());
		if(repeats>=1){
			$('#generationpath').val($('#generationpath').val() 
				+"("+$('#patternstring').val()+')[repeated for' 
				+$('#genrepeatsinput').val() + " generations] ");
			countadd +=( patternadd *= repeats);
			var gen = new GenEntry($('#genrepeatsinput').val(),length+1, patternadd*repeats);
			GenList.push(gen);
			patternadd=0;
			$('#patherror').hide();			
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

//This will not be enough create a 2d array for pattern and times then effect count add as well
	function undoGenerationAdd(){
		var genstring =$('#generationpath').val();
		var genlength=genstring.length;
		if(genstring.length>6){
			var discardGen = GenList.pop();
			countadd-= discardGen.gens;
			genstring=genstring.substring(0, (genlength-discardGen.strlength))
			$('#generationpath').val(genstring);
			setInheritedDate();
		}		
	}
});