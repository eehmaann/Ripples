@extends('layouts.practitioner')
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="/js/disconnectionHandler.js"></script>
@section('content')

@include('components.breadcrumbs')

<div class="container">	
    <div class="row justify-content-center">  
	    @if(count($disconnections)>0)
	    <div class="col-md-6">
	   @else
	   <div class="col-md-10">
	   @endif
	        <div class="card">
				@if(!empty($lastProblem))
					<h2>Can {!!$lastProblem->description!!} be cleared</h2>
		  			 	<a href='/problems/{{ $lastProblem->id }}/clear/{{$appointment->id}}' class="clicker disconnectionClearer">
		 
		  				Clear {!! $problems->last()->description !!}</a></br>
		  			
			  		 	

		  			 <a href='../../../navigation/{{$appointment->id}}' class="goClicker">Find underlying cause</a>
				@else
				<p>All causes have been cleared.  Publish the report</p>
				@endif
			</div>
		</div>
		@if(count($disconnections)>0)
			<div class="col-md-5">
				<div class="card">
					<p class="error" id="updateError">You must change the connection level before making an update</p>
					<p class="warning" id="updateWarning">Making an update won't mark the disconnection as repaired.  You will need to click completely repair</p>
					<p class="warning" id="clearWarning">Clicking on Completely Repair is not reversable</p>
					@if(count($disconnections)>1)
						<h3>Disconnections from top most to most nested</h3>
					@endif
					@foreach($disconnections as $disconnection)
						<div style="border:thin black line" class="disconnectionInfo">
						<form action='{{ route("updateDisconnection", [$disconnection->describable->id, $appointment->id])}}' method="POST">
							{{$disconnection->description}} Currently: {{$disconnection->describable->current_connection}}	{{$disconnection->describable->units}}	
							<br>
                 			@csrf
							 <label>Change in Connection</label>

					        <input
					            type='number'  
					            class='updateconnection'	
					            name='updateconnection'
					            min=0
					            value='{{$disconnection->describable->current_connection}}'>
					        
					       <p class="goClicker disconnectionUpdater">Update Connection</p>
					        @if($loop->last)

								<form action='{{ route("repairDisconnection", [$disconnection->describable->id, $appointment->id])}}' method="POST">

	         						<p class="goClicker disconnectionClearer" style="background:pink;">Completely Repair</p>
	         					</form>
					  	
	    					 @endif   
				        </div>
				     </form>	  
					@endforeach
		
				</div>
			</div>
		@endif  
	</div>
</div>
@include('layouts.footer').  
@endsection