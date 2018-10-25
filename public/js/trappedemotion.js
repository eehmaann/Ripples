$(document).ready(function()
{


	var emotiontrap;
	// track whether the rest of the time period is set
	var timePrepared=false;
	var currentPhrase=' ';
	$(".error").hide();
	
	hideTrapTypes();
	
	 $(".emotion").click(function () {
        $('#selectedEmotion').val($(this).text());
    });

	 $(".timeselector").click(function () {
        hideTrapTypes();
        emotiontrap=$(this).attr('id');
        $('.'+emotiontrap).show();
    });

	 $("#repititions").change(function(){
		prepareForSubmission();
	 });

	 // Handles is current life trapped emotion
	$("#ageinput").change(function(){
		if(!$(this).val()>0){
			$("#ageerror").show();
			markUnready();
			return;
		}
		//age is correct appropriate
		currentPhrase=($("#diagnosisname").text()+" from age "
			+ $("#ageinput").val());
		timePrepared=true;
		prepareForSubmission();
	});

	//Handles Prenatal 

	$('#relationInputBox').hide(); 

	// When one of the options on the prenatal is selected
	$(".prenatalclicker").click(function(){
		if($(this).attr('id')=="otherprenatal"){
			$('#relationInputBox').val('').show(); 
			markUnready();
			$("#presource").val('');
			return;
		}
		//Option other than other is selected
		$('#relationInputBox').hide(); 
		$("#presource").val($(this).text());
		buildPrenatalPhrase();
		prepareForSubmission();
	});

	$('#relationshipinput').keyup(function(){
		$("#presource").val($('#relationshipinput').val());
	});
	
	$('#relationshipinput').mouseout(function(){
		if($(this).val().length>2){
			$("#prenatalerror").hide();
			buildPrenatalPhrase();
			prepareForSubmission();
		}
		else{
			$("#prenatalerror").show();
		}
	});

	function buildPrenatalPhrase(){
		currentPhrase=("prenatal " + $("#diagnosisname").text()+" from "+ $("#presource").val());
		timePrepared=true;
	}


	// Past life funcions
	$('#pastage, #died').change(function(){
		$('#birth').val(parseInt($('#died').val())-parseInt($('#pastage').val()));
		makePastLife()
	});



	$('#pastage').change(function(){
		if (parseInt($('#pastage').val())>12){
			$('#relationshipstatus').show();
		}
	})

	$('input[name=gender]').change(function(){
		makePastLife();
	});

	$('input[name=wasmarried]').change(function(){
		var married = $('input[name=wasmarried]:checked').val();
		if (married !='unknown'){
			$('#marriedtext').val("The person was "+ married);
		}
		else{
			$('#marriedtext').val("");
		}
		makePastLife();
	});



	$('input[name=accidental]').change(function(){
		var accident = $('input[name=accidental]:checked').val();
		if (accident !="canttell"){
			$('#deathinput').val("The death was "+ accident);
		}
		else{
			$('#deathinput').val("");
		}
		makePastLife();
	});


	// checks whether death was war related
	$('input[name=warrelated]').change(function(){
		var war = $('input[name=warrelated]:checked').val();
		if (war !='no clue'){
			$('#warinput').val("The death was "+ war);
		}
		else{
			$('#warinput').val("");
		}
		makePastLife();
	});

	//if war related was person a soldier
	$('input[name=warrelated]').change(function(){
		if ($('input[name=warrelated]:checked').val()=="war related"){
			$('#soldierquestion').show();
		}
		else{
			$('#soldierquestion').hide();
		}
		makePastLife();
	});
	

	$('input[name=soldierlife]').change(function(){
		if ($('input[name=soldierlife]:checked').val()=="soldier"){
			$('#soldierinput').val("In the war you were a soldier");
			$('#kidnappedquestion').show();
		}
		else{
			$('#kidnappedquestion').hide();
			$('#soldierinput').val("");
		}
		makePastLife();
	});


	$('input[name=kidnappedlife]').change(function(){
		if ($('input[name=kidnappedlife]:checked').val()=="kidnapped"){
			$('#kidnappinginput').val("You were kidnapped");
			$('#kidnappedquestion').show();
		}
		else{
			$('#kidnappedquestion').hide();
			$('#kidnappinginput').val('');
		}
		makePastLife();
	});

	$('#agekidnapped').change(function(){
		var age =parseInt($('#agekidnapped').val());
		if(age>4){
			$('#kidnappinginput').val("You were kidnapped at age" + age);
			$('#kidnappingageerror').show();;
		}
		else{
			$('#kidnappinginput').val("");
			$('#kidnappingageerror').show();;
		}

		makePastLife();
	})

	$('input[name=demographic]').change(function(){
		var demographic = $('input[name=demographic]:checked').val();
		if (demographic !='other'){
			$('#demographicinput').val("You were a "+ demographic);
		}
		else{
			$('#demographicinput').val("");
		}
		makePastLife();
	});
	// Create editable textarea for the content of past life.  
	function makePastLife(){
		if( checkPastLifeReady()){
			val()?true:false.text($('input[name=gender]:checked').val()+ " Born: "+ $('#birth').val()
			+ " Died: "+ $('#died').val() + " at age " + $('#pastage').val());
			//check and add married
			if ($('input[name=wasmarried]:checked').val() !='unknown'){
				$('#life').append(". "+$('#marriedtext').val());
			}
			if ($('#children').val()>0){
				$('#life').append(". Had "+ $('#children').val() +"children");;
			}
			// check to add reaspn for death 
			if ($('input[name=accidental]:checked').val() !="canttell"){
				$('#life').append($('#deathinput').val());
			}

			if($('input[name=warrelated]:checked').val() !='no clue'){
				$('#life').append($('#warinput').val());
			}
			if ($('input[name=soldierlife]:checked').val()=="soldier"){
				$('#life').append($('#soldierinput').val());
			}
			if ($('input[name=kidnappedlife]:checked').val()=="kidnapped"){
				$('#life').append($('#kidnappinginput').val());
			}
			if ($('#agekidnapped').val()>0){
				$('#life').append($('#agekidnapped').val());
			}
			if ($('input[name=demographic]:checked').val() !='other'){
				$('#life').append($('#demographicinput').val());
			}
		}
	}

	$('#life').change(function(){
		if($('#life').val().length> 21){
			preparePastLife();
			$("#lifeerror")
		}
		else{
			currentPhrase="";
			timePrepared=false();
			$("#lifeerror").show();
		}
	})

	function preparePastLife(){
		currentPhrase=$('#life').text();
		timePrepared=true; 
	}

	function checkPastLifeReady(){
		return($('#birth').val().length>1 && $('input[name=gender]:checked').val()?true:false);
	}

	
	//Inherited emotions
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
		}
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
		$('#yeardisplay').val(date-(countadd*gen));
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

		else{
			markUnready();
		}
	}

	// Functions that are used multiple timesource options

	//checks whether the section has been completed
	function isPrepared(){
		return timePrepared;
	}

	// makes the description statement allowing the form to be submitted
	function constructDescription(){
		if(isPrepared()){
	 		$("#description").val(currentPhrase + "[repeated " +  
	 		$("#repititions").val() +" times]");
		}
	}

	// Create description if Repitions are ready
	function prepareForSubmission(){
		if(checkRepitions()){
			$("#errormessage").hide();
			constructDescription();
			return;
		}
		$("#errormessage").show();
	}

	function checkRepitions(){
		return($("#repititions").val()>1);
	}

	// marks the time period as unready and will prevent submission
	function markUnready(){
		timePrepared=false;
		$("#description").val(""); 
	}
});

function hideTrapTypes() {
  $('.self').hide();
  $('.prenatal').hide();
  $('.pastlife').hide();
  $('.inherited').hide();
}

navigation = {
	showAdvancement: function() {
		$('#nextstep').show();
    	$('#errormessage').hide();
	},

	showError: function(){
		$('#errormessage').show();
    	$('#nextstep').hide();
	},

	hideErrorAndAdancement: function(){
		$('#errormessage').hide();
    	$('#nextstep').hide();
    }
}



