@extends('layouts.practitioner')
@section('content')

@include('components.breadcrumbs')

<div class="container">	
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
	
			<ul>
	  			<li class="clicker"> <a href='/problems/{{ $problems->last()->id }}/clear/{{$appointments->id}}' >
	  				Clear @if($problems->last()->describable_type =='App\Heartwall')
					Heartwall made of {{$problems->last()->describable->material}}
				@else
	  		 	{!! $problems->last()->description !!}</a></li>

	  			@endif
	  			<li class="clicker"> <a href='../../../navigation/{{$appointments->id}}'>Find underlying cause</a></li>
			</ul>
		</div>
		</div>
	</div>
</div>
@include('layouts.footer')
@endsection
 
