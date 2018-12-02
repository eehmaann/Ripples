@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/willtodie.js"></script>
 @endsection

@section('diagnosis')
 <label>At what age did this occur?</label>
        <input
            type='number'
            id='ageinput'
            name='ageinput'
            pattern='[0-9]*'
            min='0'
            value=''>
        <p id="ageerror" class="error"> Please type an age </p>
@endsection