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
                    value=''
                    readonly>
                    
                <ul id="spirittype">
                    <li>Disembodied Spirits</li>
                    <li>Evil Spirits</li>
                </ul>
                <ul id="attachment">
                    <li>Attached to you</li>
                    <li>Arround you</li>
                <label> What is the suggestion></label>
                <input
                    type='text'
                    id='suggestion'
                    name='suggestion'
                    value=''>

               
            </div>
        </div>
    </div>
</div>