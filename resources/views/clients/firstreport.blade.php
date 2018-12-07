@extends('layouts.app')
	@section('content')
	@include('reports')



@if(!empty($appointments))
    @foreach($appointments as $appointment)
        <p> HI</p>
    @endforeach
@endif

@endsection