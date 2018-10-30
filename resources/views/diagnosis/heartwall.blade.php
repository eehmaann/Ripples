@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/heartwall.js"></script>
@endsection

@section('diagnosis')
    @section('destination','../../../problemsh') 
    <label> How many miles long is the heartwall?</label>
    <input
        type='number'
        id='lengthinput'
        name='lengthinput'
        value=''>
    <p id="errormessage" class="error">You must input a number greater than 10 miles</p>
    
    <label> What is the heartwall made of?</label>
    <input
        type='text'
        id='material'
        name='material'
        autocomplete="on"
        value=''>
    <p id="errormessage2" class="error">You must include a material</p>
@endsection