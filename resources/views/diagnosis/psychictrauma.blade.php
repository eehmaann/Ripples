@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/psychic.js"></script>
@endsection
@section('diagnosis')
@section('destination','../../../problemsemotion') 
<label>At what age did this occur?</label>
    <input
        type='text'
        id='ageinput'
        name='ageinput'
        value=''>

@include('layouts.emotions')
@endsection