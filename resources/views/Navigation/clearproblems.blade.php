@extends('layouts.practitioner')
@section('content')

@include('components.breadcrumbs')

<div class="container">	
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			@if(!empty($lastProblem))
				<h2>Can {{$lastProblem->description}} be cleared</h2>
	  			 <a href='/problems/{{ $lastProblem->id }}/clear/{{$appointment->id}}' class="clicker">
	  				Clear 
	  				@if($lastProblem->describable_type =='App\Heartwall')
						Heartwall made of {{$lastProblem->describable->material}}
					@else
		  		 	{!! $problems->last()->description !!}</a></br>

		  			@endif
	  			 <a href='../../../navigation/{{$appointment->id}}' class="clicker">Find underlying cause</a>
			@else
			<p>All causes have been cleared.  Publish the report</p>
			@endif
		</div>
		</div>
	</div>
</div>
@include('layouts.footer').  
@endsection
 
