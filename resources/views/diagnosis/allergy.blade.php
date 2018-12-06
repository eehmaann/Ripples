@extends('layouts.diagnosis')
@section('pagecss')
<link rel="stylesheet" href='/css/autocomplete.css' type='text/css'>
@endsection
@section('pagejs')
 <script src="/js/allergy.js"></script>
@endsection

@section('diagnosis')
<div class="row">
	<div class="col-2">
		<label> Allergic to what?</label>
		<input
	    type='text'
	    id='allergy'
	    name='allergy'
	    value=''>
		<p id="errormessage" class="error">You must include an allergy</p>
	</div>
</div>
@endsection