@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnosis.name}}</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class='form-group'>
                <label>Age</label>
                <input
                    type='number'
                    id='age'
                    name='age'
                    value=''>

                <label>Related Event</label>
                <input
                    type='text'
                    id='event'
                    name='event'
                    value=''>


               <label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value='description'
                    readonly>
            </div>
        </div>
    </div>
</div>