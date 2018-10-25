@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/anchor.js"></script>
@endsection

@section('diagnosis')
    <label> What is the message?</label>
    <input
        type='text'
        id='messagetext'
        name='message'
        value=''>
    <p id="errormessage" class="error">There needs to be a broadcast message</p>
    <label> What is the new message?</label>
    <input
        type='text'
        id='improvedtext'
        name='improved'
        value=''>
    <p id="errormessage2" class="error">Need a message to replace broadcast?</p>
@endsection