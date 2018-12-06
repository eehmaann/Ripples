@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/bodybody.js"></script>

 @endsection
@section('diagnosis')

@include('components.percentagebox')

 <div class="row">
 	 <div class="col-md-5" id="firstPart">
        <p class="clicker">Search for first body part</p>
 		<fieldset>
  			<label> First Disconnection</label>
    		<input
        		type='text'
        		id='aDisconnection'
        		name='aDisconnection'
        		value=''>
    		<p id="aerror" class="error">Please include first disconection</p>
 		</fieldset>
	</div>


 	<div class="col-md-5" id="secondPart">
        <p class="clicker">Search for second body part</p>
 		<fieldset>
  			<label> Second Disconnection</label>
    		<input
        		type='text'
        		id='bDisconnection'
        		name='bDisconnection'
        		value=''>
    		<p id="berror" class="error">Please include second disconection</p>
 		</fieldset>
	</div>
</div>

 <div class="row">
 	 <div class="col-md-10">
 	 	<p > You are setting the body part for <span id="fieldStater">first</span> body part </p>
 	 	<div id="bodyPartsSelector">
 	 		@include('layouts.locations')
 	 	</div>
@endsection