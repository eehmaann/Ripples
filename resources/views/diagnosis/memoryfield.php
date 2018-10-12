@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label>What is the Memory</label>
                <input
                    type='text'
                    id='memory'
                    name='memory'
                    value=' "No Will to Live" Energy'>
                 <label>What is the age</label>
                <input
                    type='number'
                    id='age'
                    name='age'
                    value='Age of memory'>

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