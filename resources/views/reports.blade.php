<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		{{$appointment->goals->user->name}}
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/app.css" type='text/css' rel='stylesheet'>
 	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="/js/report.js"></script>

</head>
<div class="container">

	<div class="row">
		<p id="reasonForAppointment"> Called for {{$appointment->goals->reason}}</p>
	</div>
	<div class="row">
		<h3 id="appointmentgoal">Goal:  {{$appointment->goals->goal}}</h3>
	</div>

<div class="row">
  <ul>
 	@foreach($appointment->solution as $solution)
        <li>{{ $solution->solution }}</li>
    @endforeach
  </ul>
</div>
  <!-- Tacking values of degrees of nesting-->
  <?php $firststep=0;
  $secondstep=0;
  $thirdstep=0;
  $fourthstep=0;
  $fifthstep=0;
  $sixthstep=0;
  $seventhstep=0;
  $eighthstep=0;
  $ninthstep=0;
  $tenthstep=0;
  $eleventstep=0;
  $twlefthstep=0;
?>
<hr>
<p id="defitionsshower">Click to show definitions</p>
	@foreach($appointment->problems as $problem)
		<div class="row">
			@if($problem->steps == 1)<?php $firststep++; ?>
				<div class="1step barrier" id="<?php echo $firststep ?>" >
			@elseif($problem->steps == 2)<?php $secondstep++; ?>
				<div class="2step barrier" id="<?php echo $secondstep ?>">
			@elseif($problem->steps == 3)<?php $thirdstep++; ?>
				<div class="3step barrier " id="<?php echo $thirdstep ?>">
			@elseif($problem->steps == 4)<?php $fourthstep++; ?>
				<div class="4step barrier" id="<?php echo $fourthstep ?>">
			@elseif($problem->steps == 5)<?php $fifthstep++; ?>
				<div class="5step barrier" id="<?php echo $fifthstep ?>">
			@elseif($problem->steps == 6)<?php $sixthstep++; ?>
				<div class="6step barrier" id="<?php echo $sixthstep ?>">
			@elseif($problem->steps == 7)<?php $seventhstep++; ?>
				<div class="7step barrier" id="<?php echo $seventhstep ?>">
			@elseif($problem->steps == 8)<?php $eighthstep++; ?>
				<div class="8step barrier" id="<?php echo $eighthstep ?>">
			@elseif($problem->steps == 9)<?php $ninthstep++; ?>
				<div class="9step barrier" id="<?php echo $ninthstep ?>">
			@elseif($problem->steps == 10)<?php $tenthstep++; ?>
				<div class="10step barrier step" id="<?php echo $tenthstep ?>">
			@elseif($problem->steps == 11)<?php $eleventhstep++; ?>
				<div class="11step barrier" id="<?php echo $eleventhstep ?>">
			@elseif($problem->steps == 12)<?php $twelfthstep++; ?>
				<div class="12step barrier" id="<?php echo $twlefthstep ?>">
			@else<div >
			@endif

				{{$problem->description}}
				@if($problem->cleared ==true)cleared
				@endif
				@if(strlen($problem->diagnosis->definition))			
					<div class="barrierdefinition">&bull; {{$problem->diagnosis->definition}}</div>
				@endif
				@if($problem->heartwall)
					Heartwall made of {{$problem->heartwall->material}} extending {{$problem->heartwall->starting_distance}} miles </br> 
				@endif
				<ol>
				@foreach ($problem->emotions as $emotion)
					<li><span class="emotionentry">$emotion->name 
						<br><span class="emotiondefinition">$emotion->definition</span></span></li>
				@endforeach
				</ol>
			</div>
		</div>
	@endforeach
	<hr>
<p>I placed a temporary shield around you which will block all negative energies from reaching you.  It will allow love and positive energies in.  It covers you completely </p> 

	<p>Thank you for the honor of working with you.  Please feel free to call or email me.
	Wishing you total unconditional acceptance,</p>
<p>Vera </p>
	
</div>
<!--




	Session_> Diagnosis through problems.  Session->Problem Descrtiption
	Cursor will be question mark to lead to expansion showing definitions
	Session-> Emotions through problems
	Cursor will have question mark and allow for drop down for definition of emotions.  

	<p>I placed a temporary shield around you which will block all negative energies from reaching you.  It will allow love and positive energies in.  It covers you completely </p> 

	<p>Thank you for the honor of working with you.  Please feel free to call or email me.
	Wishing you total unconditional acceptance,</p>
<p>Vera <br>
