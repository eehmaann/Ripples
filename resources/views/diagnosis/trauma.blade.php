@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> When did the trauma happen?></label>
                <input
                    type='number'
                    id='age'
                    name='age'
                    value=''>
                <label> Was anyone else involved?></label>
                <input
                    type='text'
                    id='peopleinvolved'
                    name='peopleinvolved'
                    value=''>
               
                <label>Did this come from an emotional or physical trauma></label>
                <input
                    type='text'
                    id='trauma'
                    name='trauma'
                    value=''>

                 <label>Additional Notes></label>
                <input
                    type='text'
                    id='notes'
                    name='notes'
                    value=''>

               <label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value=''
                    readonly>
            </div>
        </div>
    </div>
</div>