@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> What is the suggestion></label>
                <input
                    type='text'
                    id='suggestion'
                    name='suggestion'
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