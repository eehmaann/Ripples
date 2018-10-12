@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnosis.name}}</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class='form-group'>
               <label>Need For T3</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value='There is a need for T3'
                    readonly
                >
            </div>
        </div>
    </div>
</div>