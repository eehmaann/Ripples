<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		{{Auth::user()->name}}
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/app.css" type='text/css' rel='stylesheet'>
 	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="/js/report.js"></script>

</head>
<div class="container">
	$appointment=Auth::user()->appointment()->latest()->first();

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
				<div class="1step nest" id="<?php echo $firststep ?>" ><div class="barrier">
			@elseif($problem->steps == 2)<?php $secondstep++; ?>
				<div class="2step nest" id="<?php echo $secondstep ?>"><div class="barrier">
			@elseif($problem->steps == 3)<?php $thirdstep++; ?>
				<div class="3step nest" id="<?php echo $thirdstep ?>"><div class="barrier">
			@elseif($problem->steps == 4)<?php $fourthstep++; ?>
				<div class="4step nest" id="<?php echo $fourthstep ?>"><div class="barrier">
			@elseif($problem->steps == 5)<?php $fifthstep++; ?>
				<div class="5step nest" id="<?php echo $fifthstep ?>"><div class="barrier">
			@elseif($problem->steps == 6)<?php $sixthstep++; ?>
				<div class="6step nest" id="<?php echo $sixthstep ?>"><div class="barrier">
			@elseif($problem->steps == 7)<?php $seventhstep++; ?>
				<div class="7step nest" id="<?php echo $seventhstep ?>"><div class="barrier">
			@elseif($problem->steps == 8)<?php $eighthstep++; ?>
				<div class="8step nest" id="<?php echo $eighthstep ?>"><div class="barrier">
			@elseif($problem->steps == 9)<?php $ninthstep++; ?>
				<div class="9step nest" id="<?php echo $ninthstep ?>"><div class="barrier">
			@elseif($problem->steps == 10)<?php $tenthstep++; ?>
				<div class="10step nest" id="<?php echo $tenthstep ?>"><div class="barrier">
			@elseif($problem->steps == 11)<?php $eleventhstep++; ?>
				<div class="11step nest" id="><?php echo $eleventhstep ?>"><div class="barrier">
			@elseif($problem->steps == 12)<?php $twelfthstep++; ?>
				<div class="12step nest" id="<div class="barrier"><?php echo $twlefthstep ?>"><div class="barrier">
			@else<div ><div class="barrier">
			@endif

				{!!$problem->description!!}
				@if($problem->cleared ==true)cleared
				@endif
				@if(strlen($problem->diagnosis->definition)>3)			
						<div class="barrierdefinition" style="color:blue;">&bull;
							{{$problem->diagnosis->definition}}</div>
				@endif
				</div>

				@if($problem->heartwall)
					Heartwall made of {{$problem->heartwall->material}} extending {{$problem->heartwall->starting_distance}} miles </br> 
				@endif
				@if(count ($problem->emotions)>0)
					{{$problem->diagnosis->name}}s 1 -{{count($problem->emotions)}}
				<ol>
					@foreach ($problem->emotions as $emotion)
						<li><span class="emotionentry">{{$emotion->name}} 
							<br><span class="emotiondefinition" style="color: lightblue;">{{$emotion->definition}}</span></span></li>
					@endforeach
				</ol>
				@endif
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
	Wishing you total unconditio
