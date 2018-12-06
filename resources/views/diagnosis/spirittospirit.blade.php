@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/spirits.js"></script>

 @endsection
@section('diagnosis')
<fieldset>
  <label> How many tears are there?</label>
    <input
        type='number'
        id='tearInput'
        name='tearInput'
        min= "1"
        value=''>
    <p id="tearerror" class="error">Please include what number of tears between 0-100</p>
 </fieldset>
  	<label> What has been torn?  (Heart is most likely)</label>
    	<input
        type='text'
        id='bodyInput'
        name='bodyInput'
        value=''>
    	<p id="bodyerror" class="error">Please include area of tear</p>
 </fieldset>

 <div class="row">
 	 <div class="col-md-10">
 	 	@include('layouts.locations')
 	</div>
</div>
@endsection