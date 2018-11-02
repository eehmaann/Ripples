@extends('layouts.practitioner')
<div>
@foreach($problems as $problem)
  <!--<a href='/problems/{{ $problem->id }}/clear' style="border:thin black solid" >-->
  <p>{{$problem->diagnosis->name}}</p>
    {{$loop->last?'':'->'}}
@endforeach
</div>

  <h2>{!! $problems->last()->description !!}</h2>
 
