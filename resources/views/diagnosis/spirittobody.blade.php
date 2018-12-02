@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/spiritbody.js"></script>

 @endsection
@section('diagnosis')
@include(components.percentagebox)
@endsection
<fieldset>
  	<label> What body part is disconnected?</label>
    	<input
        type='text'
        id='bDisconnection'
        name='bDisconnection'
        value=''>
    	<p id="berror" class="error">Please include second disconection</p>
 </fieldset>

 <div class="row">
 	 <div class="col-md-10">
 	 	@include('layouts.locations')
 	</div>
</div>