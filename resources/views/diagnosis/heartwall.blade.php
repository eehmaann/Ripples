@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/heartwall.js"></script>
@endsection

@section('diagnosis')
    <label> How many miles long is the heartwall?</label>
    <input
        type='number'
        id='length'
        name='length'
        value=''>
    <p id="errormessage" class="error">You must be a number greater than 10 miles</p>
    <label> What is the heartwall made of?</label>
    <input
        type='text'
        id='material'
        name='material'
        value=''>
    <p id="errormessage2" class="error">You must include a material</p>
@endsection