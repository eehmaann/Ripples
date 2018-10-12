@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>


               <label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value=' "No Will to Live" Energy'
                    readonly>
            </div>
        </div>
    </div>
</div>