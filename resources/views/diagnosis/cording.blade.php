@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/cording.js"></script>
 @endsection
@section('diagnosis')

<fieldset>
<label>Corded to who</label>
<input
    type='text'
    id='corded'
    name='corded'
    value=''>
    <br>
    <p id="errormessage" class="error">Please state who/what the cord is connected to</p>
</fieldset>
<?php
    $cordport = array("Brain", "Heart", "Gut", "Privates");
    $alength = count($cordport);?>
    @for($client = 0; $client < $alength; $client++)
        @for($corded =0; $corded< $alength; $corded++)
        <label>Number of {{$cordport[$client]}} to {{$cordport[$corded]}} cords</label>
        <input
            type="number"
            class="cord"
            id={{$cordport[$client]}}to{{$cordport[$corded]}}number
            name={{$cordport[$client]}}to{{$cordport[$corded]}}number
            step="0.01"
            maxlength=4
            value=''>

                            

        <label>x 10 to the</label>
        <input
            type='number'
            class='cordmultiple'
            min="1" 
            step="1"
            id={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
            name={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
            value=''> <br>

        <input
            type='text' 
            readonly 
            id={{$cordport[$client]}}to{{$cordport[$corded]}}text
            class="cordtexts"> 
        </input>
        <br>

        @endfor
    @endfor
@endsection

