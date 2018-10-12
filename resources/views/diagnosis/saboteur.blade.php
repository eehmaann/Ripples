@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> Who is the saboteur></label>
                <input
                    type='text'
                    id='saboteur'
                    name='saboteur'
                    value=''>
                <label> What weapon was used></label>
                <input
                    type='text'
                    id='weapon'
                    name='weapon'
                    value=''>

               
                <label> Where is it></label>
                <input
                    type='text'
                    id='body'
                    name='body'
                    value=''>

                 <label> What age did this happen></label>
                <input
                    type='number'
                    id='age'
                    name='age'
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