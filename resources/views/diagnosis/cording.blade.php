@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/cording.js"></script>
 @endsection
@section('diagnosis')

<label>Corded to who</label>
<input
    type='text'
    id='corded'
    name='corded'
    value=''>
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
            value=''>

                            

        <label>x 10 to the</label>
        <input
            type='number'
            class='cordmultiple'
            step="0.01"
            maxlength=3
            id={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
            name={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
            value=''> <br>

        <textarea 
            rows="1" 
            cols="50" 
            readonly 
            id={{$cordport[$client]}}to{{$cordport[$corded]}}text> 
        </textarea>
        <br>

        @endfor
    @endfor
@endsection

