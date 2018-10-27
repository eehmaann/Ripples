@extends('layouts.diagnosis')


@section('diagnosis')
<p>Are you drinking enough water?</p>
<input type="radio" id="enoughcheck" name="enoughwater" value="Yes" />
<label for="enoughcheck">Yes</label>

<input type="radio" id="notenoughcheck" name="enoughwater" value="No" />
<label for="notenoughcheck">No</label>
<div id="rightamountdiv">
	 <label> How many ounces should be drank?></label>
    <input
        type='number'
        id='ouncesinput'
        name='ouncesinput'
        value=''>
</div>
<div id="rightqualitydiv">
    <p>Are you able to absorb this water properly?</p>
   <input type="radio" id="qualitycheck" name="rightquality" value="Yes" />
   <label for="rightquality">Yes</label>
   <input type="radio" id="inqualitycheck" name="rightquality" value="No" />
   <label for="inqualitycheck">No</label>
</div>

<div id="righttypediv">
    <p>Are you able to absorb this water properly?</p>
   <input type="radio" id="absorbscheck" name="righttype" value="Yes" />
   <label for="absorbscheck">Yes</label>
   <input type="radio" id="notabsorbcheck" name="righttype" value="No" />
   <label for="notabsorbcheck">No</label>
</div>

@endsection