@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/sabotuer.js"></script>
@endsection

@section('diagnosis')
<div class="row">
    <fieldset>
        <label> What age did this happen?</label>
        <input
            type='number'
            id='ageinput'
            name='age'
            min="0"
            value=''>
        <p id="ageerror" class="error">Please state what age the sabotage occured</p>
    </fieldset>
</div>

    <div class="row">
    <fieldset>
        <label> Who is the saboteur?</label>
        <input
            type='text'
            id='saboteurinput'
            name='saboteur'
            value=''>
        <p id ="errormessage" class = "error"> Please state who the sabotuer is</p>
    </fieldset>
</div>
<div class="row">
    <fieldset>
        <label> What weapon was used?</label>
        <input
            type='text'
            id='weaponinput'
            name='weapon'
            value=''>
        <p id="weaponerror" class="error"> Please state the weapon that was used</p>
    </fieldset>
</div>
<div class="row">
    <fieldset>
        <label> Where is it?</label>
        <input
            type='text'
            id='bodyinput'
            name='body'
            value=''>
        <p id="bodyerror" class="error">Please state where the sabotuer is.</p>
    </fieldset>
</div>
<div style="border: black solid; padding:1em;">
    <h3 id="bodyPartsToggler">Search for where the {{$diagnosis->name}} may be located</h3>
    @include('layouts.locations')
</div>

@endsection