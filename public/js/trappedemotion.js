$(document).ready(function()
{
	var emotiontrap;
	// track whether the rest of the time period is set
	var timePrepared=false;
	var currentPhrase=' ';
	$(".error").hide();
	var destination;
	var id =$('#appointmentnumber').text();
	var heartwall ='';


	
	// Adjust base form based on whether there is an open Heartwall.
	if(parseInt($('#heartwallid').text())>0)  {
		$("#diagnosisname").text("Heartwall Emotions");
		$("#barriername").text("Heartwall Emotions");
		heartwall=$('#heartwallid').text();
		$('#lastCauseClicker, #progressionQuestion, #backClicker').remove();
		$('#newCauseClicker').text("Clear these emotions.");

	}
	else{
		$("#diagnosisname").text("Trapped Emotions");
		$("#barriername").text("Trapped Emotions");
		$('#progressionQuestion').text('Are there more emotions?');
		$('#lastCauseClicker').text("No. Clear these emotions.");
		$('#newCauseClicker').text("Yes. Clear these emotions and find  more.");
	}

	// test new heartwall distance is less than stored heartwall distance
	function checkDistance(){
		if($('#updatedistance').val()<(parseInt($('#currentDistance').text()))){
			$('#distanceerror').hide();
			return true;
		}
		else{
			$('#distanceerror').show();
			return false;	
		}
	}

	$('#updatedistance').change(function(){
		checkDistance();
	});

	//Stores new value of heartwall

	$('#heartwallUpdater').click(function(){
		if(checkDistance()){
		destination ="../../../../heartwallUpdate/"+heartwall+"/update/"+id;
	$('#barrierform').attr('action', destination);
	$('#barrierform').submit();
		}
	});

	//set new distance to 0 clearing heartwall
	$('#heartwallClearer').click(function(){
		destination ="../../../../heartwallClear/"+heartwall+"/update/"+id;
		$('#barrierform').attr('action', destination);
		$('#barrierform').submit();
	});

	


	hideTrapTypes();

	$('.pathClicker').click(function(){
		
		if(emotiontrap=="pastlife"){
			updatePastLifeStatement();
		}
		prepareForSubmission();
	});

	$("#lastCauseClicker").click(function(){
		
		if(emotiontrap=="pastlife"){
			destination ="../../../../problemspastlifecauses/"+id;
		}
		else{
			destination ="../../../../problemsemotion/"+id;
		}
		$('#barrierform').attr('action', destination);
	});

	$("#newCauseClicker").click(function(){
		if(emotiontrap=="pastlife"){
			destination ="../../../../problemspastlife/"+id;
		}
		else{
			destination ="../../../../problemstrapped/"+id;
		}
		$('#barrierform').attr('action', destination);
	});
	
	 $(".emotion").click(function(){
        $('#selectedEmotion').val($(this).text());
    });

	 $(".timeselector").click(function(){
        hideTrapTypes();
        emotiontrap=$(this).attr('id');
        $('.'+emotiontrap).show();
    });

	 // If there is a number of times emotion has been trapped it will prepare for submission
	 $("#repititions").change(function(){
		prepareForSubmission();
	 });

	 // Handles  current life trapped emotion
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
		currentPhrase=("prenatal " + $("#diagnosisname").text()
			+" from "+ $("#presource").val());
		timePrepared=true;
	}


	// Past life funcions
	
	var birthdate;
	$('#relationshipstatus').hide();
	$('#soldierquestion').hide();
	$('#kidnappedquestion').hide();
	$('#kidnappingage').hide();
	
	$('#pastage, #died').change(function(){

		birthdate= parseInt($('#died').val())-parseInt($('#pastage').val());
		if (birthdate<0){
			birthdate*=-1
			$('#birth').val(birthdate + " B.C.E");
		}
		else{
			$('#birth').val(birthdate + " CE");
		}	
	});

	$('#birth, input[name=gender] ').change(function(){
		if(testPastLifeBase()){
			makePastLifeBase();
		}
	} );

	$('#pastage').change(function(){
		if (parseInt($('#pastage').val())>12){
			$('#relationshipstatus').show();
		}
		else{
			$('#relationshipstatus').hide();
		}
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
			$('#kidnappingage').show();
		}
		else{
			$('#kidnappingage').hide();
			$('#kidnappinginput').val('');
		}
		makePastLife();
	});

	$('#agekidnapped').change(function(){
		var age =parseInt($('#agekidnapped').val());
		if(age<99){
			$('#kidnappinginput').val("You were kidnapped at age" + age);
			$('#kidnappingageerror').show();;
		}
		else{
			$('#kidnappinginput').val("");
			$('#kidnappingageerror').hide();;
		}

		makePastLife();
	});

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

	 function makePastLifeBase(){
	 	if(testPastLifeBase()){
	 		$('#life').text($('input[name=gender]:checked').val()+ " Born: "+ $('#birth').val()
			+ " Died: "+ $('#died').val() + " at age " + $('#pastage').val());
	 	}
	 	else{
	 		$('#life').text('');
	 	}
	 } 
	function testPastLifeBase(){
		return($('input[name=gender]:checked') && birthdate>-1);
	}
	function makePastLife(){
		if(testPastLifeBase()){
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
	
			
	function updatePastLifeStatement(){
		if($('input[name="emotions[]"]:checked').length>0){
			if($('#life').val().length> 21){
				preparePastLife();
				$("#lifeerror").hide()
			}
			else{
				currentPhrase="";
				timePrepared=false;
				$("#lifeerror").show();
			}
		}
	}


	function preparePastLife(){
		currentPhrase=$('#life').text();
		timePrepared=true; 
	}

	
	//Inherited emotions
	var lastentry;
	var countadd=0;
	var patternadd=0;
	var today = new Date();
	var date=today.getFullYear();
	var gen=22;
	var GenList=[];

	$('.singleclicker, #pattogenclicker').click(function(){
		if(testGeneologyReady()){
			currentPhrase=($("#diagnosisname").text()+" inherited from "+ $("#genrepeatsinput").val()
				+" generations of parents ~ " + $('#yeardisplay') + " [from "+ $('#generationpath').val());	

		}
	});

	$('#genrepeatsinput').change(function(){
		if(testGeneologyReady()){
			currentPhrase=($("#diagnosisname").text()+" inherited from "+ $("#genrepeatsinput").val()
				+" generations of parents ~ " + $('#yeardisplay') + " [from "+ $('#generationpath').val());	

		}
	});

	$('.singleclicker').click(function(){
		if($(this).text()!="Undo"){
			$('#generationpath').val($('#generationpath').val()+($(this).text() + " "));
			GenList.push($(this).text().length +1);
			$('#patherror').hide();
			timePrepared=true;
		}
		else{
			undoGenerationAdd();
			if($('#generationpath').val().length<5){
				timePrepared=false;
			}
		}

	});

	$('#clearer').click(function(){
		$('#generationpath').val("");
		countadd=0;
		$('#genrepeatsinput').val('');
		setInheritedDate();
		timePrepared=false;
		GenList=[];
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
			timePrepared=true;
		}

		else{
			$('#parentgenerror').show();
		}
	}

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

	function undoGenerationAdd(){
		var genstring =$('#generationpath').val();
		var genlength=genstring.length;
		if(genstring.length>6){
			var discardGen = GenList.pop();
			genstring=genstring.substring(0, (genlength-discardGen))
			$('#generationpath').val(genstring);
		}		
	}

	function testGeneologyReady(){
		return ($('#generationpath').val().length>0 && $('#yeardisplay').val().length>0);
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
		if($('input[name="emotions[]"]:checked').length>0){
			if(checkRepitions()){
				$(".repitionerror").hide();

				constructDescription();

				return;

			}
			$(".repitionerror").show();
			$('#emptyStatementError').show();
			return
		}
		else
			$('#emotionListError').show();
	}

	function checkRepitions(){
		return($("#repititions").val()>1);
	}

	// marks the time period as unready and will prevent submission
	function markUnready(){
		timePrepared=false;
		$("#description").val(""); 
	}


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


});
