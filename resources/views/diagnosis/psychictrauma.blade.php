@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/psychic.js"></script>
@endsection

@section('diagnosis') 
<label>At what age did this occur?</label>
    <input
        type='text'
        id='age'
        name='age'
        value=''>

@extends('layouts.emotions')
@endsection