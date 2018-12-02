@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/color.js"></script>
 @endsection


@section('diagnosis')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-body">
                <label> What is the color?</label>
                <input
                    type='text'
                    id='colortext'
                    name='color'
                    value=''
                    readonly>
                    <p id="errormessage" class="error">There must be a color selected</p>
                    <div class="colorlist col-md-2">
                        <div class="card">
                            <div class="card-body">
                        <ul>
                            @foreach($colors->color as $color)
                            <li class="clicker"> <span class="colorsplatch" 
                                style="background-color: {{$color->color}}"></span>
                                {{$color->color}}</li>
                            @endforeach
                            <li class="clicker" id="otherClicker">Other</li>
                        </ul>

                    </div>
                    <div id="otherField">
                         <label> What is the new color?</label>
                <input
                    type='text'
                    id='newcolortext'
                    name='newcolor'
                    value=''>
                    <p id="errormessage" class="error">Please write name of color</p>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection