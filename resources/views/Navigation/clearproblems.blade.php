@extends('layouts.practitioner')
<div>
@foreach($problems as $problem)
  <!--<a href='/problems/{{ $problem->id }}/clear' style="border:thin black solid" >-->
  <p>{{$problem->diagnosis->name}}</p>
    {{$loop->last?'':'->'}}
@endforeach
</div>
{{$appointments->id}}
  <h2>{!! $problems->last()->description !!}</h2>

  <ul>
  	<li> <a href='/problems/{{ $problems->last()->id }}/clear/{{$appointments->id}}' >
  		Clear  {!! $problems->last()->description !!}</a></li>
  	<li> <a href='../../../navigation/{{$appointments->id}}'>Find underlying cause</a></li>

 
