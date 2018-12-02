@extends('layouts.diagnosis')

@section('pagecss')
<link rel="stylesheet" href='/css/autocomplete.css' type='text/css'>
@endsection
@section('pagejs')
 <script src="/js/heartwall.js"></script>
@endsection

@section('diagnosis') 
   <div class="row">
        <label> How many miles long is the heartwall?</label><br>
        <input
            type='number'
            id='lengthinput'
            name='lengthinput'
            min='1'
            value=''>
        <p id="errormessage" class="error">You must input a number greater than 10 miles</p>
    </div>
    <div class="row">
        <label> What is the heartwall made of?</label>
        <br>
        <input
            type='text'
            id='material'
            name='material'
            autocomplete="on"
            value=''>
        <p id="errormessage2" class="error">You must include a material</p>
    </div>
@endsection

