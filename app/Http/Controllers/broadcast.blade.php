@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnois.name}}</h1>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <ul>
                    <li class="messageType">Command</li>
                    <li class="messageType">Descriptive </li>
                </ul>
                <label> What is the message></label>
                <input
                    type='text'
                    id='message'
                    name='message'
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