@extends('layouts.diagnosis')
@section('pagecss')
<link rel="stylesheet" href='/css/autocomplete.css' type='text/css'>
@endsection
@section('pagejs')
 <script src="/js/intolerance.js"></script>
@endsection

@section('diagnosis')

    <label> Intolerant to what?</label>
    <input
        type='text'
        id='allergy'
        name='allergy'
        value=''><br/>
    <p id="errormessage" class="error">You must include an allergy</p>    
       <label>What will happen? (Not required)</label>
    <input
        type='text'
        id='effect'
        name='effect'
        value=''>
@endsection