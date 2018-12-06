@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/dehydration.js"></script>
 @endsection

@section('diagnosis')
<p>Are you drinking enough water?</p>
<input type="radio" id="enoughcheck" name="enoughwater" value="Yes" />
<label for="enoughcheck">Yes</label>

<input type="radio" id="notenoughcheck" name="enoughwater" value="No" />
<label for="notenoughcheck">No</label>


<div id="rightqualitydiv">
    <p>Are you taking the right type of water?</p>
   <input type="radio" id="qualitycheck" name="rightquality" value="Yes" />
   <label for="rightquality">Yes</label>
   <input type="radio" id="inqualitycheck" name="rightquality" value="No" />
   <label for="inqualitycheck">No</label>
</div>
<div class="row">
<textarea rows="4" cols="30" id="suggestion">
</textarea>
<p class="error" id="solutionError">Please make include a suggested action</p>
</div>

@endsection 