@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> Who began the curse?></label>
                <input
                    type='text'
                    id='origin'
                    name='origin'
                    value=''>
                <label> What does the curse do?></label>
                <input
                    type='text'
                    id='curse'
                    name='curse'
                    value=''>

               
                <label> Where is the curse held?></label>
                <input
                    type='text'
                    id='body'
                    name='body'
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