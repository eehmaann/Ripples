@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/hypnotic.js"></script>
 @endsection

@section('diagnosis')
<label> Is there a theme></label>
    <input
        type='text'
        id='themetext'
        name='message'
        value=''>

<label> What is the suggestion></label>
    <input
        type='text'
        id='messagetext'
        name='message'
        value=''>
    <p id="errormessage" class="error">There needs to be a suggestion</p>
    <label> What is the new vision?</label>
    <input
        type='text'
        id='improvedtext'
        name='improved'. 
        value=''>
    <p id="errormessage2" class="error">Need a new vision to replace</p>



@endsection