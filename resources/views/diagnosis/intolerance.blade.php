@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnosis.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> Intolerant to what?</label>
                <input
                    type='text'
                    id='allergy'
                    name='allergy'
                    value=''
                ><br/>
                   <label>What will happen?</label>
                <input
                    type='text'
                    id='effect'
                    name='effect'
                    value=''
                ><br/>
               <label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value=''
                    readonly
                >
            </div>
        </div>
    </div>
</div>