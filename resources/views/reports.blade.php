<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		{{$appointment->goals->user->name}}
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/app.css" type='text/css' rel='stylesheet'>
	<link href="/css/main.css" type='text/css' rel='stylesheet'>
 	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="/js/report.js"></script>

</head>
<body>
<div class="container">
 <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

	<div class="row">
		<p id="reasonForAppointment"> Called for {{$appointment->goals->reason}}</p>
	</div>
	<div class="row">
		<h3 id="appointmentgoal">Goal:  {{$appointment->goals->goal}}</h3>.  
	</div>

<div class="row">
  <ul>
 	@foreach($appointment->solution as $solution)
        <li>{!!$solution->solution !!}</li>
    @endforeach
  </ul>
</div>

<?php
$count = [
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0,
    5=> 0,
    6 => 0,
    7=> 0,
    8=>0,
    9=>0,
    10=>0,
    11=>0,
    12=>0,
];
?>

<hr>
<p id="defitionsshower" class="clicker". style="max-width: 20%">Click to show definitions</p>
	
	@foreach($appointment->problems as $problem)
		<div class="row">
			@if($problem->steps == 1)<?php $count[1]++; ?>
				<div class="1step nest" id="<?php echo $count[1] ?>" ><div class="barrier">
			@elseif($problem->steps == 2)<?php $count[2]++; ?>
				<div class="2step nest" id="<?php echo $count[2] ?>"><div class="barrier">
			@elseif($problem->steps == 3)<?php $count[3]++; ?>
				<div class="3step nest" id="<?php echo $count[3] ?>"><div class="barrier">
			@elseif($problem->steps == 4)<?php $count[4]++; ?>
				<div class="4step nest" id="<?php echo $count[4] ?>"><div class="barrier">
			@elseif($problem->steps == 5)<?php $count[5]++; ?>
				<div class="5step nest" id="<?php echo $count[5] ?>"><div class="barrier">
			@elseif($problem->steps == 6)<?php $count[6]++; ?>
				<div class="6step nest" id="<?php echo $count[6] ?>"><div class="barrier">
			@elseif($problem->steps == 7)<?php $count[7]++; ?>
				<div class="7step nest" id="<?php echo $count[7] ?>"><div class="barrier">
			@elseif($problem->steps == 8)<?php $count[8]++; ?>
				<div class="8step nest" id="<?php echo $count[8] ?>"><div class="barrier">
			@elseif($problem->steps == 9)<?php $count[9]++; ?>
				<div class="9step nest" id="<?php echo $count[9] ?>"><div class="barrier">
			@elseif($problem->steps == 10)<?php $count[10]++; ?>
				<div class="10step nest" id="<?php echo $count[10] ?>"><div class="barrier">
			@elseif($problem->steps == 11)<?php $count[11]++; ?>
				<div class="11step nest" id="><?php echo $count[11] ?>"><div class="barrier">
			@elseif($problem->steps == 12)<?php $count[12]; ?>
				<div class="12step nest" id="<?php echo $count[12] ?>"><div class="barrier">
			@else<div ><div class="barrier">
			@endif

				
			@if(strlen($problem->diagnosis->definition)>3)	
				<span class="hasDefinition">
			@else<span>
			@endif

			@if($problem->describable_type =='App\Heartwall')
				Heartwall made of {{$problem->describable->material}} extending {{$problem->describable->starting_distance}} miles </br> 
			@elseif(($problem->describable_type =='App\Disconnection'))
					{!!$problem->description!!} {{$problem->describable->starting_connection}} {{$problem->describable->units}} </br> 
			@else {!!$problem->description!!}
			@endif

			@if(strlen($problem->diagnosis->picture)>4)
                    <img src="{{$problem->diagnosis->picture}}" style="width:10rem;height:10rem;" alt="Picture of {{$problem->diagnosis->name}}">
            @endif
			@if(strlen($problem->diagnosis->definition)>3)	  
				<div id="circle">
					<div id="text">i</div>
				</div>
			@endif
			</span>
				
				@if($problem->cleared ==true)
					$problem->notes
				@endif
				@if(strlen($problem->diagnosis->definition)>3)			
						<div class="barrierdefinition" style="color:blue;">&bull;
							{{$problem->diagnosis->definition}}</div>
				@endif
				</div>
				
				@if(sizeof($appointment->problems->where('parentproblem_id','=', $problem->id))>1)
					<div> Due to
						<span class="childstep" id="{{$count[$problem->steps+1]+1}}"> 
							<span class="barrier"></span></span>
						- <span class="childstep" id="{{$count[$problem->steps+1]+sizeof($appointment->problems->where('parentproblem_id','=', $problem->id))}}"><span class="barrier"></span></span>
					</div>
				@endif

				
				@if(count ($problem->emotions)>0)
					@if(count ($problem->emotions)>1)
						Emotions
					@endif
					<div style="display:inline;">
						<span class="childstep" id="{{$count[$problem->steps+1]+1}}"> 
							<span class="barrier"></span></span>
						- <span class="childstep" id="{{count($problem->emotions)}}"">
							<span class="barrier"></span></span>
					</div>
				<ul class="list-unstyled">
					@foreach ($problem->emotions as $emotion)
						<?php $count[$problem->steps+1]++; ?>
						<li><span class="emotionentry"> 
							<span class="childstep" id="{{$count[$problem->steps+1]}}"> 
							<span class="barrier"></span></span>{{$emotion->name}} 
							<br><span class="emotiondefinition" style="color: lightblue;">{{$emotion->definition}}</span>
						</span></li>
					@endforeach
				</ul>
				@endif
			</div>
		</div>
	
	@endforeach
	<hr>
<p>I placed a temporary shield around you which will block all negative energies from reaching you.  It will allow love and positive energies in.  It covers you completely </p> 

	<p>Thank you for the honor of working with you.  Please feel free to call or email me.
	Wishing you total unconditional acceptance,</p>
<p>Vera </p>
</span>
</div>
</div>
</div>
@if($user->role=='practitioner')
	@include('components.practitionerViewSearch')
@else
	@include('components.clientreportsearcher')
@endif

</div>	
</body>
