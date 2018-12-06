@extends('layouts.diagnosis')
@section('pagecss')
<link rel="stylesheet" href='/css/autocomplete.css' type='text/css'>
@endsection
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
            name='saboteurinput'
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
            name='weaponinput'
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
<div class="row">
    <fieldset>
        <label> How many sabotuers?</label>
        <input
            type='number'
            id='amountSaboteurs'
            name='amountSaboteurs'
            min=1
            value='1'>
        <p id="amounterror" class="error">please state the number of sabotuers</p>
    </fieldset>
</div>
<div style="border: black solid; padding:1em;">
    <h3 id="bodyPartsToggler">Search for where the {{$diagnosis->name}} may be located</h3>
        <div id="LocationDisplay">
            @include('layouts.locations')
        </div> 
</div>

@endsection