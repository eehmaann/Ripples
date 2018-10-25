@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/allergy.js"></script>
@endsection

@section('diagnosis')
<label> Allergic to what?</label>
<input
    type='text'
    id='allergy'
    name='allergy'
    value=''>
<p id="errormessage" class="error">You must include an allergy</p>
@endsection