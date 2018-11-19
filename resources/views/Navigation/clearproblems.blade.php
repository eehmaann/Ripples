@extends('layouts.practitioner')
@section('content')

@include('layouts.breadcrumbs')

<div class="container">	
	
	<ul>
	  <li> <a href='/problems/{{ $problems->last()->id }}/clear/{{$appointments->id}}' >
	  		Clear  {!! $problems->last()->description !!}</a></li>

	  <li> <a href='../../../navigation/{{$appointments->id}}'>Find underlying cause</a></li>
	</ul>
</div>
@include('layouts.footer')
@endsection
 
