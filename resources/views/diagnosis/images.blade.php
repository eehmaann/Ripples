@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/images.js"></script>
@endsection
@section('diagnosis')
 <label>Please describe the image</label><br>
    <textarea
        type='text'
        id='imageTextBox'
        name='imageTextBox'
        cols="50" 
        rows="10">
    </textarea>
        <p id="errormessage" class="error">Please include an description for the image.</p>
@endsection