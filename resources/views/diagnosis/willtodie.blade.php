@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/willtodie.js"></script>
 @endsection

@section('diagnosis')
    <label>Age</label>
    <input
        type='number'
        id='age'
        name='age'
        value=''>
@endsection